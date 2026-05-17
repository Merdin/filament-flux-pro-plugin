<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Autocomplete;

use Closure;
use Filament\Forms\Components\Field;
use Filament\Support\Services\RelationshipJoiner;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;
use LogicException;

class Autocomplete extends Field
{
    protected string $view = 'filament-flux-pro::components.autocomplete.autocomplete';

    /** @var array<int|string, string>|Closure */
    protected array | Closure $options = [];

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $size = null;

    protected string | Closure | null $variant = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $kbd = null;

    protected bool | Closure $clearable = false;

    protected bool | Closure $copyable = false;

    protected bool | Closure $viewable = false;

    protected string | Closure | null $mask = null;

    protected string | Closure | null $containerClass = null;

    protected string | Closure | null $inputClass = null;

    protected string | Closure | null $relationship = null;

    protected string | Closure | null $relationshipTitleAttribute = null;

    protected ?Closure $modifyRelationshipQueryUsing = null;

    protected ?Closure $getOptionLabelFromRecordUsing = null;

    /** @param  array<int|string, string> | Closure  $options */
    public function options(array | Closure $options): static
    {
        $this->options = $options;

        return $this;
    }

    /** @return array<int|string, string> */
    public function getOptions(): array
    {
        return $this->evaluate($this->options);
    }

    public function relationship(
        string | Closure | null $name = null,
        string | Closure | null $titleAttribute = null,
        ?Closure $modifyQueryUsing = null,
    ): static {
        $this->relationship = $name ?? $this->getName();
        $this->relationshipTitleAttribute = $titleAttribute;
        $this->modifyRelationshipQueryUsing = $modifyQueryUsing;

        $this->options(static function (Autocomplete $component): array {
            return $component->getOptionsFromRelationship();
        });

        $this->loadStateFromRelationshipsUsing(static function (Autocomplete $component): void {
            $component->fillStateFromRelationship();
        });

        $this->saveRelationshipsUsing(static function (Autocomplete $component): void {
            $component->saveStateToRelationship();
        });

        $this->dehydrated(fn (Autocomplete $component): bool => $component->isSaved());

        return $this;
    }

    public function getOptionLabelFromRecordUsing(?Closure $callback): static
    {
        $this->getOptionLabelFromRecordUsing = $callback;

        return $this;
    }

    public function hasOptionLabelFromRecordUsingCallback(): bool
    {
        return $this->getOptionLabelFromRecordUsing !== null;
    }

    public function getOptionLabelFromRecord(Model $record): string
    {
        return $this->evaluate(
            $this->getOptionLabelFromRecordUsing,
            namedInjections: ['record' => $record],
            typedInjections: [Model::class => $record, $record::class => $record],
        );
    }

    public function getLabel(): string | Htmlable | null
    {
        if ($this->label === null && $this->hasRelationship()) {
            $label = (string) str($this->getRelationshipName())
                ->before('.')
                ->kebab()
                ->replace(['-', '_'], ' ')
                ->ucfirst();

            return ($this->shouldTranslateLabel) ? __($label) : $label;
        }

        return parent::getLabel();
    }

    public function getRelationship(): ?BelongsTo
    {
        if (! $this->hasRelationship()) {
            return null;
        }

        $record = $this->getModelInstance();
        $relationship = null;
        $relationshipName = $this->getRelationshipName();

        foreach (explode('.', $relationshipName) as $nestedRelationshipName) {
            if (! $record->isRelation($nestedRelationshipName)) {
                $relationship = null;

                break;
            }

            $relationship = $record->{$nestedRelationshipName}();
            $record = $relationship->getRelated();
        }

        if (! $relationship) {
            throw new LogicException("The relationship [{$relationshipName}] does not exist on the model [{$this->getModel()}].");
        }

        return $relationship;
    }

    public function getRelationshipName(): ?string
    {
        return $this->evaluate($this->relationship);
    }

    public function getRelationshipTitleAttribute(): ?string
    {
        return $this->evaluate($this->relationshipTitleAttribute);
    }

    public function hasRelationship(): bool
    {
        return filled($this->getRelationshipName());
    }

    public function getOptionsFromRelationship(): array
    {
        $relationship = Relation::noConstraints(fn () => $this->getRelationship());

        $relationshipQuery = app(RelationshipJoiner::class)->prepareQueryForNoConstraints($relationship);

        if ($this->modifyRelationshipQueryUsing) {
            $relationshipQuery = $this->evaluate($this->modifyRelationshipQueryUsing, [
                'query' => $relationshipQuery,
                'search' => null,
            ]) ?? $relationshipQuery;
        }

        $qualifiedRelatedKeyName = $relationship->getQualifiedOwnerKeyName();

        if ($this->hasOptionLabelFromRecordUsingCallback()) {
            return $relationshipQuery
                ->get()
                ->mapWithKeys(fn (Model $record) => [
                    $record->{Str::afterLast($qualifiedRelatedKeyName, '.')} => $this->getOptionLabelFromRecord($record),
                ])
                ->toArray();
        }

        $titleAttribute = $this->getRelationshipTitleAttribute();

        if (empty($relationshipQuery->getQuery()->orders)) {
            $relationshipQuery->orderBy($relationshipQuery->qualifyColumn($titleAttribute));
        }

        return $relationshipQuery
            ->pluck($relationshipQuery->qualifyColumn($titleAttribute), $qualifiedRelatedKeyName)
            ->toArray();
    }

    public function fillStateFromRelationship(): void
    {
        if (filled($this->getState())) {
            return;
        }

        $relationship = $this->getRelationship();

        if (! $relationship instanceof BelongsTo) {
            return;
        }

        $record = $this->getRecord();
        $relationshipName = $this->getRelationshipName();

        if (
            ($record instanceof Model) &&
            $record->relationLoaded($relationshipName)
        ) {
            $relatedRecord = $record->getRelationValue($relationshipName);
            $this->state($relatedRecord?->getAttribute($relationship->getOwnerKeyName()));

            return;
        }

        $relatedModel = $relationship->getResults();
        $this->state($relatedModel?->getAttribute($relationship->getOwnerKeyName()));
    }

    public function saveStateToRelationship(): void
    {
        $relationship = $this->getRelationship();

        if (! $relationship instanceof BelongsTo) {
            return;
        }

        $record = $this->getRecord();

        if (
            $record->wasRecentlyCreated &&
            filled($record->getAttributeValue($relationship->getForeignKeyName()))
        ) {
            return;
        }

        $relationship->associate($this->getState());
        $record->wasRecentlyCreated && $record->save();
    }

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }

    public function variant(string | Closure | null $variant): static
    {
        $this->variant = $variant;

        return $this;
    }

    public function getVariant(): ?string
    {
        return $this->evaluate($this->variant);
    }

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function iconTrailing(string | Closure | null $icon): static
    {
        $this->iconTrailing = $icon;

        return $this;
    }

    public function getIconTrailing(): ?string
    {
        return $this->evaluate($this->iconTrailing);
    }

    public function kbd(string | Closure | null $kbd): static
    {
        $this->kbd = $kbd;

        return $this;
    }

    public function getKbd(): ?string
    {
        return $this->evaluate($this->kbd);
    }

    public function clearable(bool | Closure $condition = true): static
    {
        $this->clearable = $condition;

        return $this;
    }

    public function getClearable(): bool
    {
        return (bool) $this->evaluate($this->clearable);
    }

    public function copyable(bool | Closure $condition = true): static
    {
        $this->copyable = $condition;

        return $this;
    }

    public function getCopyable(): bool
    {
        return (bool) $this->evaluate($this->copyable);
    }

    public function viewable(bool | Closure $condition = true): static
    {
        $this->viewable = $condition;

        return $this;
    }

    public function getViewable(): bool
    {
        return (bool) $this->evaluate($this->viewable);
    }

    public function mask(string | Closure | null $mask): static
    {
        $this->mask = $mask;

        return $this;
    }

    public function getMask(): ?string
    {
        return $this->evaluate($this->mask);
    }

    public function containerClass(string | Closure | null $class): static
    {
        $this->containerClass = $class;

        return $this;
    }

    public function getContainerClass(): ?string
    {
        return $this->evaluate($this->containerClass);
    }

    public function inputClass(string | Closure | null $class): static
    {
        $this->inputClass = $class;

        return $this;
    }

    public function getInputClass(): ?string
    {
        return $this->evaluate($this->inputClass);
    }
}

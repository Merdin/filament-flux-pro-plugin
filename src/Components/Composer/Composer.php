<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Composer;

use Closure;
use Filament\Schemas\Components\Component;

class Composer extends Component
{
    protected string $view = 'filament-flux-pro::components.composer.composer';

    const INPUT_SCHEMA_KEY = 'input';

    const HEADER_SCHEMA_KEY = 'header';

    const FOOTER_SCHEMA_KEY = 'footer';

    const ACTIONS_LEADING_SCHEMA_KEY = 'actionsLeading';

    const ACTIONS_TRAILING_SCHEMA_KEY = 'actionsTrailing';

    protected string | Closure | null $value = null;

    protected string | Closure | null $name = null;

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $label = null;

    protected bool | Closure $labelSrOnly = false;

    protected string | Closure | null $description = null;

    protected bool | Closure $descriptionSrOnly = false;

    protected int | Closure | null $rows = null;

    protected int | Closure | null $maxRows = null;

    protected bool | Closure $inline = false;

    protected string | Closure | null $submit = null;

    protected bool | Closure $disabled = false;

    protected bool | Closure $invalid = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function value(string | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->evaluate($this->value);
    }

    public function name(string | Closure | null $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
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

    public function label(string | Closure | null $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->evaluate($this->label);
    }

    public function labelSrOnly(bool | Closure $condition = true): static
    {
        $this->labelSrOnly = $condition;

        return $this;
    }

    public function getLabelSrOnly(): bool
    {
        return (bool) $this->evaluate($this->labelSrOnly);
    }

    public function description(string | Closure | null $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->evaluate($this->description);
    }

    public function descriptionSrOnly(bool | Closure $condition = true): static
    {
        $this->descriptionSrOnly = $condition;

        return $this;
    }

    public function getDescriptionSrOnly(): bool
    {
        return (bool) $this->evaluate($this->descriptionSrOnly);
    }

    public function rows(int | Closure | null $rows): static
    {
        $this->rows = $rows;

        return $this;
    }

    public function getRows(): ?int
    {
        return $this->evaluate($this->rows);
    }

    public function maxRows(int | Closure | null $maxRows): static
    {
        $this->maxRows = $maxRows;

        return $this;
    }

    public function getMaxRows(): ?int
    {
        return $this->evaluate($this->maxRows);
    }

    public function inline(bool | Closure $condition = true): static
    {
        $this->inline = $condition;

        return $this;
    }

    public function getInline(): bool
    {
        return (bool) $this->evaluate($this->inline);
    }

    public function submit(string | Closure | null $submit): static
    {
        $this->submit = $submit;

        return $this;
    }

    public function getSubmit(): ?string
    {
        return $this->evaluate($this->submit);
    }

    public function disabled(bool | Closure $condition = true): static
    {
        $this->disabled = $condition;

        return $this;
    }

    public function getDisabled(): bool
    {
        return (bool) $this->evaluate($this->disabled);
    }

    public function invalid(bool | Closure $condition = true): static
    {
        $this->invalid = $condition;

        return $this;
    }

    public function getInvalid(): bool
    {
        return (bool) $this->evaluate($this->invalid);
    }

    public function input(array | Closure $components): static
    {
        $this->childComponents($components, static::INPUT_SCHEMA_KEY);

        return $this;
    }

    public function header(array | Closure $components): static
    {
        $this->childComponents($components, static::HEADER_SCHEMA_KEY);

        return $this;
    }

    public function footer(array | Closure $components): static
    {
        $this->childComponents($components, static::FOOTER_SCHEMA_KEY);

        return $this;
    }

    public function actionsLeading(array | Closure $components): static
    {
        $this->childComponents($components, static::ACTIONS_LEADING_SCHEMA_KEY);

        return $this;
    }

    public function actionsTrailing(array | Closure $components): static
    {
        $this->childComponents($components, static::ACTIONS_TRAILING_SCHEMA_KEY);

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Select;

use Closure;
use Filament\Forms\Components\Field;

class Select extends Field
{
    protected string $view = 'filament-flux-pro::components.select.select';

    const BUTTON_SCHEMA_KEY = 'button';

    const INPUT_SCHEMA_KEY = 'input';

    const SEARCH_SCHEMA_KEY = 'search';

    const EMPTY_SCHEMA_KEY = 'empty';

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $size = null;

    protected string | Closure | null $variant = null;

    protected bool | Closure $multiple = false;

    protected bool | Closure | null $filter = null;

    protected bool | Closure $searchable = false;

    protected string | Closure | null $empty = null;

    protected bool | Closure $clearable = false;

    protected string | Closure | null $selectedSuffix = null;

    protected string | Closure | null $clear = null;

    protected string | Closure | null $indicator = null;

    public function buttonSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::BUTTON_SCHEMA_KEY);

        return $this;
    }

    public function inputSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::INPUT_SCHEMA_KEY);

        return $this;
    }

    public function searchSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::SEARCH_SCHEMA_KEY);

        return $this;
    }

    public function emptySlot(array | Closure $components): static
    {
        $this->childComponents($components, static::EMPTY_SCHEMA_KEY);

        return $this;
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

    public function multiple(bool | Closure $condition = true): static
    {
        $this->multiple = $condition;

        return $this;
    }

    public function getMultiple(): bool
    {
        return (bool) $this->evaluate($this->multiple);
    }

    public function filter(bool | Closure | null $filter): static
    {
        $this->filter = $filter;

        return $this;
    }

    public function getFilter(): ?bool
    {
        $value = $this->evaluate($this->filter);

        return $value === null ? null : (bool) $value;
    }

    public function searchable(bool | Closure $condition = true): static
    {
        $this->searchable = $condition;

        return $this;
    }

    public function getSearchable(): bool
    {
        return (bool) $this->evaluate($this->searchable);
    }

    public function empty(string | Closure | null $message): static
    {
        $this->empty = $message;

        return $this;
    }

    public function getEmpty(): ?string
    {
        return $this->evaluate($this->empty);
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

    public function selectedSuffix(string | Closure | null $suffix): static
    {
        $this->selectedSuffix = $suffix;

        return $this;
    }

    public function getSelectedSuffix(): ?string
    {
        return $this->evaluate($this->selectedSuffix);
    }

    public function clear(string | Closure | null $clear): static
    {
        $this->clear = $clear;

        return $this;
    }

    public function getClear(): ?string
    {
        return $this->evaluate($this->clear);
    }

    public function indicator(string | Closure | null $indicator): static
    {
        $this->indicator = $indicator;

        return $this;
    }

    public function getIndicator(): ?string
    {
        return $this->evaluate($this->indicator);
    }
}

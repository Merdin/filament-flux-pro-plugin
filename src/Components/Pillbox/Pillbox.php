<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Pillbox;

use Closure;
use Filament\Forms\Components\Field;

class Pillbox extends Field
{
    protected string $view = 'filament-flux-pro::components.pillbox.pillbox';

    const TRIGGER_SCHEMA_KEY = 'trigger';

    const INPUT_SCHEMA_KEY = 'input';

    const EMPTY_SCHEMA_KEY = 'empty';

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $size = null;

    protected string | Closure | null $variant = null;

    protected bool | Closure $multiple = false;

    protected bool | Closure $searchable = false;

    protected string | Closure | null $searchPlaceholder = null;

    protected bool | Closure | null $filter = null;

    public function triggerSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::TRIGGER_SCHEMA_KEY);

        return $this;
    }

    public function inputSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::INPUT_SCHEMA_KEY);

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

    public function searchable(bool | Closure $condition = true): static
    {
        $this->searchable = $condition;

        return $this;
    }

    public function getSearchable(): bool
    {
        return (bool) $this->evaluate($this->searchable);
    }

    public function searchPlaceholder(string | Closure | null $placeholder): static
    {
        $this->searchPlaceholder = $placeholder;

        return $this;
    }

    public function getSearchPlaceholder(): ?string
    {
        return $this->evaluate($this->searchPlaceholder);
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
}

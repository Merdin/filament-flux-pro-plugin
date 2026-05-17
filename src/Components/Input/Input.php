<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Input;

use Closure;
use Filament\Forms\Components\Field;

class Input extends Field
{
    protected string $view = 'filament-flux-pro::components.input.input';

    const ICON_SCHEMA_KEY = 'icon';

    const ICON_LEADING_SCHEMA_KEY = 'iconLeading';

    const ICON_TRAILING_SCHEMA_KEY = 'iconTrailing';

    protected string | Closure | null $type = null;

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $size = null;

    protected string | Closure | null $variant = null;

    protected bool | Closure $readonly = false;

    protected bool | Closure $multiple = false;

    protected string | Closure | null $mask = null;

    protected string | Closure | null $maskDynamic = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $kbd = null;

    protected bool | Closure $clearable = false;

    protected bool | Closure $copyable = false;

    protected bool | Closure $viewable = false;

    protected string | Closure | null $as = null;

    protected string | Closure | null $inputClass = null;

    public function type(string | Closure | null $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->evaluate($this->type);
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

    public function readonly(bool | Closure $condition = true): static
    {
        $this->readonly = $condition;

        return $this;
    }

    public function getReadonly(): bool
    {
        return (bool) $this->evaluate($this->readonly);
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

    public function mask(string | Closure | null $mask): static
    {
        $this->mask = $mask;

        return $this;
    }

    public function getMask(): ?string
    {
        return $this->evaluate($this->mask);
    }

    public function maskDynamic(string | Closure | null $mask): static
    {
        $this->maskDynamic = $mask;

        return $this;
    }

    public function getMaskDynamic(): ?string
    {
        return $this->evaluate($this->maskDynamic);
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

    public function as(string | Closure | null $element): static
    {
        $this->as = $element;

        return $this;
    }

    public function getAs(): ?string
    {
        return $this->evaluate($this->as);
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

    public function iconSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::ICON_SCHEMA_KEY);

        return $this;
    }

    public function iconLeadingSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::ICON_LEADING_SCHEMA_KEY);

        return $this;
    }

    public function iconTrailingSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::ICON_TRAILING_SCHEMA_KEY);

        return $this;
    }
}

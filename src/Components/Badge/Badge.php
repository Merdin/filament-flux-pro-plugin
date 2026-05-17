<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Badge;

use Closure;
use Filament\Schemas\Components\Component;

class Badge extends Component
{
    protected string $view = 'filament-flux-pro::components.badge.badge';

    protected string | Closure | null $text = null;

    protected string | Closure | null $color = null;

    protected string | Closure | null $size = null;

    protected bool | Closure $rounded = false;

    protected string | Closure | null $variant = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $iconVariant = null;

    protected string | Closure | null $element = null;

    protected string | Closure | null $inset = null;

    final public function __construct(string | Closure | null $text = null)
    {
        if ($text !== null) {
            $this->text($text);
        }
    }

    public static function make(string | Closure | null $text = null): static
    {
        $static = app(static::class, ['text' => $text]);
        $static->configure();

        return $static;
    }

    public function text(string | Closure | null $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->evaluate($this->text);
    }

    public function color(string | Closure | null $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->evaluate($this->color);
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

    public function rounded(bool | Closure $condition = true): static
    {
        $this->rounded = $condition;

        return $this;
    }

    public function getRounded(): bool
    {
        return (bool) $this->evaluate($this->rounded);
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

    public function iconVariant(string | Closure | null $variant): static
    {
        $this->iconVariant = $variant;

        return $this;
    }

    public function getIconVariant(): ?string
    {
        return $this->evaluate($this->iconVariant);
    }

    public function as(string | Closure | null $element): static
    {
        $this->element = $element;

        return $this;
    }

    public function getElement(): ?string
    {
        return $this->evaluate($this->element);
    }

    public function inset(string | Closure | null $inset): static
    {
        $this->inset = $inset;

        return $this;
    }

    public function getInset(): ?string
    {
        return $this->evaluate($this->inset);
    }
}

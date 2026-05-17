<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Button;

use Closure;
use Filament\Schemas\Components\Component;

class Button extends Component
{
    protected string $view = 'filament-flux-pro::components.button.button';

    protected string | Closure | null $text = null;

    protected string | Closure | null $element = null;

    protected string | Closure | null $href = null;

    protected string | Closure | null $type = null;

    protected string | Closure | null $variant = null;

    protected string | Closure | null $size = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    protected string | Closure | null $iconTrailing = null;

    protected bool | Closure $square = false;

    protected string | Closure | null $align = null;

    protected string | Closure | null $inset = null;

    protected bool | Closure $loading = true;

    protected string | Closure | null $tooltip = null;

    protected string | Closure | null $tooltipPosition = null;

    protected string | Closure | null $tooltipKbd = null;

    protected string | Closure | null $kbd = null;

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

    public function as(string | Closure | null $element): static
    {
        $this->element = $element;

        return $this;
    }

    public function getElement(): ?string
    {
        return $this->evaluate($this->element);
    }

    public function href(string | Closure | null $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->evaluate($this->href);
    }

    public function type(string | Closure | null $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->evaluate($this->type);
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

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
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

    public function iconVariant(string | Closure | null $variant): static
    {
        $this->iconVariant = $variant;

        return $this;
    }

    public function getIconVariant(): ?string
    {
        return $this->evaluate($this->iconVariant);
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

    public function square(bool | Closure $condition = true): static
    {
        $this->square = $condition;

        return $this;
    }

    public function getSquare(): bool
    {
        return (bool) $this->evaluate($this->square);
    }

    public function align(string | Closure | null $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->evaluate($this->align);
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

    public function loading(bool | Closure $condition = true): static
    {
        $this->loading = $condition;

        return $this;
    }

    public function getLoading(): bool
    {
        return (bool) $this->evaluate($this->loading);
    }

    public function tooltip(string | Closure | null $tooltip): static
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function getTooltip(): ?string
    {
        return $this->evaluate($this->tooltip);
    }

    public function tooltipPosition(string | Closure | null $position): static
    {
        $this->tooltipPosition = $position;

        return $this;
    }

    public function getTooltipPosition(): ?string
    {
        return $this->evaluate($this->tooltipPosition);
    }

    public function tooltipKbd(string | Closure | null $kbd): static
    {
        $this->tooltipKbd = $kbd;

        return $this;
    }

    public function getTooltipKbd(): ?string
    {
        return $this->evaluate($this->tooltipKbd);
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
}

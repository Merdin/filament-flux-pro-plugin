<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Avatar;

use Closure;
use Filament\Schemas\Components\Component;

class Avatar extends Component
{
    protected string $view = 'filament-flux-pro::components.avatar.avatar';

    protected string | Closure | null $name = null;

    protected string | Closure | null $src = null;

    protected string | Closure | null $initials = null;

    protected string | Closure | null $alt = null;

    protected string | Closure | null $size = null;

    protected string | Closure | null $color = null;

    protected string | Closure | null $colorSeed = null;

    protected bool | Closure $circle = false;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    protected string | bool | Closure | null $tooltip = null;

    protected string | Closure | null $tooltipPosition = null;

    protected string | bool | Closure | null $badge = null;

    protected string | Closure | null $badgeColor = null;

    protected bool | Closure $badgeCircle = false;

    protected string | Closure | null $badgePosition = null;

    protected string | Closure | null $badgeVariant = null;

    protected string | Closure | null $element = null;

    protected string | Closure | null $href = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
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

    public function src(string | Closure | null $src): static
    {
        $this->src = $src;

        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->evaluate($this->src);
    }

    public function initials(string | Closure | null $initials): static
    {
        $this->initials = $initials;

        return $this;
    }

    public function getInitials(): ?string
    {
        return $this->evaluate($this->initials);
    }

    public function alt(string | Closure | null $alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->evaluate($this->alt);
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

    public function color(string | Closure | null $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->evaluate($this->color);
    }

    public function colorSeed(string | Closure | null $seed): static
    {
        $this->colorSeed = $seed;

        return $this;
    }

    public function getColorSeed(): ?string
    {
        return $this->evaluate($this->colorSeed);
    }

    public function circle(bool | Closure $condition = true): static
    {
        $this->circle = $condition;

        return $this;
    }

    public function getCircle(): bool
    {
        return (bool) $this->evaluate($this->circle);
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

    public function tooltip(string | bool | Closure | null $tooltip): static
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function getTooltip(): string | bool | null
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

    public function badge(string | bool | Closure | null $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getBadge(): string | bool | null
    {
        return $this->evaluate($this->badge);
    }

    public function badgeColor(string | Closure | null $color): static
    {
        $this->badgeColor = $color;

        return $this;
    }

    public function getBadgeColor(): ?string
    {
        return $this->evaluate($this->badgeColor);
    }

    public function badgeCircle(bool | Closure $condition = true): static
    {
        $this->badgeCircle = $condition;

        return $this;
    }

    public function getBadgeCircle(): bool
    {
        return (bool) $this->evaluate($this->badgeCircle);
    }

    public function badgePosition(string | Closure | null $position): static
    {
        $this->badgePosition = $position;

        return $this;
    }

    public function getBadgePosition(): ?string
    {
        return $this->evaluate($this->badgePosition);
    }

    public function badgeVariant(string | Closure | null $variant): static
    {
        $this->badgeVariant = $variant;

        return $this;
    }

    public function getBadgeVariant(): ?string
    {
        return $this->evaluate($this->badgeVariant);
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
}

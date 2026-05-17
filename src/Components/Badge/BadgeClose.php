<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Badge;

use Closure;
use Filament\Schemas\Components\Component;

class BadgeClose extends Component
{
    protected string $view = 'filament-flux-pro::components.badge.close';

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
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
}

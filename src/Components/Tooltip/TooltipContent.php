<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Tooltip;

use Closure;
use Filament\Schemas\Components\Component;

class TooltipContent extends Component
{
    protected string $view = 'filament-flux-pro::components.tooltip.tooltip-content';

    protected string | Closure | null $kbd = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
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

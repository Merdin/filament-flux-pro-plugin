<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartAxisMark extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.axis-mark';

    protected string | Closure | null $position = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function position(string | Closure | null $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->evaluate($this->position);
    }
}

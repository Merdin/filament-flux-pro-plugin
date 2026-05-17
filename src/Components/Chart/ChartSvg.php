<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartSvg extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.svg';

    protected string | int | Closure | null $gutter = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function gutter(string | int | Closure | null $gutter): static
    {
        $this->gutter = $gutter;

        return $this;
    }

    public function getGutter(): string | int | null
    {
        return $this->evaluate($this->gutter);
    }
}

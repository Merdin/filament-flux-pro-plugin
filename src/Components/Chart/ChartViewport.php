<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Filament\Schemas\Components\Component;

class ChartViewport extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.viewport';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

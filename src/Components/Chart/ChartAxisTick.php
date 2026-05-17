<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartAxisTick extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.axis-tick';

    protected array | Closure | null $format = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function format(array | Closure | null $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getFormat(): ?array
    {
        return $this->evaluate($this->format);
    }
}

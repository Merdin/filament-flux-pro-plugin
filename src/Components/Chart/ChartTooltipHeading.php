<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartTooltipHeading extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.tooltip-heading';

    protected string | Closure | null $field = null;

    protected array | Closure | null $format = null;

    final public function __construct(string | Closure | null $field = null)
    {
        if ($field !== null) {
            $this->field($field);
        }
    }

    public static function make(string | Closure | null $field = null): static
    {
        $static = app(static::class, ['field' => $field]);
        $static->configure();

        return $static;
    }

    public function field(string | Closure | null $field): static
    {
        $this->field = $field;

        return $this;
    }

    public function getField(): ?string
    {
        return $this->evaluate($this->field);
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

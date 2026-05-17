<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartLegend extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.legend';

    protected string | Closure | null $field = null;

    protected string | Closure | null $label = null;

    final public function __construct(string | Closure | null $label = null)
    {
        if ($label !== null) {
            $this->label($label);
        }
    }

    public static function make(string | Closure | null $label = null): static
    {
        $static = app(static::class, ['label' => $label]);
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

    public function label(string | Closure | null $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->evaluate($this->label);
    }
}

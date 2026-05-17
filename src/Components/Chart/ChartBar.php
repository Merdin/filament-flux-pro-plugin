<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartBar extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.bar';

    protected string | Closure | null $field = null;

    protected string | int | Closure | null $radius = null;

    protected string | Closure | null $width = null;

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

    public function radius(string | int | Closure | null $radius): static
    {
        $this->radius = $radius;

        return $this;
    }

    public function getRadius(): string | int | null
    {
        return $this->evaluate($this->radius);
    }

    public function width(string | Closure | null $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->evaluate($this->width);
    }
}

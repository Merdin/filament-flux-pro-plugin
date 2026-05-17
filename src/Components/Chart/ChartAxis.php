<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Chart;

use Closure;
use Filament\Schemas\Components\Component;

class ChartAxis extends Component
{
    protected string $view = 'filament-flux-pro::components.chart.axis';

    protected string | Closure $axis = 'x';

    protected string | Closure | null $field = null;

    protected array | Closure | null $format = null;

    protected string | Closure | null $scale = null;

    protected string | Closure | null $position = null;

    protected int | Closure | null $tickCount = null;

    protected string | int | float | Closure | null $tickStart = null;

    protected string | int | float | Closure | null $tickEnd = null;

    protected array | Closure | null $tickValues = null;

    protected string | Closure | null $tickPrefix = null;

    protected string | Closure | null $tickSuffix = null;

    final public function __construct(string $axis = 'x')
    {
        $this->axis($axis);
    }

    public static function make(string $axis = 'x'): static
    {
        $static = app(static::class, ['axis' => $axis]);
        $static->configure();

        return $static;
    }

    public function axis(string | Closure $axis): static
    {
        $this->axis = $axis;

        return $this;
    }

    public function getAxis(): string
    {
        return $this->evaluate($this->axis);
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

    public function scale(string | Closure | null $scale): static
    {
        $this->scale = $scale;

        return $this;
    }

    public function getScale(): ?string
    {
        return $this->evaluate($this->scale);
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

    public function tickCount(int | Closure | null $tickCount): static
    {
        $this->tickCount = $tickCount;

        return $this;
    }

    public function getTickCount(): ?int
    {
        return $this->evaluate($this->tickCount);
    }

    public function tickStart(string | int | float | Closure | null $tickStart): static
    {
        $this->tickStart = $tickStart;

        return $this;
    }

    public function getTickStart(): string | int | float | null
    {
        return $this->evaluate($this->tickStart);
    }

    public function tickEnd(string | int | float | Closure | null $tickEnd): static
    {
        $this->tickEnd = $tickEnd;

        return $this;
    }

    public function getTickEnd(): string | int | float | null
    {
        return $this->evaluate($this->tickEnd);
    }

    public function tickValues(array | Closure | null $tickValues): static
    {
        $this->tickValues = $tickValues;

        return $this;
    }

    public function getTickValues(): ?array
    {
        return $this->evaluate($this->tickValues);
    }

    public function tickPrefix(string | Closure | null $tickPrefix): static
    {
        $this->tickPrefix = $tickPrefix;

        return $this;
    }

    public function getTickPrefix(): ?string
    {
        return $this->evaluate($this->tickPrefix);
    }

    public function tickSuffix(string | Closure | null $tickSuffix): static
    {
        $this->tickSuffix = $tickSuffix;

        return $this;
    }

    public function getTickSuffix(): ?string
    {
        return $this->evaluate($this->tickSuffix);
    }
}

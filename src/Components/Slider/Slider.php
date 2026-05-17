<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Slider;

use Closure;
use Filament\Forms\Components\Field;

class Slider extends Field
{
    protected string $view = 'filament-flux-pro::components.slider.slider';

    protected bool | Closure $range = false;

    protected int | float | Closure | null $min = null;

    protected int | float | Closure | null $max = null;

    protected int | float | Closure | null $step = null;

    protected int | float | Closure | null $bigStep = null;

    protected int | float | Closure | null $minStepsBetween = null;

    protected string | Closure | null $trackClass = null;

    protected string | Closure | null $thumbClass = null;

    public function range(bool | Closure $condition = true): static
    {
        $this->range = $condition;

        return $this;
    }

    public function getRange(): bool
    {
        return (bool) $this->evaluate($this->range);
    }

    public function min(int | float | Closure | null $min): static
    {
        $this->min = $min;

        return $this;
    }

    public function getMin(): int | float | null
    {
        return $this->evaluate($this->min);
    }

    public function max(int | float | Closure | null $max): static
    {
        $this->max = $max;

        return $this;
    }

    public function getMax(): int | float | null
    {
        return $this->evaluate($this->max);
    }

    public function step(int | float | Closure | null $step): static
    {
        $this->step = $step;

        return $this;
    }

    public function getStep(): int | float | null
    {
        return $this->evaluate($this->step);
    }

    public function bigStep(int | float | Closure | null $step): static
    {
        $this->bigStep = $step;

        return $this;
    }

    public function getBigStep(): int | float | null
    {
        return $this->evaluate($this->bigStep);
    }

    public function minStepsBetween(int | float | Closure | null $steps): static
    {
        $this->minStepsBetween = $steps;

        return $this;
    }

    public function getMinStepsBetween(): int | float | null
    {
        return $this->evaluate($this->minStepsBetween);
    }

    public function trackClass(string | Closure | null $class): static
    {
        $this->trackClass = $class;

        return $this;
    }

    public function getTrackClass(): ?string
    {
        return $this->evaluate($this->trackClass);
    }

    public function thumbClass(string | Closure | null $class): static
    {
        $this->thumbClass = $class;

        return $this;
    }

    public function getThumbClass(): ?string
    {
        return $this->evaluate($this->thumbClass);
    }
}

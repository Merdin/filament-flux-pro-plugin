<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\TimePicker;

use Closure;
use Filament\Forms\Components\Field;

class TimePicker extends Field
{
    protected string $view = 'filament-flux-pro::components.time-picker.time-picker';

    protected string | Closure | null $type = null;

    protected bool | Closure $multiple = false;

    protected string | Closure | null $timeFormat = null;

    protected int | Closure | null $interval = null;

    protected string | Closure | null $min = null;

    protected string | Closure | null $max = null;

    protected string | Closure | null $unavailable = null;

    protected string | Closure | null $openTo = null;

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $size = null;

    protected bool | Closure $clearable = false;

    protected bool | Closure | null $dropdown = null;

    protected string | Closure | null $locale = null;

    public function type(string | Closure | null $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->evaluate($this->type);
    }

    public function multiple(bool | Closure $condition = true): static
    {
        $this->multiple = $condition;

        return $this;
    }

    public function getMultiple(): bool
    {
        return (bool) $this->evaluate($this->multiple);
    }

    public function timeFormat(string | Closure | null $format): static
    {
        $this->timeFormat = $format;

        return $this;
    }

    public function getTimeFormat(): ?string
    {
        return $this->evaluate($this->timeFormat);
    }

    public function interval(int | Closure | null $interval): static
    {
        $this->interval = $interval;

        return $this;
    }

    public function getInterval(): ?int
    {
        $value = $this->evaluate($this->interval);

        return $value !== null ? (int) $value : null;
    }

    public function min(string | Closure | null $min): static
    {
        $this->min = $min;

        return $this;
    }

    public function getMin(): ?string
    {
        return $this->evaluate($this->min);
    }

    public function max(string | Closure | null $max): static
    {
        $this->max = $max;

        return $this;
    }

    public function getMax(): ?string
    {
        return $this->evaluate($this->max);
    }

    public function unavailable(string | Closure | null $unavailable): static
    {
        $this->unavailable = $unavailable;

        return $this;
    }

    public function getUnavailable(): ?string
    {
        return $this->evaluate($this->unavailable);
    }

    public function openTo(string | Closure | null $time): static
    {
        $this->openTo = $time;

        return $this;
    }

    public function getOpenTo(): ?string
    {
        return $this->evaluate($this->openTo);
    }

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }

    public function clearable(bool | Closure $condition = true): static
    {
        $this->clearable = $condition;

        return $this;
    }

    public function getClearable(): bool
    {
        return (bool) $this->evaluate($this->clearable);
    }

    public function dropdown(bool | Closure | null $dropdown): static
    {
        $this->dropdown = $dropdown;

        return $this;
    }

    public function getDropdown(): ?bool
    {
        $value = $this->evaluate($this->dropdown);

        return $value === null ? null : (bool) $value;
    }

    public function locale(string | Closure | null $locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->evaluate($this->locale);
    }
}

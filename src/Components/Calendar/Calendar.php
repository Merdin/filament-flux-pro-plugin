<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Calendar;

use Closure;
use Filament\Forms\Components\Field;

class Calendar extends Field
{
    protected string $view = 'filament-flux-pro::components.calendar.calendar';

    protected string | Closure | null $mode = null;

    protected string | Closure | null $min = null;

    protected string | Closure | null $max = null;

    protected string | Closure | null $unavailable = null;

    protected string | Closure | null $size = null;

    protected int | Closure | null $startDay = null;

    protected int | Closure | null $months = null;

    protected int | Closure | null $minRange = null;

    protected int | Closure | null $maxRange = null;

    protected string | Closure | null $openTo = null;

    protected bool | Closure $forceOpenTo = false;

    /** Nullable: null = Flux default (shown), false = hidden. */
    protected bool | Closure | null $navigation = null;

    /** Maps to flux:calendar's `static` prop (PHP reserved word). */
    protected bool | Closure $displayOnly = false;

    protected bool | Closure $weekNumbers = false;

    protected bool | Closure $selectableHeader = false;

    protected bool | Closure $withToday = false;

    protected bool | Closure $withInputs = false;

    protected string | Closure | null $locale = null;

    public function mode(string | Closure | null $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->evaluate($this->mode);
    }

    public function range(): static
    {
        return $this->mode('range');
    }

    public function multiple(): static
    {
        return $this->mode('multiple');
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

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }

    public function startDay(int | Closure | null $day): static
    {
        $this->startDay = $day;

        return $this;
    }

    public function getStartDay(): ?int
    {
        return $this->evaluate($this->startDay);
    }

    public function months(int | Closure | null $months): static
    {
        $this->months = $months;

        return $this;
    }

    public function getMonths(): ?int
    {
        return $this->evaluate($this->months);
    }

    public function minRange(int | Closure | null $days): static
    {
        $this->minRange = $days;

        return $this;
    }

    public function getMinRange(): ?int
    {
        return $this->evaluate($this->minRange);
    }

    public function maxRange(int | Closure | null $days): static
    {
        $this->maxRange = $days;

        return $this;
    }

    public function getMaxRange(): ?int
    {
        return $this->evaluate($this->maxRange);
    }

    public function openTo(string | Closure | null $date): static
    {
        $this->openTo = $date;

        return $this;
    }

    public function getOpenTo(): ?string
    {
        return $this->evaluate($this->openTo);
    }

    public function forceOpenTo(bool | Closure $condition = true): static
    {
        $this->forceOpenTo = $condition;

        return $this;
    }

    public function getForceOpenTo(): bool
    {
        return (bool) $this->evaluate($this->forceOpenTo);
    }

    public function navigation(bool | Closure | null $condition = true): static
    {
        $this->navigation = $condition;

        return $this;
    }

    public function withoutNavigation(): static
    {
        return $this->navigation(false);
    }

    public function getNavigation(): bool | null
    {
        return $this->evaluate($this->navigation);
    }

    public function displayOnly(bool | Closure $condition = true): static
    {
        $this->displayOnly = $condition;

        return $this;
    }

    public function getDisplayOnly(): bool
    {
        return (bool) $this->evaluate($this->displayOnly);
    }

    public function weekNumbers(bool | Closure $condition = true): static
    {
        $this->weekNumbers = $condition;

        return $this;
    }

    public function getWeekNumbers(): bool
    {
        return (bool) $this->evaluate($this->weekNumbers);
    }

    public function selectableHeader(bool | Closure $condition = true): static
    {
        $this->selectableHeader = $condition;

        return $this;
    }

    public function getSelectableHeader(): bool
    {
        return (bool) $this->evaluate($this->selectableHeader);
    }

    public function withToday(bool | Closure $condition = true): static
    {
        $this->withToday = $condition;

        return $this;
    }

    public function getWithToday(): bool
    {
        return (bool) $this->evaluate($this->withToday);
    }

    public function withInputs(bool | Closure $condition = true): static
    {
        $this->withInputs = $condition;

        return $this;
    }

    public function getWithInputs(): bool
    {
        return (bool) $this->evaluate($this->withInputs);
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

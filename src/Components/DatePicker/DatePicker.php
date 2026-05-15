<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker;

use Carbon\CarbonInterface;
use Closure;
use Filament\Forms\Components\Field;
use Flux\DateRange;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Enums\Mode;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Enums\Type;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Builder as PresetBuilder;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Preset;

class DatePicker extends Field
{
    protected ?Type $type = null;

    protected ?Mode $mode = null;

    protected ?DateRange $range = null;

    protected ?int $minRange = null;

    protected ?int $maxRange = null;

    protected CarbonInterface | Closure | null $min = null;

    protected CarbonInterface | Closure | null $max = null;

    protected ?string $unavailable = null;

    protected ?string $openTo = null;

    protected bool $forceOpenTo = false;

    protected ?int $months = null;

    protected string $size = 'default';

    protected ?int $startDay = null;

    protected bool $weekNumbers = false;

    protected bool $fixedWeeks = false;

    protected bool $withToday = false;

    protected bool | string | null $withInputs = null;

    protected bool $withConfirmation = false;

    protected bool $withPresets = false;

    protected ?PresetBuilder $presets = null;

    protected ?string $locale = null;

    protected bool $clearable = false;

    protected bool $selectableHeader = false;

    protected bool $invalid = false;

    protected string $view = 'filament-flux-pro::components.date-picker.date-picker';

    public function type(Type $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type?->value ?? Type::default()->value;
    }

    // todo: we should handle range mode
    private function mode(Mode $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    public function getMode(): string
    {
        return $this->mode?->value ?? Mode::default()->value;
    }

    public function range(DateRange $range): static
    {
        $this->range = $range;
        $this->mode(Mode::range);

        return $this;
    }

    public function minRange(int $numberOfDays): static
    {
        $this->minRange = $numberOfDays;

        return $this;
    }

    public function getMinRange(): ?int
    {
        return $this->minRange;
    }

    public function maxRange(int $numberOfDays): static
    {
        $this->maxRange = $numberOfDays;

        return $this;
    }

    public function getMaxRange(): ?int
    {
        return $this->maxRange;
    }

    public function min(CarbonInterface | Closure $date): static
    {
        $this->min = $date;

        return $this;
    }

    public function getMin(): ?string
    {
        $date = $this->evaluate($this->min);

        return $date instanceof CarbonInterface ? $date->toDateString() : $date;
    }

    public function max(CarbonInterface | Closure $date): static
    {
        $this->max = $date;

        return $this;
    }

    public function getMax(): ?string
    {
        $date = $this->evaluate($this->max);

        return $date instanceof CarbonInterface ? $date->toDateString() : $date;
    }

    /**
     * Should be a list of CarbonInterface dates
     *
     * @param  array<int, CarbonInterface>  $listOfDates
     */
    public function unavailable(array $listOfDates): static
    {
        $this->unavailable = collect($listOfDates)->map->toDateString()->implode(',');

        return $this;
    }

    /** @return array<int, string> */
    public function getUnavailable(): ?string
    {
        return $this->unavailable;
    }

    public function openTo(CarbonInterface $date): static
    {
        $this->openTo = $date->toIso8601String();

        return $this;
    }

    public function getOpenTo(): string
    {
        return $this->openTo ?? now()->toDateString();
    }

    public function forceOpenTo(bool $condition = true): static
    {
        $this->forceOpenTo = $condition;

        return $this;
    }

    public function getForceOpenTo(): bool
    {
        return $this->forceOpenTo;
    }

    public function months(int $months): static
    {
        $this->months = $months;

        return $this;
    }

    public function getMonths(): int
    {
        if ($this->getMode() === 'single') {
            $this->months = 1;
        }

        if ($this->getMode() === 'range') {
            $this->months = 2;
        }

        return $this->months;
    }

    public function size(string $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function startDay(int $dayOfWeek)
    {
        $this->startDay = $dayOfWeek;

        return $this;
    }

    public function getStartDay(): ?int
    {
        return $this->startDay;
    }

    public function weekNumbers(bool $condition = true): static
    {
        $this->weekNumbers = $condition;

        return $this;
    }

    public function getWeekNumbers(): bool
    {
        return $this->weekNumbers;
    }

    public function selectableHeader(bool $condition = true): static
    {
        $this->selectableHeader = $condition;

        return $this;
    }

    public function getSelectableHeader(): bool
    {
        return $this->selectableHeader;
    }

    public function withToday(bool $condition = true): static
    {
        $this->withToday = $condition;

        return $this;
    }

    public function getWithToday(): bool
    {
        return $this->withToday;
    }

    public function withInputs(bool | string $conditionOrOption = true): static
    {
        $this->withInputs = $conditionOrOption;

        return $this;
    }

    public function getWithInputs(): bool | string | null
    {
        return $this->withInputs;
    }

    public function withConfirmation(bool $condition = true): static
    {
        $this->withConfirmation = $condition;

        return $this;
    }

    public function getWithConfirmation(): bool
    {
        return $this->withConfirmation;
    }

    public function withPresets(bool $condition = true): static
    {
        $this->withPresets = $condition;

        return $this;
    }

    public function getWithPresets(): bool
    {
        return $this->withPresets;
    }

    public function presets(PresetBuilder $builder): static
    {
        $this->presets = $builder;

        return $this;
    }

    public function getPresets(): string
    {
        if (empty($this->presets)) {
            $builder = new PresetBuilder;
            $builder->add(new Preset\Today);
            $builder->add(new Preset\Yesterday);
            $builder->add(new Preset\ThisWeek);
            $builder->add(new Preset\Last7Days);
            $builder->add(new Preset\ThisMonth);
            $builder->add(new Preset\ThisYearToDate);
            $builder->add(new Preset\AllTime);

            $this->presets($builder);
        }

        return $this->presets->toString();
    }

    public function clearable(bool $condition = true): static
    {
        $this->clearable = $condition;

        return $this;
    }

    public function getClearable(): ?bool
    {
        return $this->clearable;
    }

    public function invalid(bool $condition = true): static
    {
        $this->invalid = $condition;

        return $this;
    }

    public function getInvalid(): bool
    {
        return $this->invalid;
    }

    public function locale(string $locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocale(): string
    {
        return $this->locale ?? app()->getLocale();
    }

    public function fixedWeeks(bool $condition = true): static
    {
        $this->fixedWeeks = $condition;

        return $this;
    }

    public function getFixedWeeks(): bool
    {
        return $this->fixedWeeks;
    }
}

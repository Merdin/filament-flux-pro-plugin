<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\FluxPro\Components;

use Filament\Forms\Components\DatePicker as BaseDatePicker;

/**
 * Why are we extending from `DatePicker` and not `Field`?
 *
 * The default state casts of `DateTimePicker` (the parent of `DatePicker`) handle
 * date serialization and deserialization. If we were to extend directly from
 * Field, we would need to re-implement that logic ourselves.
 *
 * For now I do not see any reason to deviate from the default behavior, so extending
 * from DatePicker is the simplest solution.
 */
class DatePicker extends BaseDatePicker
{
    protected bool $withWeekNumbers = true;

    protected string $view = 'filament-flux::date-picker';

    public function withWeekNumbers(bool $condition = true): static
    {
        $this->withWeekNumbers = $condition;

        return $this;
    }

    public function getWithWeekNumbers(): bool
    {
        return $this->withWeekNumbers;
    }
}


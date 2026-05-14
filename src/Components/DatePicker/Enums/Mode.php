<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Enums;

enum Mode: string
{
    case single = 'single';
    case range = 'range';

    public static function default(): self
    {
        return self::single;
    }
}

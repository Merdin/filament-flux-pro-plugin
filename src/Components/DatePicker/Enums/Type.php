<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Enums;

enum Type: string
{
    case button = 'button';
    case input = 'input';

    public static function default(): self
    {
        return self::button;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Preset;

use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Concerns\PresetInterface;

class ThisMonth implements PresetInterface
{
    public string $name = 'thisMonth';
}

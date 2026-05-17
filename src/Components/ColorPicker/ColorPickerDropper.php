<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\ColorPicker;

use Filament\Schemas\Components\Component;

class ColorPickerDropper extends Component
{
    protected string $view = 'filament-flux-pro::components.color-picker.dropper';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

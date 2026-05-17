<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Radio;

use Filament\Schemas\Components\Component;

class RadioIndicator extends Component
{
    protected string $view = 'filament-flux-pro::components.radio.radio-indicator';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

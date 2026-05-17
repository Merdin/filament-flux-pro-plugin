<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Popover;

use Filament\Schemas\Components\Component;

class Popover extends Component
{
    protected string $view = 'filament-flux-pro::components.popover.popover';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}


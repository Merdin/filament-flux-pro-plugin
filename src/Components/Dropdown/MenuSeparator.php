<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Filament\Schemas\Components\Component;

class MenuSeparator extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu-separator';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

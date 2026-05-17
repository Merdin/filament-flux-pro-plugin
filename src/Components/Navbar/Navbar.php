<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Navbar;

use Filament\Schemas\Components\Component;

class Navbar extends Component
{
    protected string $view = 'filament-flux-pro::components.navbar.navbar';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\MenuComponent;

class MenuSeparator extends ViewComponent implements MenuComponent
{
    protected string $viewIdentifier = 'menuSeparator';

    protected string $view = 'filament-flux-pro::layouts.header.components.menu-separator';

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }
}

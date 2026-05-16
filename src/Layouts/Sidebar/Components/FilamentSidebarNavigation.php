<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HasFilamentNavigation;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class FilamentSidebarNavigation extends ViewComponent implements SidebarComponent
{
    use HasFilamentNavigation;

    protected string $viewIdentifier = 'filamentSidebarNavigation';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.filament-sidebar-navigation';

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }
}

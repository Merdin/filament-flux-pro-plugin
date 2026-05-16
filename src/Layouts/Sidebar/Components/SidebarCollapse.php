<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class SidebarCollapse extends ViewComponent implements SidebarComponent
{
    use Concerns\HasExtraAttributes;

    protected string $viewIdentifier = 'sidebarCollapse';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-collapse';

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class SidebarHeader extends ViewComponent implements SidebarComponent
{
    protected string $viewIdentifier = 'sidebarHeader';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-header';

    protected ?SidebarBrand $brand = null;

    protected ?SidebarCollapse $collapse = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function brand(?SidebarBrand $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getBrand(): ?SidebarBrand
    {
        return $this->brand;
    }

    public function collapse(?SidebarCollapse $collapse = null): static
    {
        $this->collapse = $collapse ?? SidebarCollapse::make();

        return $this;
    }

    public function getCollapse(): ?SidebarCollapse
    {
        return $this->collapse;
    }
}

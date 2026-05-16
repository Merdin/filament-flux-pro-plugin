<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class SidebarSearch extends ViewComponent implements SidebarComponent
{
    protected string $viewIdentifier = 'sidebarSearch';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-search';

    protected ?string $placeholder = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function placeholder(?string $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }
}

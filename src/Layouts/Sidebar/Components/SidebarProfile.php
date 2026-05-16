<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Filament\Support\Components\ViewComponent;

class SidebarProfile extends ViewComponent
{
    protected string $viewIdentifier = 'sidebarProfile';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-profile';

    protected ?string $avatar = null;

    protected ?string $name = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function avatar(?string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function name(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}

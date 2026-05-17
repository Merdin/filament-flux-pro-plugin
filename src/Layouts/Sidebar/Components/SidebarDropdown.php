<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\MenuComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class SidebarDropdown extends ViewComponent implements SidebarComponent
{
    use Concerns\HasExtraAttributes;

    protected string $viewIdentifier = 'sidebarDropdown';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-dropdown';

    protected ?string $position = 'top';

    protected ?string $align = 'start';

    protected ?SidebarProfile $profile = null;

    /** @var array<int, MenuComponent>|Closure|null */
    protected array | Closure | null $items = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function position(?string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function align(?string $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->align;
    }

    public function profile(?SidebarProfile $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

    public function getProfile(): ?SidebarProfile
    {
        return $this->profile;
    }

    /** @param array<int, MenuComponent>|Closure $items */
    public function items(array | Closure $items): static
    {
        $this->items = $items;

        return $this;
    }

    /** @return array<int, MenuComponent> */
    public function getItems(): array
    {
        return $this->evaluate($this->items) ?? [];
    }
}

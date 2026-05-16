<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarNavComponent;

class SidebarGroup extends ViewComponent implements SidebarNavComponent
{
    protected string $viewIdentifier = 'sidebarGroup';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-group';

    protected ?string $heading = null;

    protected bool $expandable = false;

    protected ?string $class = null;

    /** @var array<int, SidebarItem>|Closure|null */
    protected array|Closure|null $items = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(?string $heading = null): static
    {
        $instance = app(static::class);

        if ($heading !== null) {
            $instance->heading($heading);
        }

        return $instance;
    }

    public function heading(?string $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function expandable(bool $condition = true): static
    {
        $this->expandable = $condition;

        return $this;
    }

    public function getExpandable(): bool
    {
        return $this->expandable;
    }

    public function class(?string $class): static
    {
        $this->class = $class;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    /** @param array<int, SidebarItem>|Closure $items */
    public function items(array|Closure $items): static
    {
        $this->items = $items;

        return $this;
    }

    /** @return array<int, SidebarItem> */
    public function getItems(): array
    {
        return $this->evaluate($this->items) ?? [];
    }
}

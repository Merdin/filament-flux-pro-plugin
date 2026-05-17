<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarNavComponent;

class SidebarItem extends ViewComponent implements SidebarNavComponent
{
    protected string $viewIdentifier = 'sidebarItem';

    protected string $view = 'filament-flux-pro::layouts.sidebar.components.sidebar-item';

    protected ?string $label = null;

    protected ?string $icon = null;

    protected ?string $href = null;

    protected bool $current = false;

    protected string | int | null $badge = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(?string $label = null): static
    {
        $instance = app(static::class);

        if ($label !== null) {
            $instance->label($label);
        }

        return $instance;
    }

    public function label(?string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function icon(?string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function href(?string $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function current(bool $condition = true): static
    {
        $this->current = $condition;

        return $this;
    }

    public function getCurrent(): bool
    {
        return $this->current;
    }

    public function badge(string | int | null $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getBadge(): string | int | null
    {
        return $this->badge;
    }
}

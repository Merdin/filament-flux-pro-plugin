<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;

class SidebarToggle extends ViewComponent implements HeaderComponent
{
    use Concerns\HasExtraAttributes;

    protected string $viewIdentifier = 'sidebarToggle';

    protected string $view = 'filament-flux-pro::layouts.header.components.sidebar-toggle';

    protected string $icon = 'bars-2';

    protected ?string $inset = 'left';

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function icon(string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function inset(?string $inset): static
    {
        $this->inset = $inset;

        return $this;
    }

    public function getInset(): ?string
    {
        return $this->inset;
    }
}

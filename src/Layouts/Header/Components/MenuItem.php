<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\MenuComponent;

class MenuItem extends ViewComponent implements MenuComponent
{
    protected string $viewIdentifier = 'menuItem';

    protected string $view = 'filament-flux-pro::layouts.header.components.menu-item';

    protected ?string $label = null;

    protected ?string $icon = null;

    protected string|Closure|null $href = null;

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

    public function href(string|Closure|null $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href instanceof Closure ? ($this->href)() : $this->href;
    }
}

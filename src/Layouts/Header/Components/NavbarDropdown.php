<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\NavbarComponent;

class NavbarDropdown extends ViewComponent implements NavbarComponent
{
    use Concerns\HasExtraAttributes;

    protected string $viewIdentifier = 'navbarDropdown';

    protected string $view = 'filament-flux-pro::layouts.header.components.navbar-dropdown';

    protected ?string $label = null;

    protected ?string $trailingIcon = null;

    /** @var array<int, NavMenuItem>|Closure|null */
    protected array | Closure | null $items = null;

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

    public function trailingIcon(?string $icon): static
    {
        $this->trailingIcon = $icon;

        return $this;
    }

    public function getTrailingIcon(): ?string
    {
        return $this->trailingIcon;
    }

    /** @param array<int, NavMenuItem>|Closure $items */
    public function items(array | Closure $items): static
    {
        $this->items = $items;

        return $this;
    }

    /** @return array<int, NavMenuItem> */
    public function getItems(): array
    {
        return $this->evaluate($this->items) ?? [];
    }
}

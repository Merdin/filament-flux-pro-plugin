<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\NavbarComponent;

class Navbar extends ViewComponent implements HeaderComponent
{
    protected string $viewIdentifier = 'navbar';

    protected string $view = 'filament-flux-pro::layouts.header.components.navbar';

    /** @var array<int, NavbarComponent>|Closure|null */
    protected array | Closure | null $items = null;

    protected ?string $class = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    /** @param array<int, NavbarComponent>|Closure $items */
    public function items(array | Closure $items): static
    {
        $this->items = $items;

        return $this;
    }

    /** @return array<int, NavbarComponent> */
    public function getItems(): array
    {
        return $this->evaluate($this->items) ?? [];
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
}

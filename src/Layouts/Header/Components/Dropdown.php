<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\MenuComponent;

class Dropdown extends ViewComponent implements HeaderComponent
{
    protected string $viewIdentifier = 'dropdown';

    protected string $view = 'filament-flux-pro::layouts.header.components.dropdown';

    protected ?string $position = null;

    protected ?string $align = null;

    protected ?ViewComponent $trigger = null;

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

    public function trigger(?ViewComponent $trigger): static
    {
        $this->trigger = $trigger;

        return $this;
    }

    public function getTrigger(): ?ViewComponent
    {
        return $this->trigger;
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

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Closure;
use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\MenuComponent;

class MenuRadioGroup extends ViewComponent implements MenuComponent
{
    protected string $viewIdentifier = 'menuRadioGroup';

    protected string $view = 'filament-flux-pro::layouts.header.components.menu-radio-group';

    /** @var array<int, MenuRadio>|Closure|null */
    protected array | Closure | null $radios = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    /** @param array<int, MenuRadio>|Closure $radios */
    public function radios(array | Closure $radios): static
    {
        $this->radios = $radios;

        return $this;
    }

    /** @return array<int, MenuRadio> */
    public function getRadios(): array
    {
        return $this->evaluate($this->radios) ?? [];
    }
}

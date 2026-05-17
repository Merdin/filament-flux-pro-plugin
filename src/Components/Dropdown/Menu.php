<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class Menu extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu';

    protected bool | Closure $keepOpen = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function keepOpen(bool | Closure $condition = true): static
    {
        $this->keepOpen = $condition;

        return $this;
    }

    public function getKeepOpen(): bool
    {
        return (bool) $this->evaluate($this->keepOpen);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header;

use Closure;
use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;

class Header extends ViewComponent
{
    use Concerns\HasExtraAttributes;

    protected string $viewIdentifier = 'header';

    protected string $view = 'filament-flux-pro::layouts.header.header';

    /** @var array<int, HeaderComponent>|Closure|null */
    protected array|Closure|null $components = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    /** @param array<int, HeaderComponent>|Closure $components */
    public function components(array|Closure $components): static
    {
        $this->components = $components;

        return $this;
    }

    /** @return array<int, HeaderComponent> */
    public function getComponents(): array
    {
        return $this->evaluate($this->components) ?? [];
    }
}

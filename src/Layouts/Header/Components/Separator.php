<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\NavbarComponent;

class Separator extends ViewComponent implements NavbarComponent
{
    protected string $viewIdentifier = 'separator';

    protected string $view = 'filament-flux-pro::layouts.header.components.separator';

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
    }
}

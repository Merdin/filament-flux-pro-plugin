<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Command;

use Filament\Schemas\Components\Component;

class Command extends Component
{
    protected string $view = 'filament-flux-pro::components.command.command';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

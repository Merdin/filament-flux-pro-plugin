<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Kanban;

use Filament\Schemas\Components\Component;

class Kanban extends Component
{
    protected string $view = 'filament-flux-pro::components.kanban.kanban';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

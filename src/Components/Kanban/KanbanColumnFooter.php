<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Kanban;

use Filament\Schemas\Components\Component;

class KanbanColumnFooter extends Component
{
    protected string $view = 'filament-flux-pro::components.kanban.kanban-column-footer';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

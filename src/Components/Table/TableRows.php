<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Table;

use Filament\Schemas\Components\Component;

class TableRows extends Component
{
    protected string $view = 'filament-flux-pro::components.table.table-rows';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Tabs;

use Filament\Schemas\Components\Component;

class TabGroup extends Component
{
    protected string $view = 'filament-flux-pro::components.tabs.tab-group';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

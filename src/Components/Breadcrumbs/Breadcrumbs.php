<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Breadcrumbs;

use Closure;
use Filament\Schemas\Components\Component;

class Breadcrumbs extends Component
{
    protected string $view = 'filament-flux-pro::components.breadcrumbs.breadcrumbs';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    /** @param array<BreadcrumbsItem> | Closure $items */
    public function items(array | Closure $items): static
    {
        $this->components($items);

        return $this;
    }
}

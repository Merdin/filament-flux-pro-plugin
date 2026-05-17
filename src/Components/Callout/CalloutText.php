<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Callout;

use Filament\Schemas\Components\Component;

class CalloutText extends Component
{
    protected string $view = 'filament-flux-pro::components.callout.text';

    final public function __construct() {}

    public static function make(): static
    {
        return app(static::class);
    }
}

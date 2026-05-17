<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Input;

use Filament\Schemas\Components\Component;

class InputGroup extends Component
{
    protected string $view = 'filament-flux-pro::components.input.input-group';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Button;

use Closure;
use Filament\Schemas\Components\Component;

class ButtonGroup extends Component
{
    protected string $view = 'filament-flux-pro::components.button.group';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    /** @param array<Button> | Closure $buttons */
    public function buttons(array | Closure $buttons): static
    {
        $this->components($buttons);

        return $this;
    }
}

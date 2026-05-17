<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Card;

use Filament\Schemas\Components\Component;

class Card extends Component
{
    protected string $view = 'filament-flux-pro::components.card.card';

    final public function __construct() {}

    public static function make(): static
    {
        return app(static::class);
    }
}

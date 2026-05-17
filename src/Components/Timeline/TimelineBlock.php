<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Timeline;

use Filament\Schemas\Components\Component;

class TimelineBlock extends Component
{
    protected string $view = 'filament-flux-pro::components.timeline.timeline-block';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

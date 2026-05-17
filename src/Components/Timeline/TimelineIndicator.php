<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Timeline;

use Closure;
use Filament\Schemas\Components\Component;

class TimelineIndicator extends Component
{
    protected string $view = 'filament-flux-pro::components.timeline.timeline-indicator';

    protected string | Closure | null $variant = null;

    protected string | Closure | null $status = null;

    protected string | Closure | null $color = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function variant(string | Closure | null $variant): static
    {
        $this->variant = $variant;

        return $this;
    }

    public function getVariant(): ?string
    {
        return $this->evaluate($this->variant);
    }

    public function status(string | Closure | null $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->evaluate($this->status);
    }

    public function color(string | Closure | null $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->evaluate($this->color);
    }
}

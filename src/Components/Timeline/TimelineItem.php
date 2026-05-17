<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Timeline;

use Closure;
use Filament\Schemas\Components\Component;

class TimelineItem extends Component
{
    protected string $view = 'filament-flux-pro::components.timeline.timeline-item';

    protected string | Closure | null $status = null;

    protected string | Closure | null $align = null;

    protected string | Closure | null $size = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
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

    public function align(string | Closure | null $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->evaluate($this->align);
    }

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }
}

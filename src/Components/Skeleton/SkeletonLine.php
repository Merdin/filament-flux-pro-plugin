<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Skeleton;

use Closure;
use Filament\Schemas\Components\Component;

class SkeletonLine extends Component
{
    protected string $view = 'filament-flux-pro::components.skeleton.skeleton-line';

    protected string | Closure | null $size = null;

    protected string | Closure | null $animate = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
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

    public function animate(string | Closure | null $animate): static
    {
        $this->animate = $animate;

        return $this;
    }

    public function getAnimate(): ?string
    {
        return $this->evaluate($this->animate);
    }
}

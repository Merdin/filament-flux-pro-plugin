<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Progress;

use Closure;
use Filament\Schemas\Components\Component;

class Progress extends Component
{
    protected string $view = 'filament-flux-pro::components.progress.progress';

    protected int | float | Closure | null $value = null;

    protected int | float | Closure | null $max = null;

    protected string | Closure | null $color = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function value(int | float | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): int | float | null
    {
        return $this->evaluate($this->value);
    }

    public function max(int | float | Closure | null $max): static
    {
        $this->max = $max;

        return $this;
    }

    public function getMax(): int | float | null
    {
        return $this->evaluate($this->max);
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

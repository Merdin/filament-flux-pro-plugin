<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Slider;

use Closure;
use Filament\Schemas\Components\Component;

class SliderTick extends Component
{
    protected string $view = 'filament-flux-pro::components.slider.slider-tick';

    protected int | float | Closure | null $value = null;

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
}

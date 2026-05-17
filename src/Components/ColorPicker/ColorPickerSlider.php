<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\ColorPicker;

use Closure;
use Filament\Schemas\Components\Component;

class ColorPickerSlider extends Component
{
    protected string $view = 'filament-flux-pro::components.color-picker.slider';

    protected string | Closure | null $channel = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function channel(string | Closure | null $channel): static
    {
        $this->channel = $channel;

        return $this;
    }

    public function getChannel(): ?string
    {
        return $this->evaluate($this->channel);
    }
}

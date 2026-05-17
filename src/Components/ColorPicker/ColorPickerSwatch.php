<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\ColorPicker;

use Closure;
use Filament\Schemas\Components\Component;

class ColorPickerSwatch extends Component
{
    protected string $view = 'filament-flux-pro::components.color-picker.swatch';

    protected string | Closure | null $value = null;

    protected string | Closure | null $label = null;

    final public function __construct(string | Closure | null $value = null)
    {
        if ($value !== null) {
            $this->value($value);
        }
    }

    public static function make(string | Closure | null $value = null): static
    {
        $static = app(static::class, ['value' => $value]);
        $static->configure();

        return $static;
    }

    public function value(string | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->evaluate($this->value);
    }

    public function label(string | Closure | null $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->evaluate($this->label);
    }
}

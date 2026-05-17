<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Radio;

use Closure;
use Filament\Forms\Components\Field;

class RadioGroup extends Field
{
    protected string $view = 'filament-flux-pro::components.radio.radio-group';

    protected string | Closure | null $variant = null;

    protected string | Closure | null $size = null;

    protected bool | Closure | null $indicator = null;

    public function variant(string | Closure | null $variant): static
    {
        $this->variant = $variant;

        return $this;
    }

    public function getVariant(): ?string
    {
        return $this->evaluate($this->variant);
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

    public function indicator(bool | Closure | null $indicator): static
    {
        $this->indicator = $indicator;

        return $this;
    }

    public function getIndicator(): ?bool
    {
        $value = $this->evaluate($this->indicator);

        return $value === null ? null : (bool) $value;
    }
}

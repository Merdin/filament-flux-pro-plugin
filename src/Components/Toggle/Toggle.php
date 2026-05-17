<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Toggle;

use Closure;
use Filament\Forms\Components\Field;

class Toggle extends Field
{
    protected string $view = 'filament-flux-pro::components.toggle.toggle';

    protected string | Closure | null $align = null;

    public function align(string | Closure | null $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->evaluate($this->align);
    }
}

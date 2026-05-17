<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Pillbox;

use Closure;
use Filament\Schemas\Components\Component;

class PillboxInput extends Component
{
    protected string $view = 'filament-flux-pro::components.pillbox.pillbox-input';

    protected string | Closure | null $placeholder = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }
}

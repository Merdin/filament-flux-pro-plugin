<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Field;

use Closure;
use Filament\Schemas\Components\Component;

class Field extends Component
{
    protected string $view = 'filament-flux-pro::components.field.field';

    protected string | Closure | null $variant = null;

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
}

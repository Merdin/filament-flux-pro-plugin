<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Pillbox;

use Closure;
use Filament\Schemas\Components\Component;

class PillboxOptionEmpty extends Component
{
    protected string $view = 'filament-flux-pro::components.pillbox.pillbox-option-empty';

    protected string | Closure | null $whenLoading = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function whenLoading(string | Closure | null $message): static
    {
        $this->whenLoading = $message;

        return $this;
    }

    public function getWhenLoading(): ?string
    {
        return $this->evaluate($this->whenLoading);
    }
}

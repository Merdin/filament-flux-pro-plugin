<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Select;

use Closure;
use Filament\Schemas\Components\Component;

class SelectOptionCreate extends Component
{
    protected string $view = 'filament-flux-pro::components.select.select-option-create';

    protected int | Closure | null $minLength = null;

    protected string | Closure | null $modal = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function minLength(int | Closure | null $length): static
    {
        $this->minLength = $length;

        return $this;
    }

    public function getMinLength(): ?int
    {
        $value = $this->evaluate($this->minLength);

        return $value !== null ? (int) $value : null;
    }

    public function modal(string | Closure | null $modal): static
    {
        $this->modal = $modal;

        return $this;
    }

    public function getModal(): ?string
    {
        return $this->evaluate($this->modal);
    }
}

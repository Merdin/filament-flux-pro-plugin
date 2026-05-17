<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Select;

use Closure;
use Filament\Schemas\Components\Component;

class SelectInput extends Component
{
    protected string $view = 'filament-flux-pro::components.select.select-input';

    protected string | Closure | null $placeholder = null;

    protected bool | Closure $invalid = false;

    protected string | Closure | null $size = null;

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

    public function invalid(bool | Closure $condition = true): static
    {
        $this->invalid = $condition;

        return $this;
    }

    public function getInvalid(): bool
    {
        return (bool) $this->evaluate($this->invalid);
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
}

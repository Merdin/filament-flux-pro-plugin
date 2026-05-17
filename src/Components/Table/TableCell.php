<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Table;

use Closure;
use Filament\Schemas\Components\Component;

class TableCell extends Component
{
    protected string $view = 'filament-flux-pro::components.table.table-cell';

    protected string | Closure | null $align = null;

    protected string | Closure | null $variant = null;

    protected bool | Closure $sticky = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function align(string | Closure | null $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->evaluate($this->align);
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

    public function sticky(bool | Closure $condition = true): static
    {
        $this->sticky = $condition;

        return $this;
    }

    public function getSticky(): bool
    {
        return (bool) $this->evaluate($this->sticky);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Table;

use Closure;
use Filament\Schemas\Components\Component;

class TableRow extends Component
{
    protected string $view = 'filament-flux-pro::components.table.table-row';

    protected string | int | Closure | null $rowKey = null;

    protected bool | Closure $sticky = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function rowKey(string | int | Closure | null $key): static
    {
        $this->rowKey = $key;

        return $this;
    }

    public function getRowKey(): string | int | null
    {
        return $this->evaluate($this->rowKey);
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

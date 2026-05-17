<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Table;

use Closure;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Pagination\Paginator;

class Table extends Component
{
    protected string $view = 'filament-flux-pro::components.table.table';

    protected Paginator | Closure | null $paginate = null;

    protected string | bool | Closure | null $paginationScrollTo = null;

    protected string | Closure | null $containerClass = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function paginate(Paginator | Closure | null $paginator): static
    {
        $this->paginate = $paginator;

        return $this;
    }

    public function getPaginate(): ?Paginator
    {
        return $this->evaluate($this->paginate);
    }

    public function paginationScrollTo(string | bool | Closure | null $scrollTo = true): static
    {
        $this->paginationScrollTo = $scrollTo;

        return $this;
    }

    public function getPaginationScrollTo(): string | bool | null
    {
        return $this->evaluate($this->paginationScrollTo);
    }

    public function containerClass(string | Closure | null $class): static
    {
        $this->containerClass = $class;

        return $this;
    }

    public function getContainerClass(): ?string
    {
        return $this->evaluate($this->containerClass);
    }
}

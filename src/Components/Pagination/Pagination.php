<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Pagination;

use Closure;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Pagination\Paginator;

class Pagination extends Component
{
    protected string $view = 'filament-flux-pro::components.pagination.pagination';

    protected Paginator | Closure | null $paginator = null;

    protected string | bool | Closure | null $scrollTo = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function paginator(Paginator | Closure | null $paginator): static
    {
        $this->paginator = $paginator;

        return $this;
    }

    public function getPaginator(): ?Paginator
    {
        return $this->evaluate($this->paginator);
    }

    public function scrollTo(string | bool | Closure | null $scrollTo = true): static
    {
        $this->scrollTo = $scrollTo;

        return $this;
    }

    public function getScrollTo(): string | bool | null
    {
        return $this->evaluate($this->scrollTo);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Kanban;

use Closure;
use Filament\Schemas\Components\Component;

class KanbanCard extends Component
{
    protected string $view = 'filament-flux-pro::components.kanban.kanban-card';

    const HEADER_SCHEMA_KEY = 'header';

    const FOOTER_SCHEMA_KEY = 'footer';

    protected string | Closure | null $heading = null;

    protected string | Closure | null $as = null;

    final public function __construct(string | Closure | null $heading = null)
    {
        if ($heading !== null) {
            $this->heading($heading);
        }
    }

    public static function make(string | Closure | null $heading = null): static
    {
        $static = app(static::class, ['heading' => $heading]);
        $static->configure();

        return $static;
    }

    public function heading(string | Closure | null $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->evaluate($this->heading);
    }

    public function as(string | Closure | null $element): static
    {
        $this->as = $element;

        return $this;
    }

    public function getAs(): ?string
    {
        return $this->evaluate($this->as);
    }

    public function header(array | Closure $components): static
    {
        $this->childComponents($components, static::HEADER_SCHEMA_KEY);

        return $this;
    }

    public function footer(array | Closure $components): static
    {
        $this->childComponents($components, static::FOOTER_SCHEMA_KEY);

        return $this;
    }
}

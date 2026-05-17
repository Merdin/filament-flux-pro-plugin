<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Kanban;

use Closure;
use Filament\Schemas\Components\Component;

class KanbanColumnHeader extends Component
{
    protected string $view = 'filament-flux-pro::components.kanban.kanban-column-header';

    const ACTIONS_SCHEMA_KEY = 'actions';

    protected string | Closure | null $heading = null;

    protected string | Closure | null $subheading = null;

    protected int | Closure | null $count = null;

    protected string | Closure | null $badge = null;

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

    public function subheading(string | Closure | null $subheading): static
    {
        $this->subheading = $subheading;

        return $this;
    }

    public function getSubheading(): ?string
    {
        return $this->evaluate($this->subheading);
    }

    public function count(int | Closure | null $count): static
    {
        $this->count = $count;

        return $this;
    }

    public function getCount(): ?int
    {
        $value = $this->evaluate($this->count);

        return $value !== null ? (int) $value : null;
    }

    public function badge(string | Closure | null $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->evaluate($this->badge);
    }

    public function actions(array | Closure $components): static
    {
        $this->childComponents($components, static::ACTIONS_SCHEMA_KEY);

        return $this;
    }
}

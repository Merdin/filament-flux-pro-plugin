<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Table;

use Closure;
use Filament\Schemas\Components\Component;

class TableColumn extends Component
{
    protected string $view = 'filament-flux-pro::components.table.table-column';

    protected string | Closure | null $text = null;

    protected string | Closure | null $align = null;

    protected bool | Closure $sortable = false;

    protected bool | Closure $sorted = false;

    protected string | Closure | null $direction = null;

    protected bool | Closure $sticky = false;

    final public function __construct(string | Closure | null $text = null)
    {
        if ($text !== null) {
            $this->text($text);
        }
    }

    public static function make(string | Closure | null $text = null): static
    {
        $static = app(static::class, ['text' => $text]);
        $static->configure();

        return $static;
    }

    public function text(string | Closure | null $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->evaluate($this->text);
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

    public function sortable(bool | Closure $condition = true): static
    {
        $this->sortable = $condition;

        return $this;
    }

    public function getSortable(): bool
    {
        return (bool) $this->evaluate($this->sortable);
    }

    public function sorted(bool | Closure $condition = true): static
    {
        $this->sorted = $condition;

        return $this;
    }

    public function getSorted(): bool
    {
        return (bool) $this->evaluate($this->sorted);
    }

    public function direction(string | Closure | null $direction): static
    {
        $this->direction = $direction;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->evaluate($this->direction);
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

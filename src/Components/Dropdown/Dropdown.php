<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class Dropdown extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.dropdown';

    protected string | Closure | null $position = null;

    protected string | Closure | null $align = null;

    protected int | Closure | null $offset = null;

    protected int | Closure | null $gap = null;

    protected bool | Closure $hover = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function position(string | Closure | null $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->evaluate($this->position);
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

    public function offset(int | Closure | null $offset): static
    {
        $this->offset = $offset;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->evaluate($this->offset);
    }

    public function triggerGap(int | Closure | null $gap): static
    {
        $this->gap = $gap;

        return $this;
    }

    public function getTriggerGap(): ?int
    {
        return $this->evaluate($this->gap);
    }
}

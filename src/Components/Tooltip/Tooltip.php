<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Tooltip;

use Closure;
use Filament\Schemas\Components\Component;

class Tooltip extends Component
{
    protected string $view = 'filament-flux-pro::components.tooltip.tooltip';

    protected string | Closure | null $content = null;

    protected string | Closure | null $position = null;

    protected string | Closure | null $align = null;

    protected bool | Closure $disabled = false;

    protected int | Closure | null $gap = null;

    protected int | Closure | null $offset = null;

    protected bool | Closure $toggleable = false;

    protected bool | Closure $interactive = false;

    protected string | Closure | null $kbd = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function content(string | Closure | null $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->evaluate($this->content);
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

    public function disabled(bool | Closure $condition = true): static
    {
        $this->disabled = $condition;

        return $this;
    }

    public function getDisabled(): bool
    {
        return (bool) $this->evaluate($this->disabled);
    }

    public function gap(int | Closure | null $gap): static
    {
        $this->gap = $gap;

        return $this;
    }

    public function getGap(): ?int
    {
        return $this->evaluate($this->gap);
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

    public function toggleable(bool | Closure $condition = true): static
    {
        $this->toggleable = $condition;

        return $this;
    }

    public function getToggleable(): bool
    {
        return (bool) $this->evaluate($this->toggleable);
    }

    public function interactive(bool | Closure $condition = true): static
    {
        $this->interactive = $condition;

        return $this;
    }

    public function getInteractive(): bool
    {
        return (bool) $this->evaluate($this->interactive);
    }

    public function kbd(string | Closure | null $kbd): static
    {
        $this->kbd = $kbd;

        return $this;
    }

    public function getKbd(): ?string
    {
        return $this->evaluate($this->kbd);
    }
}

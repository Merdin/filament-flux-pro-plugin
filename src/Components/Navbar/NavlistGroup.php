<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Navbar;

use Closure;
use Filament\Schemas\Components\Component;

class NavlistGroup extends Component
{
    protected string $view = 'filament-flux-pro::components.navbar.navlist-group';

    protected string | Closure | null $heading = null;

    protected bool | Closure $expandable = false;

    protected bool | Closure | null $expanded = null;

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

    public function expandable(bool | Closure $condition = true): static
    {
        $this->expandable = $condition;

        return $this;
    }

    public function getExpandable(): bool
    {
        return (bool) $this->evaluate($this->expandable);
    }

    public function expanded(bool | Closure | null $expanded = true): static
    {
        $this->expanded = $expanded;

        return $this;
    }

    public function getExpanded(): ?bool
    {
        $value = $this->evaluate($this->expanded);

        return $value === null ? null : (bool) $value;
    }
}

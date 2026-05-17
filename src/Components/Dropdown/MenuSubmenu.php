<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class MenuSubmenu extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu-submenu';

    protected string | Closure | null $heading = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $iconVariant = null;

    protected bool | Closure $keepOpen = false;

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

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function iconTrailing(string | Closure | null $icon): static
    {
        $this->iconTrailing = $icon;

        return $this;
    }

    public function getIconTrailing(): ?string
    {
        return $this->evaluate($this->iconTrailing);
    }

    public function iconVariant(string | Closure | null $variant): static
    {
        $this->iconVariant = $variant;

        return $this;
    }

    public function getIconVariant(): ?string
    {
        return $this->evaluate($this->iconVariant);
    }

    public function keepOpen(bool | Closure $condition = true): static
    {
        $this->keepOpen = $condition;

        return $this;
    }

    public function getKeepOpen(): bool
    {
        return (bool) $this->evaluate($this->keepOpen);
    }
}

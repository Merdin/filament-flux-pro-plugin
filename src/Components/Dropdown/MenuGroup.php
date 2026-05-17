<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class MenuGroup extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu-group';

    protected string | Closure | null $heading = null;

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
}

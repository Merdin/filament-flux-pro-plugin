<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class MenuCheckboxGroup extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu-checkbox-group';

    protected array | Closure | null $value = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function value(array | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?array
    {
        return $this->evaluate($this->value);
    }
}

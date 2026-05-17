<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Command;

use Closure;
use Filament\Schemas\Components\Component;

class CommandInput extends Component
{
    protected string $view = 'filament-flux-pro::components.command.input';

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $icon = null;

    protected bool | Closure $clearable = false;

    protected bool | Closure $closable = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
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

    public function clearable(bool | Closure $condition = true): static
    {
        $this->clearable = $condition;

        return $this;
    }

    public function getClearable(): bool
    {
        return (bool) $this->evaluate($this->clearable);
    }

    public function closable(bool | Closure $condition = true): static
    {
        $this->closable = $condition;

        return $this;
    }

    public function getClosable(): bool
    {
        return (bool) $this->evaluate($this->closable);
    }
}

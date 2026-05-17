<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Pillbox;

use Closure;
use Filament\Schemas\Components\Component;

class PillboxSearch extends Component
{
    protected string $view = 'filament-flux-pro::components.pillbox.pillbox-search';

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $icon = null;

    protected bool | Closure | null $clearable = null;

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

    public function clearable(bool | Closure | null $clearable): static
    {
        $this->clearable = $clearable;

        return $this;
    }

    public function getClearable(): ?bool
    {
        $value = $this->evaluate($this->clearable);

        return $value === null ? null : (bool) $value;
    }
}

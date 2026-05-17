<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Tabs;

use Closure;
use Filament\Schemas\Components\Component;

class Tabs extends Component
{
    protected string $view = 'filament-flux-pro::components.tabs.tabs';

    protected string | Closure | null $variant = null;

    protected string | Closure | null $size = null;

    protected bool | Closure $scrollable = false;

    protected string | Closure | null $scrollableScrollbar = null;

    protected bool | Closure $scrollableFade = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function variant(string | Closure | null $variant): static
    {
        $this->variant = $variant;

        return $this;
    }

    public function getVariant(): ?string
    {
        return $this->evaluate($this->variant);
    }

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }

    public function scrollable(bool | Closure $condition = true): static
    {
        $this->scrollable = $condition;

        return $this;
    }

    public function getScrollable(): bool
    {
        return (bool) $this->evaluate($this->scrollable);
    }

    public function scrollableScrollbar(string | Closure | null $scrollbar): static
    {
        $this->scrollableScrollbar = $scrollbar;

        return $this;
    }

    public function getScrollableScrollbar(): ?string
    {
        return $this->evaluate($this->scrollableScrollbar);
    }

    public function scrollableFade(bool | Closure $condition = true): static
    {
        $this->scrollableFade = $condition;

        return $this;
    }

    public function getScrollableFade(): bool
    {
        return (bool) $this->evaluate($this->scrollableFade);
    }
}

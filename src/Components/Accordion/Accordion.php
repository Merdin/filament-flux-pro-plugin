<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Accordion;

use Closure;
use Filament\Schemas\Components\Component;

class Accordion extends Component
{
    protected string $view = 'filament-flux-pro::components.accordion.accordion';

    protected string | Closure | null $variant = null;

    protected bool | Closure $transition = false;

    protected bool | Closure $exclusive = false;

    final public function __construct()
    {
        //
    }

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    /**
     * @param  array<AccordionItem> | Closure  $items
     */
    public function items(array | Closure $items): static
    {
        $this->components($items);

        return $this;
    }

    public function variant(string | Closure | null $variant): static
    {
        $this->variant = $variant;

        return $this;
    }

    public function reverse(): static
    {
        $this->variant = 'reverse';

        return $this;
    }

    public function getVariant(): ?string
    {
        return $this->evaluate($this->variant);
    }

    public function transition(bool | Closure $condition = true): static
    {
        $this->transition = $condition;

        return $this;
    }

    public function getTransition(): bool
    {
        return (bool) $this->evaluate($this->transition);
    }

    public function exclusive(bool | Closure $condition = true): static
    {
        $this->exclusive = $condition;

        return $this;
    }

    public function getExclusive(): bool
    {
        return (bool) $this->evaluate($this->exclusive);
    }
}

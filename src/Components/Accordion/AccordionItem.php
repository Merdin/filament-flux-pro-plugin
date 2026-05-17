<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Accordion;

use Closure;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;

class AccordionItem extends Component
{
    protected string $view = 'filament-flux-pro::components.accordion.item';

    protected string | Htmlable | Closure | null $heading = null;

    protected bool | Closure $expanded = false;

    protected bool | Closure $disabled = false;

    final public function __construct(string | Htmlable | Closure | null $heading = null)
    {
        if ($heading !== null) {
            $this->heading($heading);
        }
    }

    public static function make(string | Htmlable | Closure | null $heading = null): static
    {
        $static = app(static::class, ['heading' => $heading]);
        $static->configure();

        return $static;
    }

    public function heading(string | Htmlable | Closure | null $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): string | Htmlable | null
    {
        return $this->evaluate($this->heading);
    }

    /**
     * @param  array<Component> | Closure  $components
     */
    public function content(array | Closure $components): static
    {
        $this->components($components);

        return $this;
    }

    public function expanded(bool | Closure $condition = true): static
    {
        $this->expanded = $condition;

        return $this;
    }

    public function getExpanded(): bool
    {
        return (bool) $this->evaluate($this->expanded);
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
}

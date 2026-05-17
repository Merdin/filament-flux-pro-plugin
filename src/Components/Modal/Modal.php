<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Modal;

use Closure;
use Filament\Schemas\Components\Component;

class Modal extends Component
{
    protected string $view = 'filament-flux-pro::components.modal.modal';

    const FOOTER_SCHEMA_KEY = 'footer';

    protected string | Closure | null $name = null;

    protected bool | Closure $flyout = false;

    protected string | Closure | null $variant = null;

    protected string | Closure | null $position = null;

    protected string | Closure | null $scroll = null;

    protected bool | Closure | null $dismissible = null;

    protected bool | Closure | null $closable = null;

    final public function __construct(string | Closure | null $name = null)
    {
        if ($name !== null) {
            $this->name($name);
        }
    }

    public static function make(string | Closure | null $name = null): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->configure();

        return $static;
    }

    public function name(string | Closure | null $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
    }

    public function flyout(bool | Closure $condition = true): static
    {
        $this->flyout = $condition;

        return $this;
    }

    public function getFlyout(): bool
    {
        return (bool) $this->evaluate($this->flyout);
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

    public function position(string | Closure | null $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->evaluate($this->position);
    }

    public function scroll(string | Closure | null $scroll): static
    {
        $this->scroll = $scroll;

        return $this;
    }

    public function getScroll(): ?string
    {
        return $this->evaluate($this->scroll);
    }

    public function dismissible(bool | Closure $condition = true): static
    {
        $this->dismissible = $condition;

        return $this;
    }

    public function getDismissible(): ?bool
    {
        $value = $this->evaluate($this->dismissible);

        return $value === null ? null : (bool) $value;
    }

    public function closable(bool | Closure $condition = true): static
    {
        $this->closable = $condition;

        return $this;
    }

    public function getClosable(): ?bool
    {
        $value = $this->evaluate($this->closable);

        return $value === null ? null : (bool) $value;
    }

    public function footer(array | Closure $components): static
    {
        $this->childComponents($components, static::FOOTER_SCHEMA_KEY);

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Field;

use Closure;
use Filament\Schemas\Components\Component;

class Error extends Component
{
    protected string $view = 'filament-flux-pro::components.field.error';

    protected string | Closure | null $name = null;

    protected string | Closure | null $message = null;

    protected string | Closure | null $bag = null;

    protected bool | Closure | null $deep = null;

    protected string | bool | Closure | null $icon = null;

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

    public function message(string | Closure | null $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->evaluate($this->message);
    }

    public function bag(string | Closure | null $bag): static
    {
        $this->bag = $bag;

        return $this;
    }

    public function getBag(): ?string
    {
        return $this->evaluate($this->bag);
    }

    public function deep(bool | Closure $condition = true): static
    {
        $this->deep = $condition;

        return $this;
    }

    public function getDeep(): ?bool
    {
        $value = $this->evaluate($this->deep);

        return $value === null ? null : (bool) $value;
    }

    public function icon(string | bool | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): string | bool | null
    {
        return $this->evaluate($this->icon);
    }
}

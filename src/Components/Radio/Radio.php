<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Radio;

use Closure;
use Filament\Schemas\Components\Component;

class Radio extends Component
{
    protected string $view = 'filament-flux-pro::components.radio.radio';

    protected string | Closure | null $label = null;

    protected string | Closure | null $description = null;

    protected string | Closure | null $value = null;

    protected string | Closure | null $name = null;

    protected bool | Closure $checked = false;

    protected bool | Closure $disabled = false;

    protected string | Closure | null $icon = null;

    final public function __construct(string | Closure | null $label = null)
    {
        if ($label !== null) {
            $this->label($label);
        }
    }

    public static function make(string | Closure | null $label = null): static
    {
        $static = app(static::class, ['label' => $label]);
        $static->configure();

        return $static;
    }

    public function label(string | Closure | null $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->evaluate($this->label);
    }

    public function description(string | Closure | null $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->evaluate($this->description);
    }

    public function value(string | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->evaluate($this->value);
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

    public function checked(bool | Closure $condition = true): static
    {
        $this->checked = $condition;

        return $this;
    }

    public function getChecked(): bool
    {
        return (bool) $this->evaluate($this->checked);
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

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }
}

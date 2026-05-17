<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Select;

use Closure;
use Filament\Schemas\Components\Component;

class SelectOption extends Component
{
    protected string $view = 'filament-flux-pro::components.select.select-option';

    protected string | Closure | null $text = null;

    protected string | int | Closure | null $value = null;

    protected string | Closure | null $label = null;

    protected string | Closure | null $selectedLabel = null;

    protected bool | Closure $disabled = false;

    final public function __construct(string | Closure | null $text = null)
    {
        if ($text !== null) {
            $this->text($text);
        }
    }

    public static function make(string | Closure | null $text = null): static
    {
        $static = app(static::class, ['text' => $text]);
        $static->configure();

        return $static;
    }

    public function text(string | Closure | null $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->evaluate($this->text);
    }

    public function value(string | int | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): string | int | null
    {
        return $this->evaluate($this->value);
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

    public function selectedLabel(string | Closure | null $label): static
    {
        $this->selectedLabel = $label;

        return $this;
    }

    public function getSelectedLabel(): ?string
    {
        return $this->evaluate($this->selectedLabel);
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

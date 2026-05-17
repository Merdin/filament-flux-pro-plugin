<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class MenuRadio extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu-radio';

    protected string | Closure | null $text = null;

    protected bool | Closure $checked = false;

    protected bool | Closure $disabled = false;

    protected bool | Closure $keepOpen = false;

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

    public function keepOpen(bool | Closure $condition = true): static
    {
        $this->keepOpen = $condition;

        return $this;
    }

    public function getKeepOpen(): bool
    {
        return (bool) $this->evaluate($this->keepOpen);
    }
}

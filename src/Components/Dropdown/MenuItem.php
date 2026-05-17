<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Dropdown;

use Closure;
use Filament\Schemas\Components\Component;

class MenuItem extends Component
{
    protected string $view = 'filament-flux-pro::components.dropdown.menu-item';

    protected string | Closure | null $text = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $iconVariant = null;

    protected string | Closure | null $kbd = null;

    protected string | Closure | null $suffix = null;

    protected string | Closure | null $variant = null;

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

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function iconTrailing(string | Closure | null $icon): static
    {
        $this->iconTrailing = $icon;

        return $this;
    }

    public function getIconTrailing(): ?string
    {
        return $this->evaluate($this->iconTrailing);
    }

    public function iconVariant(string | Closure | null $variant): static
    {
        $this->iconVariant = $variant;

        return $this;
    }

    public function getIconVariant(): ?string
    {
        return $this->evaluate($this->iconVariant);
    }

    public function kbd(string | Closure | null $kbd): static
    {
        $this->kbd = $kbd;

        return $this;
    }

    public function getKbd(): ?string
    {
        return $this->evaluate($this->kbd);
    }

    public function suffix(string | Closure | null $suffix): static
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->evaluate($this->suffix);
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

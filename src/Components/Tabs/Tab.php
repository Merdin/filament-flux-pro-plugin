<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Tabs;

use Closure;
use Filament\Schemas\Components\Component;

class Tab extends Component
{
    protected string $view = 'filament-flux-pro::components.tabs.tab';

    protected string | Closure | null $text = null;

    protected string | Closure | null $name = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $iconVariant = null;

    protected bool | Closure $selected = false;

    protected bool | Closure $isAction = false;

    protected bool | Closure $accent = false;

    protected string | Closure | null $size = null;

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

    public function name(string | Closure | null $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
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

    public function selected(bool | Closure $condition = true): static
    {
        $this->selected = $condition;

        return $this;
    }

    public function getSelected(): bool
    {
        return (bool) $this->evaluate($this->selected);
    }

    public function asAction(bool | Closure $condition = true): static
    {
        $this->isAction = $condition;

        return $this;
    }

    public function getIsAction(): bool
    {
        return (bool) $this->evaluate($this->isAction);
    }

    public function accent(bool | Closure $condition = true): static
    {
        $this->accent = $condition;

        return $this;
    }

    public function getAccent(): bool
    {
        return (bool) $this->evaluate($this->accent);
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

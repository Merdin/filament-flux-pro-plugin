<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Editor;

use Closure;
use Filament\Schemas\Components\Component;

class EditorButton extends Component
{
    protected string $view = 'filament-flux-pro::components.editor.editor-button';

    protected string | Closure | null $text = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    protected string | Closure | null $tooltip = null;

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

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
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

    public function tooltip(string | Closure | null $tooltip): static
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function getTooltip(): ?string
    {
        return $this->evaluate($this->tooltip);
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

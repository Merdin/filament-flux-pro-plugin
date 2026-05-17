<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Callout;

use Closure;
use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Support\Htmlable;

class Callout extends Component implements Htmlable
{
    protected string $view = 'filament-flux-pro::components.callout.callout';

    const ACTIONS_SCHEMA_KEY = 'actions';

    const CONTROLS_SCHEMA_KEY = 'controls';

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    protected string | Closure | null $variant = null;

    protected string | Closure | null $color = null;

    protected bool | Closure $inline = false;

    protected string | Closure | null $heading = null;

    protected string | Closure | null $text = null;

    final public function __construct() {}

    public static function make(): static
    {
        return app(static::class);
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

    public function iconVariant(string | Closure | null $iconVariant): static
    {
        $this->iconVariant = $iconVariant;

        return $this;
    }

    public function getIconVariant(): ?string
    {
        return $this->evaluate($this->iconVariant);
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

    public function color(string | Closure | null $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->evaluate($this->color);
    }

    public function inline(bool | Closure $condition = true): static
    {
        $this->inline = $condition;

        return $this;
    }

    public function getInline(): bool
    {
        return (bool) $this->evaluate($this->inline);
    }

    public function heading(string | Closure | null $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->evaluate($this->heading);
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

    public function actions(array | Closure $actions): static
    {
        $this->childComponents($actions, static::ACTIONS_SCHEMA_KEY);

        return $this;
    }

    public function controls(array | Closure $controls): static
    {
        $this->childComponents($controls, static::CONTROLS_SCHEMA_KEY);

        return $this;
    }

    public function toHtml(): string
    {
        return view('filament-flux-pro::components.callout.standalone', [
            'icon' => $this->evaluate($this->icon),
            'iconVariant' => $this->evaluate($this->iconVariant),
            'variant' => $this->evaluate($this->variant),
            'color' => $this->evaluate($this->color),
            'inline' => $this->evaluate($this->inline) ?: null,
            'heading' => $this->evaluate($this->heading),
            'text' => $this->evaluate($this->text),
        ])->render();
    }
}

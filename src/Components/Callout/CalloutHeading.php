<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Callout;

use Closure;
use Filament\Schemas\Components\Component;

class CalloutHeading extends Component
{
    protected string $view = 'filament-flux-pro::components.callout.heading';

    protected string | Closure | null $text = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    final public function __construct(string | Closure | null $text = null)
    {
        $this->text = $text;
    }

    public static function make(string | Closure | null $text = null): static
    {
        return app(static::class, ['text' => $text]);
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

    public function iconVariant(string | Closure | null $iconVariant): static
    {
        $this->iconVariant = $iconVariant;

        return $this;
    }

    public function getIconVariant(): ?string
    {
        return $this->evaluate($this->iconVariant);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Separator;

use Closure;
use Filament\Schemas\Components\Component;

class Separator extends Component
{
    protected string $view = 'filament-flux-pro::components.separator.separator';

    protected bool | Closure $vertical = false;

    protected string | Closure | null $variant = null;

    protected string | Closure | null $text = null;

    protected string | Closure | null $orientation = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function vertical(bool | Closure $condition = true): static
    {
        $this->vertical = $condition;

        return $this;
    }

    public function getVertical(): bool
    {
        return (bool) $this->evaluate($this->vertical);
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

    public function text(string | Closure | null $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->evaluate($this->text);
    }

    public function orientation(string | Closure | null $orientation): static
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->evaluate($this->orientation);
    }
}

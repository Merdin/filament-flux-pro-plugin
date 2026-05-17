<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Heading;

use Closure;
use Filament\Schemas\Components\Component;

class Heading extends Component
{
    protected string $view = 'filament-flux-pro::components.heading.heading';

    protected string | Closure | null $text = null;

    protected string | Closure | null $size = null;

    protected int | Closure | null $level = null;

    protected bool | Closure $accent = false;

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

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }

    public function level(int | Closure | null $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getLevel(): ?int
    {
        $value = $this->evaluate($this->level);

        return $value !== null ? (int) $value : null;
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
}

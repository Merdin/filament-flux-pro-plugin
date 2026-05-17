<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Text;

use Closure;
use Filament\Schemas\Components\Component;

class Text extends Component
{
    protected string $view = 'filament-flux-pro::components.text.text';

    protected string | Closure | null $text = null;

    protected string | Closure | null $size = null;

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
}

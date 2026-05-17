<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Field;

use Closure;
use Filament\Schemas\Components\Component;

class Label extends Component
{
    protected string $view = 'filament-flux-pro::components.field.label';

    const TRAILING_SCHEMA_KEY = 'trailing';

    protected string | Closure | null $text = null;

    protected string | Closure | null $badge = null;

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

    public function badge(string | Closure | null $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->evaluate($this->badge);
    }

    public function trailing(array | Closure $components): static
    {
        $this->childComponents($components, static::TRAILING_SCHEMA_KEY);

        return $this;
    }
}

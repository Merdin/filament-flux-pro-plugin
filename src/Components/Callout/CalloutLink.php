<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Callout;

use Closure;
use Filament\Schemas\Components\Component;

class CalloutLink extends Component
{
    protected string $view = 'filament-flux-pro::components.callout.link';

    protected string | Closure | null $text = null;

    protected string | Closure | null $href = null;

    protected bool | Closure $external = false;

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

    public function href(string | Closure | null $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->evaluate($this->href);
    }

    public function external(bool | Closure $condition = true): static
    {
        $this->external = $condition;

        return $this;
    }

    public function getExternal(): bool
    {
        return (bool) $this->evaluate($this->external);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Text;

use Closure;
use Filament\Schemas\Components\Component;

class Link extends Component
{
    protected string $view = 'filament-flux-pro::components.text.link';

    protected string | Closure | null $text = null;

    protected string | Closure | null $href = null;

    protected string | Closure | null $variant = null;

    protected bool | Closure $external = false;

    protected string | Closure | null $as = null;

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

    public function href(string | Closure | null $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->evaluate($this->href);
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

    public function external(bool | Closure $condition = true): static
    {
        $this->external = $condition;

        return $this;
    }

    public function getExternal(): bool
    {
        return (bool) $this->evaluate($this->external);
    }

    public function as(string | Closure | null $element): static
    {
        $this->as = $element;

        return $this;
    }

    public function getAs(): ?string
    {
        return $this->evaluate($this->as);
    }
}

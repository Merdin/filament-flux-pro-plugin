<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Breadcrumbs;

use Closure;
use Filament\Schemas\Components\Component;

class BreadcrumbsItem extends Component
{
    protected string $view = 'filament-flux-pro::components.breadcrumbs.item';

    protected string | Closure | null $text = null;

    protected string | Closure | null $href = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $iconVariant = null;

    protected string | Closure | null $separator = null;

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

    public function separator(string | Closure | null $separator): static
    {
        $this->separator = $separator;

        return $this;
    }

    public function getSeparator(): ?string
    {
        return $this->evaluate($this->separator);
    }
}

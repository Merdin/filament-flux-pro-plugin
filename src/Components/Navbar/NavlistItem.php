<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Navbar;

use Closure;
use Filament\Schemas\Components\Component;

class NavlistItem extends Component
{
    protected string $view = 'filament-flux-pro::components.navbar.navlist-item';

    protected string | Closure | null $text = null;

    protected string | Closure | null $href = null;

    protected bool | Closure | null $current = null;

    protected string | Closure | null $icon = null;

    protected string | Closure | null $badge = null;

    protected string | Closure | null $badgeColor = null;

    protected string | Closure | null $badgeVariant = null;

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

    public function current(bool | Closure | null $current = true): static
    {
        $this->current = $current;

        return $this;
    }

    public function getCurrent(): ?bool
    {
        $value = $this->evaluate($this->current);

        return $value === null ? null : (bool) $value;
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

    public function badge(string | Closure | null $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->evaluate($this->badge);
    }

    public function badgeColor(string | Closure | null $color): static
    {
        $this->badgeColor = $color;

        return $this;
    }

    public function getBadgeColor(): ?string
    {
        return $this->evaluate($this->badgeColor);
    }

    public function badgeVariant(string | Closure | null $variant): static
    {
        $this->badgeVariant = $variant;

        return $this;
    }

    public function getBadgeVariant(): ?string
    {
        return $this->evaluate($this->badgeVariant);
    }
}

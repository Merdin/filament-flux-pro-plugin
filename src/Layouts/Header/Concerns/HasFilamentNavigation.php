<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns;

use BackedEnum;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Contracts\Support\Htmlable;

trait HasFilamentNavigation
{
    /** @return array<int, NavigationGroup> */
    public function getNavigation(): array
    {
        return filament()->getNavigation();
    }

    /** Strip Filament's blade-icons prefix so Flux can resolve the icon name. */
    public function resolveIcon(string|BackedEnum|Htmlable|null $icon): ?string
    {
        if ($icon instanceof Htmlable) {
            return null;
        }

        // BackedEnum values use "o-home" / "s-check" format — strip the variant prefix.
        // String icons use the blade-icons format — strip the full "package-variant-" prefix.
        $name = $icon instanceof BackedEnum
            ? (string) $icon->value
            : preg_replace('/^[a-z]+-[a-z]+-/', '', (string) $icon);

        // Strip remaining single-letter variant prefix: "o-home" → "home".
        return preg_replace('/^[a-z]-/', '', (string) $name) ?: null;
    }

    public function resolveItemIcon(NavigationItem $item): ?string
    {
        $icon = $item->isActive()
            ? ($item->getActiveIcon() ?? $item->getIcon())
            : $item->getIcon();

        return $this->resolveIcon($icon);
    }
}

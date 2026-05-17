<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Profile;

use Closure;
use Filament\Schemas\Components\Component;

class Profile extends Component
{
    protected string $view = 'filament-flux-pro::components.profile.profile';

    const AVATAR_SCHEMA_KEY = 'avatar';

    protected string | Closure | null $name = null;

    protected string | Closure | null $avatar = null;

    protected string | Closure | null $avatarName = null;

    protected string | Closure | null $avatarColor = null;

    protected bool | Closure $circle = false;

    protected string | Closure | null $initials = null;

    protected bool | Closure | null $chevron = null;

    protected string | Closure | null $iconTrailing = null;

    protected string | Closure | null $iconVariant = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function avatarSlot(array | Closure $components): static
    {
        $this->childComponents($components, static::AVATAR_SCHEMA_KEY);

        return $this;
    }

    public function name(string | Closure | null $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
    }

    public function avatar(string | Closure | null $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->evaluate($this->avatar);
    }

    public function avatarName(string | Closure | null $name): static
    {
        $this->avatarName = $name;

        return $this;
    }

    public function getAvatarName(): ?string
    {
        return $this->evaluate($this->avatarName);
    }

    public function avatarColor(string | Closure | null $color): static
    {
        $this->avatarColor = $color;

        return $this;
    }

    public function getAvatarColor(): ?string
    {
        return $this->evaluate($this->avatarColor);
    }

    public function circle(bool | Closure $condition = true): static
    {
        $this->circle = $condition;

        return $this;
    }

    public function getCircle(): bool
    {
        return (bool) $this->evaluate($this->circle);
    }

    public function initials(string | Closure | null $initials): static
    {
        $this->initials = $initials;

        return $this;
    }

    public function getInitials(): ?string
    {
        return $this->evaluate($this->initials);
    }

    public function chevron(bool | Closure | null $chevron): static
    {
        $this->chevron = $chevron;

        return $this;
    }

    public function getChevron(): ?bool
    {
        $value = $this->evaluate($this->chevron);

        return $value === null ? null : (bool) $value;
    }

    public function iconTrailing(string | Closure | null $icon): static
    {
        $this->iconTrailing = $icon;

        return $this;
    }

    public function getIconTrailing(): ?string
    {
        return $this->evaluate($this->iconTrailing);
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
}

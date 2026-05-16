<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Filament\Support\Components\ViewComponent;

class NavMenuItem extends ViewComponent
{
    protected string $viewIdentifier = 'navMenuItem';

    protected string $view = 'filament-flux-pro::layouts.header.components.nav-menu-item';

    protected ?string $label = null;

    protected ?string $href = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(?string $label = null): static
    {
        $instance = app(static::class);

        if ($label !== null) {
            $instance->label($label);
        }

        return $instance;
    }

    public function label(?string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function href(?string $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }
}

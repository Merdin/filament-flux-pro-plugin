<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Filament\Support\Components\ViewComponent;

class MenuRadio extends ViewComponent
{
    protected string $viewIdentifier = 'menuRadio';

    protected string $view = 'filament-flux-pro::layouts.header.components.menu-radio';

    protected ?string $label = null;

    protected bool $checked = false;

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

    public function checked(bool $condition = true): static
    {
        $this->checked = $condition;

        return $this;
    }

    public function getChecked(): bool
    {
        return $this->checked;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Components;

use Filament\Support\Components\ViewComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;

class Brand extends ViewComponent implements HeaderComponent
{
    protected string $viewIdentifier = 'brand';

    protected string $view = 'filament-flux-pro::layouts.header.components.brand';

    protected ?string $href = null;

    protected ?string $logo = null;

    protected ?string $darkLogo = null;

    protected ?string $name = null;

    final public function __construct()
    {
        // Intentionally empty: use make() to instantiate via the service container.
    }

    public static function make(): static
    {
        return app(static::class);
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

    public function logo(?string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function darkLogo(?string $darkLogo): static
    {
        $this->darkLogo = $darkLogo;

        return $this;
    }

    public function getDarkLogo(): ?string
    {
        return $this->darkLogo;
    }

    public function name(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}

<?php

namespace Merdin\Filament\Plugins\Flux\Pro;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class FluxProPlugin implements Plugin
{
    /** @var array<int, HeaderComponent>|null */
    protected ?array $headerComponents = null;

    /** @var array<int, SidebarComponent>|null */
    protected ?array $sidebarComponents = null;

    public function getId(): string
    {
        return 'flux-pro';
    }

    public function register(Panel $panel): void
    {
        // No panel registration needed; configuration is read via FluxProPlugin::get().
    }

    public function boot(Panel $panel): void
    {
        // No panel boot logic needed; Livewire components are registered in the service provider.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static */
        return filament(app(static::class)->getId());
    }

    /** @param array<int, HeaderComponent> $components */
    public function headerComponents(array $components): static
    {
        $this->headerComponents = $components;

        return $this;
    }

    /** @return array<int, HeaderComponent> */
    public function getHeaderComponents(): array
    {
        return $this->headerComponents ?? [];
    }

    /** @param array<int, SidebarComponent> $components */
    public function sidebarComponents(array $components): static
    {
        $this->sidebarComponents = $components;

        return $this;
    }

    /** @return array<int, SidebarComponent> */
    public function getSidebarComponents(): array
    {
        return $this->sidebarComponents ?? [];
    }
}

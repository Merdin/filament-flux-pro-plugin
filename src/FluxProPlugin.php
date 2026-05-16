<?php

namespace Merdin\Filament\Plugins\Flux\Pro;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;

class FluxProPlugin implements Plugin
{
    /** @var array<int, HeaderComponent>|null */
    protected ?array $headerComponents = null;

    public function getId(): string
    {
        return 'flux-pro';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
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
}

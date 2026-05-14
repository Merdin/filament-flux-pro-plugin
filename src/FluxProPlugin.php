<?php

namespace Merdin\Filament\Plugins\Flux\Pro;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FluxProPlugin implements Plugin
{
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
}

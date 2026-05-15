<?php

namespace Merdin\Filament\Plugins\Flux\Pro;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;
use Livewire\Features\SupportTesting\Testable;
use Merdin\Filament\Plugins\Flux\Pro\Testing\TestsFluxPro;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FluxProServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-flux-pro';

    public static string $viewNamespace = 'filament-flux-pro';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews('filament-flux-pro');
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // FilamentView::registerRenderHook(
        //     PanelsRenderHook::BODY_END,
        //     fn (): string => Blade::render('@fluxScripts'),
        // );

        // Testing
        // Testable::mixin(new TestsFluxPro);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'merdin/filament-flux-pro';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-flux-pro-plugin', __DIR__ . '/../resources/dist/components/filament-flux-pro-plugin.js'),
            // Css::make('filament-flux-pro-plugin-styles', __DIR__ . '/../resources/dist/filament-flux-pro-plugin.css'),
            // Js::make('filament-flux-pro-plugin-scripts', __DIR__ . '/../resources/dist/filament-flux-pro-plugin.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [];
    }
}

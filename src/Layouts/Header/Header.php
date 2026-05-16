<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Header;

use Illuminate\View\View;
use Livewire\Component;
use Merdin\Filament\Plugins\Flux\Pro\FluxProPlugin;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Header\Concerns\HeaderComponent;

class Header extends Component
{
    protected string $view = 'filament-flux-pro::layouts.header.header';

    /** @return array<int, HeaderComponent> */
    protected function getComponents(): array
    {
        return FluxProPlugin::get()->getHeaderComponents();
    }

    public function render(): View
    {
        return view($this->view, [
            'components' => $this->getComponents(),
        ]);
    }
}

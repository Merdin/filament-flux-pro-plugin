<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar;

use Illuminate\View\View;
use Livewire\Component;
use Merdin\Filament\Plugins\Flux\Pro\FluxProPlugin;
use Merdin\Filament\Plugins\Flux\Pro\Layouts\Sidebar\Concerns\SidebarComponent;

class Sidebar extends Component
{
    protected string $view = 'filament-flux-pro::layouts.sidebar.sidebar';

    /** @return array<int, SidebarComponent> */
    protected function getComponents(): array
    {
        return FluxProPlugin::get()->getSidebarComponents();
    }

    public function render(): View
    {
        return view($this->view, [
            'components' => $this->getComponents(),
        ]);
    }
}

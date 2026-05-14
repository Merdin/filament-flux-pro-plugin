<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets;

use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Concerns\PresetInterface;

class Builder
{
    /** @var array<int, PresetInterface> */
    private array $presets;

    public function add(PresetInterface $preset): static
    {
        $this->presets[] = $preset;

        return $this;
    }

    public function toString(): string
    {
        return collect($this->presets)->map->name->implode(' ');
    }
}

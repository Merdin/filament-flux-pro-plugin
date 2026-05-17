<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Editor;

use Closure;
use Filament\Forms\Components\Field;

class Editor extends Field
{
    protected string $view = 'filament-flux-pro::components.editor.editor';

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $toolbar = null;

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }

    public function toolbar(string | Closure | null $toolbar): static
    {
        $this->toolbar = $toolbar;

        return $this;
    }

    public function getToolbar(): ?string
    {
        return $this->evaluate($this->toolbar);
    }
}

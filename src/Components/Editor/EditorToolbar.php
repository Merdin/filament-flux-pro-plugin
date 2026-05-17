<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Editor;

use Closure;
use Filament\Schemas\Components\Component;

class EditorToolbar extends Component
{
    protected string $view = 'filament-flux-pro::components.editor.editor-toolbar';

    protected string | Closure | null $items = null;

    final public function __construct(string | Closure | null $items = null)
    {
        if ($items !== null) {
            $this->items($items);
        }
    }

    public static function make(string | Closure | null $items = null): static
    {
        $static = app(static::class, ['items' => $items]);
        $static->configure();

        return $static;
    }

    public function items(string | Closure | null $items): static
    {
        $this->items = $items;

        return $this;
    }

    public function getItems(): ?string
    {
        return $this->evaluate($this->items);
    }
}

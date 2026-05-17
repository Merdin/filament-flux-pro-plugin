<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Editor;

use Filament\Schemas\Components\Component;

class EditorContent extends Component
{
    protected string $view = 'filament-flux-pro::components.editor.editor-content';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\FileUpload;

use Filament\Schemas\Components\Component;

class FileItemRemove extends Component
{
    protected string $view = 'filament-flux-pro::components.file-upload.file-item-remove';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

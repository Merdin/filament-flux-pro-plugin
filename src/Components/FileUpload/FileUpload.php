<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\FileUpload;

use Closure;
use Filament\Forms\Components\Field;

class FileUpload extends Field
{
    protected string $view = 'filament-flux-pro::components.file-upload.file-upload';

    protected bool | Closure $multiple = false;

    public function multiple(bool | Closure $condition = true): static
    {
        $this->multiple = $condition;

        return $this;
    }

    public function getMultiple(): bool
    {
        return (bool) $this->evaluate($this->multiple);
    }
}

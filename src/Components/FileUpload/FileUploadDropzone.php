<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\FileUpload;

use Closure;
use Filament\Schemas\Components\Component;

class FileUploadDropzone extends Component
{
    protected string $view = 'filament-flux-pro::components.file-upload.file-upload-dropzone';

    protected string | Closure | null $heading = null;

    protected string | Closure | null $text = null;

    protected string | Closure | null $icon = null;

    protected bool | Closure $inline = false;

    protected bool | Closure $withProgress = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function heading(string | Closure | null $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->evaluate($this->heading);
    }

    public function text(string | Closure | null $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->evaluate($this->text);
    }

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function inline(bool | Closure $condition = true): static
    {
        $this->inline = $condition;

        return $this;
    }

    public function getInline(): bool
    {
        return (bool) $this->evaluate($this->inline);
    }

    public function withProgress(bool | Closure $condition = true): static
    {
        $this->withProgress = $condition;

        return $this;
    }

    public function getWithProgress(): bool
    {
        return (bool) $this->evaluate($this->withProgress);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\FileUpload;

use Closure;
use Filament\Schemas\Components\Component;

class FileItem extends Component
{
    protected string $view = 'filament-flux-pro::components.file-upload.file-item';

    const ACTIONS_SCHEMA_KEY = 'actions';

    protected string | Closure | null $heading = null;

    protected string | Closure | null $text = null;

    protected string | Closure | null $image = null;

    protected int | string | Closure | null $size = null;

    protected string | Closure | null $icon = null;

    protected bool | Closure $invalid = false;

    final public function __construct(string | Closure | null $heading = null)
    {
        if ($heading !== null) {
            $this->heading($heading);
        }
    }

    public static function make(string | Closure | null $heading = null): static
    {
        $static = app(static::class, ['heading' => $heading]);
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

    public function image(string | Closure | null $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->evaluate($this->image);
    }

    public function size(int | string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): int | string | null
    {
        return $this->evaluate($this->size);
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

    public function invalid(bool | Closure $condition = true): static
    {
        $this->invalid = $condition;

        return $this;
    }

    public function getInvalid(): bool
    {
        return (bool) $this->evaluate($this->invalid);
    }

    public function actions(array | Closure $components): static
    {
        $this->childComponents($components, static::ACTIONS_SCHEMA_KEY);

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Textarea;

use Closure;
use Filament\Forms\Components\Field;

class Textarea extends Field
{
    protected string $view = 'filament-flux-pro::components.textarea.textarea';

    protected string | Closure | null $placeholder = null;

    protected string | int | Closure | null $rows = null;

    protected string | Closure | null $resize = null;

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }

    public function rows(string | int | Closure | null $rows): static
    {
        $this->rows = $rows;

        return $this;
    }

    public function getRows(): string | int | null
    {
        return $this->evaluate($this->rows);
    }

    public function resize(string | Closure | null $resize): static
    {
        $this->resize = $resize;

        return $this;
    }

    public function getResize(): ?string
    {
        return $this->evaluate($this->resize);
    }
}

<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Otp;

use Closure;
use Filament\Forms\Components\Field;

class Otp extends Field
{
    protected string $view = 'filament-flux-pro::components.otp.otp';

    protected int | Closure | null $length = null;

    protected string | Closure | null $mode = null;

    protected bool | Closure $private = false;

    protected string | Closure | null $submit = null;

    protected string | Closure | null $autocomplete = null;

    public function length(int | Closure | null $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function getLength(): ?int
    {
        $value = $this->evaluate($this->length);

        return $value !== null ? (int) $value : null;
    }

    public function mode(string | Closure | null $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->evaluate($this->mode);
    }

    public function private(bool | Closure $condition = true): static
    {
        $this->private = $condition;

        return $this;
    }

    public function getPrivate(): bool
    {
        return (bool) $this->evaluate($this->private);
    }

    public function submit(string | Closure | null $submit): static
    {
        $this->submit = $submit;

        return $this;
    }

    public function getSubmit(): ?string
    {
        return $this->evaluate($this->submit);
    }

    public function autocomplete(string | Closure | null $autocomplete): static
    {
        $this->autocomplete = $autocomplete;

        return $this;
    }

    public function getAutocomplete(): ?string
    {
        return $this->evaluate($this->autocomplete);
    }
}

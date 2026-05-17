<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Modal;

use Closure;
use Filament\Schemas\Components\Component;

class ModalTrigger extends Component
{
    protected string $view = 'filament-flux-pro::components.modal.modal-trigger';

    protected string | Closure | null $name = null;

    protected string | Closure | null $shortcut = null;

    final public function __construct(string | Closure | null $name = null)
    {
        if ($name !== null) {
            $this->name($name);
        }
    }

    public static function make(string | Closure | null $name = null): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->configure();

        return $static;
    }

    public function name(string | Closure | null $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
    }

    public function shortcut(string | Closure | null $shortcut): static
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    public function getShortcut(): ?string
    {
        return $this->evaluate($this->shortcut);
    }
}

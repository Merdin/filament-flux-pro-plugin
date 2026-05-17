<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Tabs;

use Closure;
use Filament\Schemas\Components\Component;

class TabPanel extends Component
{
    protected string $view = 'filament-flux-pro::components.tabs.tab-panel';

    protected string | Closure | null $name = null;

    protected bool | Closure $selected = false;

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

    public function selected(bool | Closure $condition = true): static
    {
        $this->selected = $condition;

        return $this;
    }

    public function getSelected(): bool
    {
        return (bool) $this->evaluate($this->selected);
    }
}

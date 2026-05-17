<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Field;

use Closure;
use Filament\Schemas\Components\Component;

class Fieldset extends Component
{
    protected string $view = 'filament-flux-pro::components.field.fieldset';

    protected string | Closure | null $legend = null;

    protected string | Closure | null $description = null;

    final public function __construct(string | Closure | null $legend = null)
    {
        if ($legend !== null) {
            $this->legend($legend);
        }
    }

    public static function make(string | Closure | null $legend = null): static
    {
        $static = app(static::class, ['legend' => $legend]);
        $static->configure();

        return $static;
    }

    public function legend(string | Closure | null $legend): static
    {
        $this->legend = $legend;

        return $this;
    }

    public function getLegend(): ?string
    {
        return $this->evaluate($this->legend);
    }

    public function description(string | Closure | null $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->evaluate($this->description);
    }
}

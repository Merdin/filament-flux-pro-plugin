<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Brand;

use Closure;
use Filament\Schemas\Components\Component;

class Brand extends Component
{
    protected string $view = 'filament-flux-pro::components.brand.brand';

    protected string | Closure | null $name = null;

    protected string | Closure | null $logo = null;

    protected string | Closure | null $alt = null;

    protected string | Closure | null $href = null;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
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

    public function logo(string | Closure | null $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->evaluate($this->logo);
    }

    public function alt(string | Closure | null $alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->evaluate($this->alt);
    }

    public function href(string | Closure | null $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->evaluate($this->href);
    }
}

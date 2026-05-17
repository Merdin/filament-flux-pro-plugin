<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\ColorPicker;

use Closure;
use Filament\Schemas\Components\Component;

class ColorPicker extends Component
{
    protected string $view = 'filament-flux-pro::components.color-picker.color-picker';

    protected string | Closure | null $value = null;

    protected string | Closure | null $name = null;

    protected string | Closure | null $format = null;

    protected string | Closure | null $type = null;

    protected string | Closure | null $placeholder = null;

    protected string | Closure | null $size = null;

    protected array | bool | Closure | null $swatches = null;

    protected bool | Closure $dropper = false;

    protected bool | Closure $clearable = false;

    protected bool | Closure $copyable = false;

    protected string | Closure | null $label = null;

    protected string | Closure | null $description = null;

    protected bool | Closure $disabled = false;

    protected bool | Closure $invalid = false;

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }

    public function value(string | Closure | null $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->evaluate($this->value);
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

    public function format(string | Closure | null $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->evaluate($this->format);
    }

    public function type(string | Closure | null $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->evaluate($this->type);
    }

    public function placeholder(string | Closure | null $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->evaluate($this->placeholder);
    }

    public function size(string | Closure | null $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->evaluate($this->size);
    }

    public function swatches(array | bool | Closure | null $swatches): static
    {
        $this->swatches = $swatches;

        return $this;
    }

    public function getSwatches(): array | bool | null
    {
        return $this->evaluate($this->swatches);
    }

    public function dropper(bool | Closure $condition = true): static
    {
        $this->dropper = $condition;

        return $this;
    }

    public function getDropper(): bool
    {
        return (bool) $this->evaluate($this->dropper);
    }

    public function clearable(bool | Closure $condition = true): static
    {
        $this->clearable = $condition;

        return $this;
    }

    public function getClearable(): bool
    {
        return (bool) $this->evaluate($this->clearable);
    }

    public function copyable(bool | Closure $condition = true): static
    {
        $this->copyable = $condition;

        return $this;
    }

    public function getCopyable(): bool
    {
        return (bool) $this->evaluate($this->copyable);
    }

    public function label(string | Closure | null $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->evaluate($this->label);
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

    public function disabled(bool | Closure $condition = true): static
    {
        $this->disabled = $condition;

        return $this;
    }

    public function getDisabled(): bool
    {
        return (bool) $this->evaluate($this->disabled);
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
}

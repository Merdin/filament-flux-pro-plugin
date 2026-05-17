<?php

declare(strict_types=1);

namespace Merdin\Filament\Plugins\Flux\Pro\Components\Otp;

use Filament\Schemas\Components\Component;

class OtpInput extends Component
{
    protected string $view = 'filament-flux-pro::components.otp.otp-input';

    final public function __construct() {}

    public static function make(): static
    {
        $static = app(static::class);
        $static->configure();

        return $static;
    }
}

<?php

use Carbon\Carbon;
use Filament\Forms\FormsComponent;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\DatePicker;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Builder as PresetBuilder;
use Merdin\Filament\Plugins\Flux\Pro\Components\DatePicker\Helpers\Presets\Preset;

use function Pest\Livewire\livewire;

class DatePickerForm extends FormsComponent
{
    public ?Carbon $min = null;
    public ?Carbon $max = null;
    public ?int $minRange = null;
    public ?int $maxRange = null;
    public ?array $unavailable = null;
    public ?Carbon $openTo = null;
    public ?bool $forceOpenTo = null;
    public ?string $size = null;
    public ?int $startDay = null;
    public ?bool $weekNumbers = null;
    public ?bool $selectableHeader = null;
    public ?bool $withToday = null;
    public bool|string|null $withInputs = null;
    public ?bool $withConfirmation = null;
    public ?bool $withPresets = null;
    public ?bool $todayPreset = null; // preset
    protected ?bool $clearable = null;
    protected ?bool $disabled = null;
    protected ?bool $invalid = null;
    public ?string $locale = null;

    public function mount(
        ?bool $clearable = null,
        ?bool $disabled = null,
        ?bool $invalid = null
    ): void {
        $this->clearable = $clearable;
        $this->disabled = $disabled;
        $this->invalid = $invalid;
    }

    public function formSchema(Schema $schema): Schema
    {
        $field = DatePicker::make('date');

        if ($this->min) {
            $field->min(Carbon::parse($this->min));
        }

        if ($this->max) {
            $field->max(Carbon::parse($this->max));
        }

        if ($this->minRange) {
            $field->minRange($this->minRange);
        }

        if ($this->maxRange) {
            $field->maxRange($this->maxRange);
        }

        if ($this->unavailable) {
            $field->unavailable($this->unavailable);
        }

        if ($this->openTo) {
            $field->openTo($this->openTo);
        }

        if ($this->forceOpenTo) {
            $field->forceOpenTo($this->forceOpenTo);
        }

        if ($this->size) {
            $field->size($this->size);
        }

        if ($this->startDay) {
            $field->startDay($this->startDay);
        }

        if ($this->weekNumbers) {
            $field->weekNumbers($this->weekNumbers);
        }

        if ($this->selectableHeader) {
            $field->selectableHeader($this->selectableHeader);
        }

        if ($this->withToday) {
            $field->withToday($this->withToday);
        }

        if ($this->withInputs) {
            $field->withInputs($this->withInputs);
        }

        if ($this->withConfirmation) {
            $field->withConfirmation($this->withConfirmation);
        }

        if ($this->withPresets) {
            $field->withPresets($this->withPresets);
        }

        if ($this->todayPreset) {
            $builder = new PresetBuilder();
            $builder->add(new Preset\Today());

            $field->presets($builder);
        }

        if ($this->clearable) {
            $field->clearable($this->clearable);
        }

        if ($this->disabled) {
            $field->disabled($this->disabled);
        }

        if ($this->invalid) {
            $field->invalid($this->invalid);
        }

        if ($this->locale) {
            $field->locale($this->locale);
        }

        return $schema->components([$field]);
    }

    public function render(): string
    {
        return '<div>{{ $this->form }}</div>';
    }
}

it('can render the date picker', function () {
    livewire(DatePickerForm::class)
        ->assertOk();
});

it('renders the date picker with type button by default', function () {
    livewire(DatePickerForm::class)
        ->assertSeeHtml('type=button');
});

it('renders the date picker with mode single by default', function () {
    livewire(DatePickerForm::class)
        ->assertSeeHtml('mode=single');
});

it('renders the date picker without min date when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('min=');
});

it('renders the date picker with min date when set', function () {
    $date = Carbon::today();

    livewire(DatePickerForm::class, ['min' => $date])
        ->assertSeeHtml("min=\"{$date->toDateString()}\"");
});

it('renders the date picker without max date when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('max=');
});

it('renders the date picker with max date when set', function () {
    $date = Carbon::today();

    livewire(DatePickerForm::class, ['max' => $date])
        ->assertSeeHtml("max=\"{$date->toDateString()}\"");
});

it('renders the date picker without min-range when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('min-range=');
});

it('renders the date picker with min-range when set', function () {
    $minRange = 1;

    livewire(DatePickerForm::class, ['minRange' => $minRange])
        ->assertSeeHtml("min-range=\"{$minRange}\"");
});

it('renders the date picker without max-range when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('max-range=');
});

it('renders the date picker with max-range when set', function () {
    $maxRange = 1;

    livewire(DatePickerForm::class, ['maxRange' => $maxRange])
        ->assertSeeHtml("max-range=\"{$maxRange}\"");
});

it('renders the date picker without unavailable when not set', function () {
    $unavailable = null;

    livewire(DatePickerForm::class, ['unavailable' => $unavailable])
        ->assertDontSeeHtml("unavailable=");
});

it('renders the date picker with unavailable when set', function () {
    $unavailable = [Carbon::today(), Carbon::yesterday()];
    $formatted = collect($unavailable)->map->toDateString()->implode(',');

    livewire(DatePickerForm::class, ['unavailable' => $unavailable])
        ->assertSeeHtml("unavailable=\"{$formatted}\"");
});

it('renders the date picker without open-to when not set', function () {
    $openTo = null;

    livewire(DatePickerForm::class, ['openTo' => $openTo])
        ->assertDontSeeHtml('open-to=');
});

it('renders the date picker with open-to when set', function () {
    $openTo = Carbon::today();

    livewire(DatePickerForm::class, ['openTo' => $openTo])
        ->assertSeeHtml("open-to=\"{$openTo->toIso8601String()}\"");
});

it('renders the date picker without force-open-to when not set', function () {
    $forceOpenTo = false;

    livewire(DatePickerForm::class, ['forceOpenTo' => $forceOpenTo])
        ->assertDontSeeHtml('force-open-to');
});

it('renders the date picker with force-open-to when set', function () {
    $forceOpenTo = true;

    livewire(DatePickerForm::class, ['forceOpenTo' => $forceOpenTo])
        ->assertSeeHtml('force-open-to');
});

it('renders the date picker with 1 month by default in single mode', function () {
    livewire(DatePickerForm::class, [])
        ->assertSeeHtml("months=\"1\"");
});

it('renders the date picker with 2 months by default in range mode', function () {
})->skip('Not supporting range yet');

it('renders the date picker with default size when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertSeeHtml("size=\"default\"");
});

it('renders the date picker with sm size when is set', function () {
    $size = 'sm';

    livewire(DatePickerForm::class, ['size' => $size])
        ->assertSeeHtml("size=\"{$size}\"");
});

it('renders the date picker with lg size when is set', function () {
    $size = 'lg';

    livewire(DatePickerForm::class, ['size' => $size])
        ->assertSeeHtml("size=\"{$size}\"");
});

it('renders the date picker with xl size when is set', function () {
    $size = 'xl';

    livewire(DatePickerForm::class, ['size' => $size])
        ->assertSeeHtml("size=\"{$size}\"");
});

it('renders the date picker with 2xl size when is set', function () {
    $size = '2xl';

    livewire(DatePickerForm::class, ['size' => $size])
        ->assertSeeHtml("size=\"{$size}\"");
});

it('renders the date picker without start-day', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('start-day=');
});

it('opens the date picker on start-day based on users locale when not set', function () {
})
->todo('research how we can test this in the ui');

it('renders the date picker with start-day when set', function () {
    $startDay = 1;

    livewire(DatePickerForm::class, ['startDay' => $startDay])
        ->assertSeeHtml("start-day=\"{$startDay}\"");
});

it('renders the date picker without week-numbers when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('week-numbers');
});

it('renders the date picker with week-numbers when set', function () {
    livewire(DatePickerForm::class, ['weekNumbers' => true])
        ->assertSeeHtml('week-numbers');
});

it('renders the date picker without selectable-header when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('selectable-header');
});

it('renders the date picker with selectable-header when set', function () {
    livewire(DatePickerForm::class, ['selectableHeader' => true])
        ->assertSeeHtml('selectable-header');
});

it('renders the date picker without with-today when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('with-today');
});

it('renders the date picker with with-today when set', function () {
    livewire(DatePickerForm::class, ['withToday' => true])
        ->assertSeeHtml('with-today');
});

it('renders the date picker without with-inputs when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('with-inputs');
});

it('renders the date picker with with-inputs when set', function () {
    livewire(DatePickerForm::class, ['withInputs' => true])
        ->assertSeeHtml('with-inputs');
});

it('renders the date picker with with-inputs=custom when set', function () {
    $withInputs = 'custom';
    livewire(DatePickerForm::class, ['withInputs' => $withInputs])
        ->assertSeeHtml("with-inputs=\"{$withInputs}\"");
});

it('renders the date picker with with-inputs=native when set', function () {
    $withInputs = 'native';
    livewire(DatePickerForm::class, ['withInputs' => $withInputs])
        ->assertSeeHtml("with-inputs=\"{$withInputs}\"");
});

it('renders the date picker without with-confirmation when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('with-confirmation');
});

it('renders the date picker with with-confirmation when set', function () {
    livewire(DatePickerForm::class, ['withConfirmation' => true])
        ->assertSeeHtml('with-confirmation');
});

it('renders the date picker without with-presets when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('with-presets');
});

it('renders the date picker with with-presets when set', function () {
    livewire(DatePickerForm::class, ['withPresets' => true])
        ->assertSeeHtml('with-presets');
});

it('renders the date picker default presets when with-presets is set', function () {
    $defaultPresets = Str::of('')
        ->append('today ')
        ->append('yesterday ')
        ->append('thisWeek ')
        ->append('last7Days ')
        ->append('thisMonth ')
        ->append('thisYearToDate ')
        ->append('allTime');

    livewire(DatePickerForm::class, ['withPresets' => true])
        ->assertSeeHtml('with-presets')
        ->assertSeeHtml("presets=\"{$defaultPresets}\"");
});

it('renders the date picker today preset when `today`-preset is set', function () {
    livewire(DatePickerForm::class, [
        'withPresets' => true,
        'todayPreset' => true
        ])
        ->assertSeeHtml('with-presets')
        ->assertSeeHtml("presets=\"today\"");
});

it('renders the date picker without clearable when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('clearable');
});

it('renders the date picker with clearable when set', function () {
    livewire(DatePickerForm::class, ['clearable' => true])
        ->assertSeeHtml('clearable');
});

it('renders the date picker enabled by default', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('disabled');
});

it('renders the date picker disabled when set', function () {
    livewire(DatePickerForm::class, ['disabled' => true])
        ->assertSeeHtml('disabled');
});

it('renders the date picker without invalid when not set', function () {
    livewire(DatePickerForm::class, [])
        ->assertDontSeeHtml('invalid');
});

it('renders the date picker with invalid when set', function () {
    livewire(DatePickerForm::class, ['invalid' => true])
        ->assertSeeHtml('invalid');
});

it('renders with default locale when not set', function () {
    livewire(DatePickerForm::class)
        ->assertSeeHtml("&quot;locale&quot;:null");
});

it('renders with locale en-US when set', function () {
    $locale = 'en-US';

    livewire(DatePickerForm::class, ['locale' => $locale])
        ->assertSeeHtml("locale=\"{$locale}\"");
});

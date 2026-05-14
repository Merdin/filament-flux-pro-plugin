<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::date-picker x-model="state" type={{ $getType() }} mode={{ $getMode() }}
            @if ($getWeekNumbers()) week-numbers @endif @if ($getFixedWeeks()) fixed-weeks @endif
            @if ($getWithToday()) with-today @endif
            @if ($getSelectableHeader()) selectable-header @endif
            @if (filled($getOpenTo())) open-to="{{ $getOpenTo() }}" @endif
            @if ($getForceOpenTo()) force-open-to @endif
            @if (filled($getMin())) min="{{ $getMin() }}" @endif
            @if (filled($getMax())) max="{{ $getMax() }}" @endif
            @if (filled($getUnavailable())) unavailable="{{ $getUnavailable() }}" @endif
            @if (filled($getSize())) size="{{ $getSize() }}" @endif
            @if (filled($getStartDay())) start-day="{{ $getStartDay() }}" @endif
            @if ($getWithInputs()) with-inputs="{{ $getWithInputs() }}" @endif
            @if ($getWithConfirmation()) with-confirmation @endif
            @if ($getWithPresets()) with-presets @endif months="{{ $getMonths() }}"
            @if ($getWithPresets()) presets="{{ $getPresets() }}" @endif
            @if ($getClearable()) clearable @endif @if ($isDisabled()) disabled @endif
            @if ($getInvalid()) invalid @endif
            @if (filled($getLocale)) locale="{{ $getLocale() }}" @endif
            @if (filled($getMinRange())) min-range="{{ $getMinRange() }}" @endif
            @if (filled($getMaxRange())) max-range="{{ $getMaxRange() }}" @endif />
    </div>

</x-dynamic-component>

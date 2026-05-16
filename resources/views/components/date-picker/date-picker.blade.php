<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::date-picker x-model="state" :type="$getType()" :mode="$getMode()" :week-numbers="$getWeekNumbers() ?: null" :fixed-weeks="$getFixedWeeks() ?: null"
            :with-today="$getWithToday() ?: null" :selectable-header="$getSelectableHeader() ?: null" :open-to="$getOpenTo()" :force-open-to="$getForceOpenTo() ?: null" :min="$getMin()"
            :max="$getMax()" :unavailable="$getUnavailable()" :size="$getSize()" :start-day="$getStartDay()" :with-inputs="$getWithInputs()"
            :with-confirmation="$getWithConfirmation() ?: null" :with-presets="$getWithPresets() ?: null" :months="$getMonths()" :presets="$getWithPresets() ? $getPresets() : null" :clearable="$getClearable() ?: null"
            :disabled="$isDisabled() ?: null" :locale="$getLocale()" :min-range="$getMinRange()" :max-range="$getMaxRange()" :placeholder="$getPlaceholder()"
            :class="filled($getValidationMessages()) ? 'ring-2 ring-red-500!' : ''" />
    </div>

</x-dynamic-component>

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <flux:calendar
            x-model="state"
            :mode="$getMode()"
            :min="$getMin()"
            :max="$getMax()"
            :unavailable="$getUnavailable()"
            :size="$getSize()"
            :start-day="$getStartDay()"
            :months="$getMonths()"
            :min-range="$getMinRange()"
            :max-range="$getMaxRange()"
            :open-to="$getOpenTo()"
            :force-open-to="$getForceOpenTo() ?: null"
            :navigation="$getNavigation()"
            :static="$getDisplayOnly() ?: null"
            :week-numbers="$getWeekNumbers() ?: null"
            :selectable-header="$getSelectableHeader() ?: null"
            :with-today="$getWithToday() ?: null"
            :with-inputs="$getWithInputs() ?: null"
            :locale="$getLocale()"
            :disabled="$isDisabled() ?: null"
        />
    </div>

</x-dynamic-component>

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::time-picker
            x-model="state"
            :type="$getType()"
            :multiple="$getMultiple() ?: null"
            :time-format="$getTimeFormat()"
            :interval="$getInterval()"
            :min="$getMin()"
            :max="$getMax()"
            :unavailable="$getUnavailable()"
            :open-to="$getOpenTo()"
            :placeholder="$getPlaceholder()"
            :size="$getSize()"
            :clearable="$getClearable() ?: null"
            :dropdown="$getDropdown()"
            :locale="$getLocale()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        />
    </div>
</x-dynamic-component>

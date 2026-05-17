<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::textarea
            x-model="state"
            :placeholder="$getPlaceholder()"
            :rows="$getRows()"
            :resize="$getResize()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        />
    </div>
</x-dynamic-component>

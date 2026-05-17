<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::switch
            x-model="state"
            :align="$getAlign()"
            :disabled="$isDisabled() ?: null"
        />
    </div>
</x-dynamic-component>

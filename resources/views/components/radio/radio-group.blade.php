<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::radio.group
            x-model="state"
            :variant="$getVariant()"
            :size="$getSize()"
            :indicator="$getIndicator()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        >{{ $getChildSchema() }}</x-flux::radio.group>
    </div>
</x-dynamic-component>

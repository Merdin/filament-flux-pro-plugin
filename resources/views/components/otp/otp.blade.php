<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::otp
            x-model="state"
            :length="$getLength()"
            :mode="$getMode()"
            :private="$getPrivate() ?: null"
            :submit="$getSubmit()"
            :autocomplete="$getAutocomplete()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        >{{ $getChildSchema() }}</x-flux::otp>
    </div>
</x-dynamic-component>

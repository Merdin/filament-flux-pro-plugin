<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::editor x-model="state"
            :placeholder="$getPlaceholder()"
            :toolbar="$getToolbar()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        >{{ $getChildSchema() }}</x-flux::editor>
    </div>
</x-dynamic-component>

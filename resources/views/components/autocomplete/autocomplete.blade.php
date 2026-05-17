<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::autocomplete
            container:x-model="state"
            :placeholder="$getPlaceholder()"
            :size="$getSize()"
            :variant="$getVariant()"
            :icon="$getIcon()"
            :icon:trailing="$getIconTrailing()"
            :kbd="$getKbd()"
            :clearable="$getClearable() ?: null"
            :copyable="$getCopyable() ?: null"
            :viewable="$getViewable() ?: null"
            :mask="$getMask()"
            :container:class="$getContainerClass()"
            :input:class="$getInputClass()"
            :disabled="$isDisabled() ?: null"
            :invalid="$getValidationMessages() ? true : null"
        >
            @foreach ($getOptions() as $value => $label)
                <x-flux::autocomplete.item value="{{ $value }}">{{ $label }}</x-flux::autocomplete.item>
            @endforeach
        </x-flux::autocomplete>
    </div>

</x-dynamic-component>

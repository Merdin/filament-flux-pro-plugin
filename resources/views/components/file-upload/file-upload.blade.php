<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-flux::file-upload
        wire:model="{{ $getStatePath() }}"
        :multiple="$getMultiple() ?: null"
        :disabled="$isDisabled() ?: null"
    >{{ $getChildSchema() }}</x-flux::file-upload>
</x-dynamic-component>

@php
    $triggerSchema = $getChildSchema($schemaComponent::TRIGGER_SCHEMA_KEY);
    $inputSchema = $getChildSchema($schemaComponent::INPUT_SCHEMA_KEY);
    $emptySchema = $getChildSchema($schemaComponent::EMPTY_SCHEMA_KEY);
@endphp
<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::pillbox
            x-model="state"
            :placeholder="$getPlaceholder()"
            :size="$getSize()"
            :variant="$getVariant()"
            :multiple="$getMultiple() ?: null"
            :searchable="$getSearchable() ?: null"
            :search:placeholder="$getSearchPlaceholder()"
            :filter="$getFilter()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        >
            @if ($triggerSchema)<x-slot name="trigger">{{ $triggerSchema }}</x-slot>@endif
            @if ($inputSchema)<x-slot name="input">{{ $inputSchema }}</x-slot>@endif
            @if ($emptySchema)<x-slot name="empty">{{ $emptySchema }}</x-slot>@endif
            {{ $getChildSchema() }}
        </x-flux::pillbox>
    </div>
</x-dynamic-component>

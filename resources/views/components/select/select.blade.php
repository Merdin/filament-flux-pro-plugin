@php
    $buttonSchema = $getChildSchema($schemaComponent::BUTTON_SCHEMA_KEY);
    $inputSchema = $getChildSchema($schemaComponent::INPUT_SCHEMA_KEY);
    $searchSchema = $getChildSchema($schemaComponent::SEARCH_SCHEMA_KEY);
    $emptySchema = $getChildSchema($schemaComponent::EMPTY_SCHEMA_KEY);
@endphp
<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::select
            x-model="state"
            :placeholder="$getPlaceholder()"
            :size="$getSize()"
            :variant="$getVariant()"
            :multiple="$getMultiple() ?: null"
            :filter="$getFilter()"
            :searchable="$getSearchable() ?: null"
            :empty="$getEmpty()"
            :clearable="$getClearable() ?: null"
            :selected-suffix="$getSelectedSuffix()"
            :clear="$getClear()"
            :indicator="$getIndicator()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        >
            @if ($buttonSchema)<x-slot name="button">{{ $buttonSchema }}</x-slot>@endif
            @if ($inputSchema)<x-slot name="input">{{ $inputSchema }}</x-slot>@endif
            @if ($searchSchema)<x-slot name="search">{{ $searchSchema }}</x-slot>@endif
            @if ($emptySchema)<x-slot name="empty">{{ $emptySchema }}</x-slot>@endif
            {{ $getChildSchema() }}
        </x-flux::select>
    </div>
</x-dynamic-component>

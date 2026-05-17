@php
    $iconSchema = $getChildSchema($schemaComponent::ICON_SCHEMA_KEY);
    $iconLeadingSchema = $getChildSchema($schemaComponent::ICON_LEADING_SCHEMA_KEY);
    $iconTrailingSchema = $getChildSchema($schemaComponent::ICON_TRAILING_SCHEMA_KEY);
@endphp
<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::input
            x-model="state"
            :type="$getType()"
            :placeholder="$getPlaceholder()"
            :size="$getSize()"
            :variant="$getVariant()"
            :readonly="$getReadonly() ?: null"
            :multiple="$getMultiple() ?: null"
            :mask="$getMask()"
            :mask:dynamic="$getMaskDynamic()"
            :icon="$getIcon()"
            :icon:trailing="$getIconTrailing()"
            :kbd="$getKbd()"
            :clearable="$getClearable() ?: null"
            :copyable="$getCopyable() ?: null"
            :viewable="$getViewable() ?: null"
            :as="$getAs()"
            :input:class="$getInputClass()"
            :disabled="$isDisabled() ?: null"
            :invalid="filled($getValidationMessages()) ?: null"
        >
            @if ($iconSchema)<x-slot name="icon">{{ $iconSchema }}</x-slot>@endif
            @if ($iconLeadingSchema)<x-slot name="icon:leading">{{ $iconLeadingSchema }}</x-slot>@endif
            @if ($iconTrailingSchema)<x-slot name="iconTrailing">{{ $iconTrailingSchema }}</x-slot>@endif
        </x-flux::input>
    </div>
</x-dynamic-component>

@php
    $inputSchema = $getChildSchema($schemaComponent::INPUT_SCHEMA_KEY);
    $headerSchema = $getChildSchema($schemaComponent::HEADER_SCHEMA_KEY);
    $footerSchema = $getChildSchema($schemaComponent::FOOTER_SCHEMA_KEY);
    $actionsLeadingSchema = $getChildSchema($schemaComponent::ACTIONS_LEADING_SCHEMA_KEY);
    $actionsTrailingSchema = $getChildSchema($schemaComponent::ACTIONS_TRAILING_SCHEMA_KEY);
@endphp

<x-flux::composer
    :value="$getValue()"
    :name="$getName()"
    :placeholder="$getPlaceholder()"
    :label="$getLabel()"
    :label:sr-only="$getLabelSrOnly() ?: null"
    :description="$getDescription()"
    :description:sr-only="$getDescriptionSrOnly() ?: null"
    :rows="$getRows()"
    :max-rows="$getMaxRows()"
    :inline="$getInline() ?: null"
    :submit="$getSubmit()"
    :disabled="$getDisabled() ?: null"
    :invalid="$getInvalid() ?: null"
>
    @if ($inputSchema)
        <x-slot name="input">{{ $inputSchema }}</x-slot>
    @endif

    @if ($headerSchema)
        <x-slot name="header">{{ $headerSchema }}</x-slot>
    @endif

    @if ($footerSchema)
        <x-slot name="footer">{{ $footerSchema }}</x-slot>
    @endif

    @if ($actionsLeadingSchema)
        <x-slot name="actionsLeading">{{ $actionsLeadingSchema }}</x-slot>
    @endif

    @if ($actionsTrailingSchema)
        <x-slot name="actionsTrailing">{{ $actionsTrailingSchema }}</x-slot>
    @endif
</x-flux::composer>

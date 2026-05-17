@php
    $actionsSchema = $getChildSchema($schemaComponent::ACTIONS_SCHEMA_KEY);
    $controlsSchema = $getChildSchema($schemaComponent::CONTROLS_SCHEMA_KEY);
@endphp

<x-flux::callout :icon="$getIcon()" :icon:variant="$getIconVariant()" :variant="$getVariant()" :color="$getColor()"
    :inline="$getInline() ?: null" :heading="$getHeading()" :text="$getText()">
    {{ $getChildSchema() }}

    @if ($actionsSchema)
        <x-slot name="actions">{{ $actionsSchema }}</x-slot>
    @endif

    @if ($controlsSchema)
        <x-slot name="controls">{{ $controlsSchema }}</x-slot>
    @endif
</x-flux::callout>

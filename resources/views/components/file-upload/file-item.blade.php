@php
    $actionsSchema = $getChildSchema($schemaComponent::ACTIONS_SCHEMA_KEY);
@endphp
<x-flux::file-item
    :heading="$getHeading()"
    :text="$getText()"
    :image="$getImage()"
    :size="$getSize()"
    :icon="$getIcon()"
    :invalid="$getInvalid() ?: null"
>
    @if ($actionsSchema)<x-slot name="actions">{{ $actionsSchema }}</x-slot>@endif
</x-flux::file-item>

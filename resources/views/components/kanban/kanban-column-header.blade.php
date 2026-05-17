@php
    $actionsSchema = $getChildSchema($schemaComponent::ACTIONS_SCHEMA_KEY);
@endphp
<x-flux::kanban.column.header
    :heading="$getHeading()"
    :subheading="$getSubheading()"
    :count="$getCount()"
    :badge="$getBadge()"
>
    @if ($actionsSchema)<x-slot name="actions">{{ $actionsSchema }}</x-slot>@endif
    {{ $getChildSchema() }}
</x-flux::kanban.column.header>

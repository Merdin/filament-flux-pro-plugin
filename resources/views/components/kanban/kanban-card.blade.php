@php
    $headerSchema = $getChildSchema($schemaComponent::HEADER_SCHEMA_KEY);
    $footerSchema = $getChildSchema($schemaComponent::FOOTER_SCHEMA_KEY);
@endphp
<x-flux::kanban.card
    :heading="$getHeading()"
    :as="$getAs()"
>
    @if ($headerSchema)<x-slot name="header">{{ $headerSchema }}</x-slot>@endif
    @if ($footerSchema)<x-slot name="footer">{{ $footerSchema }}</x-slot>@endif
    {{ $getChildSchema() }}
</x-flux::kanban.card>

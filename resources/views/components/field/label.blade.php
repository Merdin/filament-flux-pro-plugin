@php
    $trailingSchema = $getChildSchema($schemaComponent::TRAILING_SCHEMA_KEY);
@endphp
<x-flux::label :badge="$getBadge()">
    @if ($trailingSchema)<x-slot name="trailing">{{ $trailingSchema }}</x-slot>@endif
    {{ $getText() }}{{ $getChildSchema() }}
</x-flux::label>

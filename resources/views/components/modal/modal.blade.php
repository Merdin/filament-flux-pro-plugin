@php
    $footerSchema = $getChildSchema($schemaComponent::FOOTER_SCHEMA_KEY);
@endphp
<x-flux::modal
    :name="$getName()"
    :flyout="$getFlyout() ?: null"
    :variant="$getVariant()"
    :position="$getPosition()"
    :scroll="$getScroll()"
    :dismissible="$getDismissible()"
    :closable="$getClosable()"
>
    @if ($footerSchema)<x-slot name="footer">{{ $footerSchema }}</x-slot>@endif
    {{ $getChildSchema() }}
</x-flux::modal>

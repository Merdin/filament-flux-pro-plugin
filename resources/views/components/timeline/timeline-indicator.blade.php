<x-flux::timeline.indicator
    :variant="$getVariant()"
    :status="$getStatus()"
    :color="$getColor()"
>
    {{ $getChildSchema() }}
</x-flux::timeline.indicator>

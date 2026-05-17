<x-flux::timeline.item
    :status="$getStatus()"
    :align="$getAlign()"
    :size="$getSize()"
>
    {{ $getChildSchema() }}
</x-flux::timeline.item>

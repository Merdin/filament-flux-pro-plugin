<x-flux::dropdown
    :position="$getPosition()"
    :align="$getAlign()"
    :offset="$getOffset()"
    :gap="$getGap()"
>
    {{ $getChildSchema() }}
</x-flux::dropdown>

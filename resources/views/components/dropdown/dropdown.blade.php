<x-flux::dropdown :position="$getPosition()" :align="$getAlign()" :offset="$getOffset()" :gap="$getGap()" :hover="$getHover() ?: null">
    {{ $getChildSchema() }}
</x-flux::dropdown>

<x-flux::dropdown :position="$getPosition()" :align="$getAlign()" :offset="$getOffset()" :gap="$getTriggerGap()" :hover="$getHover() ?: null">
    {{ $getChildSchema() }}
</x-flux::dropdown>

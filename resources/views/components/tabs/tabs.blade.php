<x-flux::tabs
    :variant="$getVariant()"
    :size="$getSize()"
    :scrollable="$getScrollable() ?: null"
    :scrollable:scrollbar="$getScrollableScrollbar()"
    :scrollable:fade="$getScrollableFade() ?: null"
>
    {{ $getChildSchema() }}
</x-flux::tabs>

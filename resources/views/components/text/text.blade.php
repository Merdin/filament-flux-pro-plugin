<x-flux::text
    :size="$getSize()"
    :variant="$getVariant()"
    :color="$getColor()"
    :inline="$getInline() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::text>

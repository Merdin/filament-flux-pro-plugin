<x-flux::table.cell
    :align="$getAlign()"
    :variant="$getVariant()"
    :sticky="$getSticky() ?: null"
>{{ $getChildSchema() }}</x-flux::table.cell>

<x-flux::table.column
    :align="$getAlign()"
    :sortable="$getSortable() ?: null"
    :sorted="$getSorted() ?: null"
    :direction="$getDirection()"
    :sticky="$getSticky() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::table.column>

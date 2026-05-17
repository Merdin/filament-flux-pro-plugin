<x-flux::table.row
    :key="$getRowKey()"
    :sticky="$getSticky() ?: null"
>
    {{ $getChildSchema() }}
</x-flux::table.row>

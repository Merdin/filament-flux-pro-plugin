<x-flux::navlist.group
    :heading="$getHeading()"
    :expandable="$getExpandable() ?: null"
    :expanded="$getExpanded()"
>
    {{ $getChildSchema() }}
</x-flux::navlist.group>

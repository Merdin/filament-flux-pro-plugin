<x-flux::navlist.item
    :href="$getHref()"
    :current="$getCurrent()"
    :icon="$getIcon()"
    :badge="$getBadge()"
    :badge:color="$getBadgeColor()"
    :badge:variant="$getBadgeVariant()"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::navlist.item>

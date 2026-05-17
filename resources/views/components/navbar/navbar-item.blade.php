<x-flux::navbar.item
    :href="$getHref()"
    :current="$getCurrent()"
    :icon="$getIcon()"
    :icon:trailing="$getIconTrailing()"
    :badge="$getBadge()"
    :badge:color="$getBadgeColor()"
    :badge:variant="$getBadgeVariant()"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::navbar.item>

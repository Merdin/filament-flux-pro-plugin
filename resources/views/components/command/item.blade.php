<x-flux::command.item
    :icon="$getIcon()"
    :icon:variant="$getIconVariant()"
    :kbd="$getKbd()"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::command.item>

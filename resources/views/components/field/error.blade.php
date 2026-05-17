<x-flux::error
    :name="$getName()"
    :message="$getMessage()"
    :bag="$getBag()"
    :deep="$getDeep()"
    :icon="$getIcon()"
>{{ $getChildSchema() }}</x-flux::error>

<x-flux::heading
    :size="$getSize()"
    :level="$getLevel()"
    :accent="$getAccent() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::heading>

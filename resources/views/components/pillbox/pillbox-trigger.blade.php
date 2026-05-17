<x-flux::pillbox.trigger
    :placeholder="$getPlaceholder()"
    :invalid="$getInvalid() ?: null"
    :size="$getSize()"
    :clearable="$getClearable() ?: null"
>{{ $getChildSchema() }}</x-flux::pillbox.trigger>

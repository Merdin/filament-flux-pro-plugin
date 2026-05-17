<x-flux::select.option.create
    :min-length="$getMinLength()"
    :modal="$getModal()"
>{{ $getChildSchema() }}</x-flux::select.option.create>

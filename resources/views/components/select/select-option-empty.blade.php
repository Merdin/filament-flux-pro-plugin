<x-flux::select.option.empty
    :when-loading="$getWhenLoading()"
>{{ $getChildSchema() }}</x-flux::select.option.empty>

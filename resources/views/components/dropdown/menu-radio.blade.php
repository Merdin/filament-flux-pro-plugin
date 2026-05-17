<x-flux::menu.radio
    :checked="$getChecked() ?: null"
    :disabled="$getDisabled() ?: null"
    :keep-open="$getKeepOpen() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::menu.radio>

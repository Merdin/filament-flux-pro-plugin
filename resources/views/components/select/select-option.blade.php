<x-flux::select.option
    :value="$getValue()"
    :label="$getLabel()"
    :selected-label="$getSelectedLabel()"
    :disabled="$getDisabled() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::select.option>

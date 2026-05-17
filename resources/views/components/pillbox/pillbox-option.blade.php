<x-flux::pillbox.option
    :value="$getValue()"
    :label="$getLabel()"
    :selected-label="$getSelectedLabel()"
    :disabled="$getDisabled() ?: null"
    :filterable="$getFilterable()"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::pillbox.option>

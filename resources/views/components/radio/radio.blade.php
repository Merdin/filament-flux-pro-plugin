<x-flux::radio
    :value="$getValue()"
    :label="$getLabel()"
    :description="$getDescription()"
    :name="$getName()"
    :checked="$getChecked() ?: null"
    :disabled="$getDisabled() ?: null"
    :icon="$getIcon()"
>{{ $getChildSchema() }}</x-flux::radio>

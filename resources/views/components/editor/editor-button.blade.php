<x-flux::editor.button
    :icon="$getIcon()"
    :icon:variant="$getIconVariant()"
    :tooltip="$getTooltip()"
    :disabled="$getDisabled() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::editor.button>

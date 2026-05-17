<x-flux::tab
    :name="$getName()"
    :icon="$getIcon()"
    :icon:trailing="$getIconTrailing()"
    :icon:variant="$getIconVariant()"
    :selected="$getSelected() ?: null"
    :action="$getAction() ?: null"
    :accent="$getAccent() ?: null"
    :size="$getSize()"
    :disabled="$getDisabled() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::tab>

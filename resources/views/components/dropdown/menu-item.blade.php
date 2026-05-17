<x-flux::menu.item
    :icon="$getIcon()"
    :icon:trailing="$getIconTrailing()"
    :icon:variant="$getIconVariant()"
    :kbd="$getKbd()"
    :suffix="$getSuffix()"
    :variant="$getVariant()"
    :disabled="$getDisabled() ?: null"
    :keep-open="$getKeepOpen() ?: null"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::menu.item>

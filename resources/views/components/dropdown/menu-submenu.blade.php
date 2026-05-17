<x-flux::menu.submenu
    :heading="$getHeading()"
    :icon="$getIcon()"
    :icon:trailing="$getIconTrailing()"
    :icon:variant="$getIconVariant()"
    :keep-open="$getKeepOpen() ?: null"
>
    {{ $getChildSchema() }}
</x-flux::menu.submenu>

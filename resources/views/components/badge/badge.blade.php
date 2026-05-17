<flux:badge
    :color="$getColor()"
    :size="$getSize()"
    :rounded="$getRounded() ?: null"
    :variant="$getVariant()"
    :icon="$getIcon()"
    :icon:trailing="$getIconTrailing()"
    :icon:variant="$getIconVariant()"
    :as="$getElement()"
    :inset="$getInset()"
>{{ $getText() }}{{ $getChildSchema() }}</flux:badge>

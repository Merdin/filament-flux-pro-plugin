<x-flux::tooltip
    :content="$getContent()"
    :position="$getPosition()"
    :align="$getAlign()"
    :disabled="$getDisabled() ?: null"
    :gap="$getGap()"
    :offset="$getOffset()"
    :toggleable="$getToggleable() ?: null"
    :interactive="$getInteractive() ?: null"
    :kbd="$getKbd()"
>
    {{ $getChildSchema() }}
</x-flux::tooltip>

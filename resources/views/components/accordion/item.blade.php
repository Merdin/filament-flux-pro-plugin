<flux:accordion.item
    :heading="$getHeading()"
    :expanded="$getExpanded() ?: null"
    :disabled="$getDisabled() ?: null"
>
    <flux:accordion.content>
        {{ $getChildSchema() }}
    </flux:accordion.content>
</flux:accordion.item>

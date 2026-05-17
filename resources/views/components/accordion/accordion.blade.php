<flux:accordion
    :variant="$getVariant()"
    :transition="$getTransition() ?: null"
    :exclusive="$getExclusive() ?: null"
>
    {{ $getChildSchema() }}
</flux:accordion>

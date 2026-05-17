<x-flux::timeline
    :horizontal="$getHorizontal() ?: null"
    :align="$getAlign()"
    :size="$getSize()"
>
    {{ $getChildSchema() }}
</x-flux::timeline>

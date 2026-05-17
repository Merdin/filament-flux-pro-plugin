<x-flux::menu.radio.group
    :value="$getValue()"
    :keep-open="$getKeepOpen() ?: null"
>
    {{ $getChildSchema() }}
</x-flux::menu.radio.group>

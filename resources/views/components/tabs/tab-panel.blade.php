<x-flux::tab.panel
    :name="$getName()"
    :selected="$getSelected() ?: null"
>
    {{ $getChildSchema() }}
</x-flux::tab.panel>

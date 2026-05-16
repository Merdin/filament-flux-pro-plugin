<x-flux::sidebar.item :icon="$getIcon()" :href="$getHref()" :current="$getCurrent()" :badge="$getBadge()">
    {{ $getLabel() }}
</x-flux::sidebar.item>

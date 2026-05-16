<x-flux::navbar.item :icon="$getIcon()" :href="$getHref()" :current="$getCurrent()" :badge="$getBadge()" :class="$getExtraAttributeBag()->get('class')">
    {{ $getLabel() }}
</x-flux::navbar.item>

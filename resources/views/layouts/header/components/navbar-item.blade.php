<flux:navbar.item
    {{ $getExtraAttributeBag() }}
    :icon="$getIcon()"
    :href="$getHref()"
    :current="$getCurrent()"
    :badge="$getBadge()"
>
    {{ $getLabel() }}
</flux:navbar.item>

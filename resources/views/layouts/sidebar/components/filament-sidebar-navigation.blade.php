<x-flux::sidebar.nav>
    @foreach ($getNavigation() as $group)
        @php
            $groupLabel = $group->getLabel();
            $groupItems = $group->getItems();
        @endphp

        @if ($groupLabel)
            <x-flux::sidebar.group :heading="$groupLabel" expandable :expanded="$group->isActive()">
                @foreach ($groupItems as $item)
                    @if ($item->isVisible())
                        <x-flux::sidebar.item
                            :icon="$resolveItemIcon($item)"
                            :href="$item->getUrl()"
                            :current="$item->isActive()"
                            :badge="$item->getBadge()"
                        >
                            {{ $item->getLabel() }}
                        </x-flux::sidebar.item>

                        @foreach ($item->getChildItems() as $child)
                            @if ($child->isVisible())
                                <x-flux::sidebar.item
                                    :icon="$resolveItemIcon($child)"
                                    :href="$child->getUrl()"
                                    :current="$child->isActive()"
                                    :badge="$child->getBadge()"
                                    class="pl-4"
                                >
                                    {{ $child->getLabel() }}
                                </x-flux::sidebar.item>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </x-flux::sidebar.group>
        @else
            @foreach ($groupItems as $item)
                @if ($item->isVisible())
                    <x-flux::sidebar.item
                        :icon="$resolveItemIcon($item)"
                        :href="$item->getUrl()"
                        :current="$item->isActive()"
                        :badge="$item->getBadge()"
                    >
                        {{ $item->getLabel() }}
                    </x-flux::sidebar.item>

                    @foreach ($item->getChildItems() as $child)
                        @if ($child->isVisible())
                            <x-flux::sidebar.item
                                :icon="$resolveItemIcon($child)"
                                :href="$child->getUrl()"
                                :current="$child->isActive()"
                                :badge="$child->getBadge()"
                                class="pl-4"
                            >
                                {{ $child->getLabel() }}
                            </x-flux::sidebar.item>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif
    @endforeach
</x-flux::sidebar.nav>

<div class="hidden lg:contents">
    @foreach ($getNavigation() as $group)
        @php
            $groupLabel = $group->getLabel();
            $groupIcon = $resolveIcon($group->getIcon());
            $groupItems = $group->getItems();
        @endphp

        @if ($groupLabel)
            <x-flux::dropdown>
                <x-flux::navbar.item :icon="$groupIcon" icon:trailing="chevron-down" :current="$group->isActive()">
                    {{ $groupLabel }}
                </x-flux::navbar.item>

                <x-flux::navmenu>
                    @foreach ($groupItems as $item)
                        @if ($item->isVisible())
                            @php
                                $childItems = $item->getChildItems();
                            @endphp

                            <x-flux::navmenu.item :icon="$resolveItemIcon($item)" :href="$item->getUrl()" :target="$item->shouldOpenUrlInNewTab() ? '_blank' : null" :current="$item->isActive()"
                                :badge="$item->getBadge()">
                                {{ $item->getLabel() }}
                            </x-flux::navmenu.item>

                            @foreach ($childItems as $child)
                                @if ($child->isVisible())
                                    <x-flux::navmenu.item :icon="$resolveItemIcon($child)" :href="$child->getUrl()" :target="$child->shouldOpenUrlInNewTab() ? '_blank' : null"
                                        :current="$child->isActive()" :badge="$child->getBadge()" class="pl-8">
                                        {{ $child->getLabel() }}
                                    </x-flux::navmenu.item>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </x-flux::navmenu>
            </x-flux::dropdown>
        @else
            @foreach ($groupItems as $item)
                @if ($item->isVisible())
                    <x-flux::navbar.item :icon="$resolveItemIcon($item)" :href="$item->getUrl()" :target="$item->shouldOpenUrlInNewTab() ? '_blank' : null" :current="$item->isActive()"
                        :badge="$item->getBadge()">
                        {{ $item->getLabel() }}
                    </x-flux::navbar.item>
                @endif
            @endforeach
        @endif
    @endforeach
</div>

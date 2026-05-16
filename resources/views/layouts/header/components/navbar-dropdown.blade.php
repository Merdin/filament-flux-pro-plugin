<x-flux::dropdown :class="$getExtraAttributeBag()->get('class')">
    @if ($getTrailingIcon())
        <x-flux::navbar.item icon:trailing="{{ $getTrailingIcon() }}">
            {{ $getLabel() }}
        </x-flux::navbar.item>
    @else
        <x-flux::navbar.item>
            {{ $getLabel() }}
        </x-flux::navbar.item>
    @endif

    <x-flux::navmenu>
        @foreach ($getItems() as $item)
            {!! $item->toHtml() !!}
        @endforeach
    </x-flux::navmenu>
</x-flux::dropdown>

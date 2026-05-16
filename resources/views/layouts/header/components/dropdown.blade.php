<x-flux::dropdown :position="$getPosition()" :align="$getAlign()">
    {!! $getTrigger()?->toHtml() !!}

    <x-flux::menu>
        @foreach ($getItems() as $item)
            {!! $item->toHtml() !!}
        @endforeach
    </x-flux::menu>
</x-flux::dropdown>

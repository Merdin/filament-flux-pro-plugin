<x-flux::navbar class="{{ $getClass() }}">
    @foreach ($getItems() as $item)
        {!! $item->toHtml() !!}
    @endforeach
</x-flux::navbar>

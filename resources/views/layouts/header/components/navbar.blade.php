<flux:navbar class="{{ $getClass() }}">
    @foreach ($getItems() as $item)
        {!! $item->toHtml() !!}
    @endforeach
</flux:navbar>

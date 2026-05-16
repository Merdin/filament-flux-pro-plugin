<x-flux::sidebar.nav>
@foreach ($getItems() as $item)
    {!! $item->toHtml() !!}
@endforeach
</x-flux::sidebar.nav>

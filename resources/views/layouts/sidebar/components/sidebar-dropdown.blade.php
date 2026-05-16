<x-flux::dropdown :position="$getPosition()" :align="$getAlign()" :class="$getExtraAttributeBag()->get('class')">
@if ($getProfile())
    {!! $getProfile()->toHtml() !!}
@endif

<x-flux::menu>
@foreach ($getItems() as $item)
    {!! $item->toHtml() !!}
@endforeach
</x-flux::menu>
</x-flux::dropdown>

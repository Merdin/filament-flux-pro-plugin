<x-flux::sidebar.group
:heading="$getHeading()"
:expandable="$getExpandable()"
:class="$getClass()"
>
@foreach ($getItems() as $item)
    {!! $item->toHtml() !!}
@endforeach
</x-flux::sidebar.group>

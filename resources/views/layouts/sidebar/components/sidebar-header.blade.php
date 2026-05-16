<x-flux::sidebar.header>
@if ($getBrand())
    {!! $getBrand()->toHtml() !!}
@endif

@if ($getCollapse())
    {!! $getCollapse()->toHtml() !!}
@endif
</x-flux::sidebar.header>

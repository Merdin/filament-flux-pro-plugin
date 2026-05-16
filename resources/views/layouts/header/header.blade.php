<flux:header {{ $attributes }}>
    @foreach ($getComponents() as $component)
        {!! $component->toHtml() !!}
    @endforeach
</flux:header>

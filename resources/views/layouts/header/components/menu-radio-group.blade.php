<x-flux::menu.radio.group>
    @foreach ($getRadios() as $radio)
        {!! $radio->toHtml() !!}
    @endforeach
</x-flux::menu.radio.group>

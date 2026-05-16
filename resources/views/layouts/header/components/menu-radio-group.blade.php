<flux:menu.radio.group>
    @foreach ($getRadios() as $radio)
        {!! $radio->toHtml() !!}
    @endforeach
</flux:menu.radio.group>

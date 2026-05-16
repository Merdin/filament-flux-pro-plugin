<flux:dropdown :position="$getPosition()" :align="$getAlign()">
    {!! $getTrigger()?->toHtml() !!}

    <flux:menu>
        @foreach ($getItems() as $item)
            {!! $item->toHtml() !!}
        @endforeach
    </flux:menu>
</flux:dropdown>

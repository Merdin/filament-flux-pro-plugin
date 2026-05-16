<flux:dropdown {{ $getExtraAttributeBag() }}>
    <flux:navbar.item @if($getTrailingIcon()) icon:trailing="{{ $getTrailingIcon() }}" @endif>
        {{ $getLabel() }}
    </flux:navbar.item>

    <flux:navmenu>
        @foreach ($getItems() as $item)
            {!! $item->toHtml() !!}
        @endforeach
    </flux:navmenu>
</flux:dropdown>

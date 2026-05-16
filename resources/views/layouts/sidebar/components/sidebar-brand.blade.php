@if ($getDarkLogo())
    <x-flux::sidebar.brand :href="$getHref()" :logo="$getLogo()" logo:dark="{{ $getDarkLogo() }}" :name="$getName()" />
@else
    <x-flux::sidebar.brand :href="$getHref()" :logo="$getLogo()" :name="$getName()" />
@endif

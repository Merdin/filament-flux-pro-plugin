@if ($getDarkLogo())
    <x-flux::brand :href="$getHref()" :logo="$getLogo()" :name="$getName()" class="dark:hidden" />
    <x-flux::brand :href="$getHref()" :logo="$getDarkLogo()" :name="$getName()" class="hidden dark:flex" />
@else
    <x-flux::brand :href="$getHref()" :logo="$getLogo()" :name="$getName()" />
@endif

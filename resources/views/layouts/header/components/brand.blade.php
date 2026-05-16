@if ($getDarkLogo())
    <flux:brand :href="$getHref()" :logo="$getLogo()" :name="$getName()" class="dark:hidden" />
    <flux:brand :href="$getHref()" :logo="$getDarkLogo()" :name="$getName()" class="hidden dark:flex" />
@else
    <flux:brand :href="$getHref()" :logo="$getLogo()" :name="$getName()" />
@endif

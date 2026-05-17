<x-flux::table
    :paginate="$getPaginate()"
    :pagination:scroll-to="$getPaginationScrollTo() ?: null"
    :container:class="$getContainerClass()"
>
    {{ $getChildSchema() }}
</x-flux::table>

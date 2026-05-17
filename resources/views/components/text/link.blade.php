<x-flux::link
    :href="$getHref()"
    :variant="$getVariant()"
    :external="$getExternal() ?: null"
    :as="$getAs()"
>{{ $getText() }}{{ $getChildSchema() }}</x-flux::link>

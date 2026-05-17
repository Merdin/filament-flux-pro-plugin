<x-flux::chart.axis
    :axis="$getAxis()"
    :field="$getField()"
    :format="$getFormat()"
    :scale="$getScale()"
    :position="$getPosition()"
    :tick-count="$getTickCount()"
    :tick-start="$getTickStart()"
    :tick-end="$getTickEnd()"
    :tick-values="$getTickValues()"
    :tick-prefix="$getTickPrefix()"
    :tick-suffix="$getTickSuffix()"
>
    {{ $getChildSchema() }}
</x-flux::chart.axis>

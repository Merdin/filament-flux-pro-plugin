<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::slider
            x-model="state"
            :range="$getRange() ?: null"
            :min="$getMin()"
            :max="$getMax()"
            :step="$getStep()"
            :big-step="$getBigStep()"
            :min-steps-between="$getMinStepsBetween()"
            :track:class="$getTrackClass()"
            :thumb:class="$getThumbClass()"
            :disabled="$isDisabled() ?: null"
        >{{ $getChildSchema() }}</x-flux::slider>
    </div>
</x-dynamic-component>

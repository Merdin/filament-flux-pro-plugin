<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    @php
        $defaultFocusDate = $getDefaultFocusedDate() ?? Carbon\Carbon::now()->format('Y-m-d');
    @endphp

    <div x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }} }">
        <x-flux::date-picker x-model="state" weekNumbers="{{ $getWithWeekNumbers() }}" fixed-weeks with-today
            selectable-header open-to="{{ $defaultFocusDate }}" locale="nl" />
    </div>

</x-dynamic-component>

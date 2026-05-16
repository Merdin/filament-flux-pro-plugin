<div style="display: contents">
    <x-flux::sidebar sticky collapsible
        class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        @foreach ($components as $component)
            {!! $component->toHtml() !!}
        @endforeach
    </x-flux::sidebar>
</div>

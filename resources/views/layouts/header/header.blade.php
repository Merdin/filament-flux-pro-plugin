<x-flux::header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    @foreach ($components as $component)
        {!! $component->toHtml() !!}
    @endforeach
</x-flux::header>

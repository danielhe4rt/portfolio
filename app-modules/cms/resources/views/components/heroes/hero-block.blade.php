@props([
    'title',
    'subtitle'
])

<div class="flex flex-col gap-2 text-red-300">
    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>
</div>

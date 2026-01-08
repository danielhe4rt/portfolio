@props(['image'])

<div class="my-8">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" alt="Image Block"
        class="w-full h-auto rounded-lg shadow-md">
</div>
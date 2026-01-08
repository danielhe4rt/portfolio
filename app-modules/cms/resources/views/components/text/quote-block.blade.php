@props(['quote', 'author'])

<blockquote class="p-4 my-4 border-l-4 border-gray-300 bg-gray-50">
    <p class="italic font-medium leading-relaxed text-gray-900">"{{ $quote }}"</p>
    @if($author)
        <footer class="mt-2 text-sm text-gray-600">— {{ $author }}</footer>
    @endif
</blockquote>
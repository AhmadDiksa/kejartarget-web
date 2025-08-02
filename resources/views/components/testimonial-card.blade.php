@props(['name', 'quote'])
<div class="bg-gray-100 p-8 rounded-lg shadow-lg">
    <p class="text-gray-600 italic">"{{ $quote }}"</p>
    <p class="mt-4 text-right font-bold text-gray-800">- {{ $name }}</p>
</div>
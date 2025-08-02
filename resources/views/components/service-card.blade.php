@props(['title', 'description'])
<div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
    <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $title }}</h3>
    <p class="text-gray-600">{{ $description }}</p>
</div>
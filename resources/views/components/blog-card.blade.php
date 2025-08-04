
@props(['image', 'category', 'title', 'date', 'excerpt', 'url'])

<div class="group bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-2">
    <div class="relative overflow-hidden"> {{-- Tambahkan overflow-hidden di sini --}}
        <a href="{{ $url }}">
            {{-- 
              PERUBAHAN DI SINI:
              - transition-transform: Menganimasikan perubahan ukuran (scale).
              - group-hover:scale-105: Memperbesar gambar 5% saat parent (group) di-hover.
            --}}
            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" src="{{ $image }}" alt="{{ $title }}">
        </a>
        <a href="#" class="absolute bottom-4 left-4 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded hover:bg-green-700 transition-colors">
            {{ $category }}
        </a>
    </div>
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="font-bold text-lg text-gray-900 mb-2">
            <a href="{{ $url }}" class="hover:text-green-600 transition-colors">{{ $title }}</a>
        </h3>
        <p class="text-xs text-gray-500 mb-4">{{ $date }}</p>
        <p class="text-gray-600 text-sm flex-grow mb-4">
            {{ $excerpt }}
        </p>
        <a href="{{ $url }}" class="text-green-600 hover:text-green-800 font-semibold text-sm flex items-center gap-2">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
        </a>
    </div>
</div>
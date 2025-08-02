{{-- resources/views/components/feature-card.blade.php --}}
@props(['image', 'title', 'description'])

<div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center text-center h-full transition-all duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
    
    <!-- Gambar Ilustrasi -->
    <img src="{{ $image }}" alt="{{ $title }}" class="h-40 mb-6 object-contain">
    
    <div class="flex flex-col flex-grow">
        <!-- Judul Fitur -->
        <h3 class="font-bold text-xl text-teal-800 mb-3">{{ $title }}</h3>
        
        <!-- Deskripsi Fitur -->
        <p class="text-gray-500 mb-6 flex-grow">
            {{ $description }}
        </p>
    </div>
    
    <!-- Tombol "More" -->
    <a href="#" class="bg-teal-600 text-white font-bold text-sm px-8 py-3 rounded-full hover:bg-teal-700 transition-colors">
        MORE
    </a>

</div>
{{-- resources/views/components/service-icon-card.blade.php --}}
@props(['icon', 'title'])

<div class="text-center flex flex-col items-center p-4 rounded-lg transition-all duration-300 ease-in-out hover:bg-teal-50 hover:shadow-xl hover:-translate-y-2">
    <!-- Ikon Layanan -->
    <img src="{{ $icon }}" alt="{{ $title }}" class="h-16 w-16 mb-4 object-contain">
    
    <!-- Judul Layanan -->
    <h3 class="font-bold text-gray-800 h-12 flex items-center">
        {!! $title !!} {{-- Menggunakan {!! !!} agar bisa memproses <br> --}}
    </h3>
    
    <!-- Link Kontak -->
    <a href="#" class="mt-2 text-sm text-green-700 hover:text-green-900 font-semibold flex items-center gap-2">
        Contact Us
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>
    </a>
</div>
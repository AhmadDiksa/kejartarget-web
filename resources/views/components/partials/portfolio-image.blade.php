<a href="#" class="relative block group">
    <img src="{{ $image }}" alt="{{ $title }}" class="rounded-lg shadow-xl w-full h-full object-cover">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/20 rounded-lg group-hover:bg-black/40 transition-colors duration-300"></div>
    <!-- Tombol Play -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="bg-white/30 backdrop-blur-sm p-4 rounded-full group-hover:bg-white/50 transition-colors duration-300 transform group-hover:scale-110">
            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
        </div>
    </div>
</a>
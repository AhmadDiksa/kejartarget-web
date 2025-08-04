{{-- resources/views/components/team-member-card.blade.php --}}
@props(['image', 'name', 'position', 'description', 'socials' => []])

<div class="bg-white rounded-lg border border-gray-200 p-6 text-center h-full flex flex-col transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
    <!-- Foto Anggota Tim -->
    <div class="mb-5">
        <img class="w-32 h-32 rounded-full mx-auto object-cover" src="{{ $image }}" alt="Foto {{ $name }}">
    </div>

    <!-- Info Teks -->
    <div class="flex-grow">
        {{-- Posisi --}}
        <p class="text-gray-500 text-xs font-semibold tracking-wider uppercase mb-1">{{ $position }}</p>
        
        {{-- Nama --}}
        <h3 class="font-bold text-xl text-green-600 mb-3">{{ $name }}</h3>
        
        {{-- Deskripsi --}}
        <p class="text-sm text-gray-600 leading-relaxed">
            {{ $description }}
        </p>
    </div>

    <!-- Ikon Media Sosial -->
    <div class="mt-5 pt-5 border-t border-gray-100">
        <div class="flex items-center justify-center space-x-3">
            @if(isset($socials['facebook']))
            <a href="{{ $socials['facebook'] }}" class="w-8 h-8 rounded-full flex items-center justify-center bg-green-100 text-green-600 hover:bg-green-600 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
            </a>
            @endif

            @if(isset($socials['twitter']))
            <a href="{{ $socials['twitter'] }}" class="w-8 h-8 rounded-full flex items-center justify-center bg-green-100 text-green-600 hover:bg-green-600 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.295 1.616 4.418 3.963 4.891-.749.204-1.538.223-2.305.084.646 1.952 2.595 3.246 4.863 3.282-2.015 1.574-4.544 2.392-7.149 2.083 2.295 1.574 5.074 2.488 8.046 2.488 9.857 0 15.255-8.128 14.956-15.54z"/></svg>
            </a>
            @endif

            @if(isset($socials['instagram']))
            <a href="{{ $socials['instagram'] }}" class="w-8 h-8 rounded-full flex items-center justify-center bg-green-100 text-green-600 hover:bg-green-600 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.059 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.44-1.441-1.44z"/></svg>
            </a>
            @endif
        </div>
    </div>
</div>
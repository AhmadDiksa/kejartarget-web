{{-- resources/views/components/stat-card.blade.php --}}
@props(['iconUrl', 'target', 'suffix' => '', 'label'])

<div class="text-center">
    <!-- Ikon (Sekarang menggunakan <img>) -->
    <div class="h-16 flex items-center justify-center mx-auto mb-4">
        <img src="{{ $iconUrl }}" alt="{{ $label }} icon" class="w-14 h-14 object-contain">
    </div>
    
    <!-- Angka Statistik -->
    <div class="text-4xl lg:text-5xl font-bold text-white mb-2">
        <span class="animated-counter" data-target="{{ $target }}" data-suffix="{{ $suffix }}">0</span>
    </div>

    <!-- Label -->
    <p class="text-gray-400">{{ $label }}</p>
</div>
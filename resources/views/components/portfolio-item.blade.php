{{-- resources/views/components/portfolio-item.blade.php --}}
@props([
    'image', 
    'title', 
    'client', 
    'category', 
    'venue', 
    'participants', 
    'layout' => 'left' // Default layout adalah gambar di kiri
])

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
    
    @if ($layout === 'right')
        <!-- Layout Teks Kiri, Gambar Kanan -->
        <div data-aos="fade-right" class="lg:order-first">@include('components.partials.portfolio-text')</div>
        <div data-aos="fade-left">@include('components.partials.portfolio-image')</div>
    @else
        <!-- Layout Gambar Kiri, Teks Kanan (Default) -->
        <div data-aos="fade-right">@include('components.partials.portfolio-image')</div>
        <div data-aos="fade-left">@include('components.partials.portfolio-text')</div>
    @endif

</div>
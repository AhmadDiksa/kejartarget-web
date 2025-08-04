@extends('layouts.app')

@section('content')

{{-- Hero Section untuk Halaman Blog --}}
<section class="relative h-60 flex items-center justify-center text-white">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" 
             alt="Blog Background" 
             class="w-full h-full object-cover">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>
    <!-- Konten Hero -->
    <div class="relative z-10 text-center">
        <h1 class="text-5xl font-bold">BLOG</h1>
        <nav class="text-sm mt-2">
            <a href="/" class="hover:text-green-300">Home</a>
            <span class="mx-2">></span>
            <span>Our Blog</span>
        </nav>
    </div>
</section>

{{-- Section Konten Blog --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Melakukan perulangan untuk setiap post dari controller --}}
            @foreach ($posts as $post)
                <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <x-blog-card 
                        :image="$post['image']"
                        :category="$post['category']"
                        :title="$post['title']"
                        :date="$post['date']"
                        :excerpt="$post['excerpt']"
                        :url="$post['url']"
                    />
                </div>
            @endforeach

        </div>

        {{-- Pagination (opsional, bisa ditambahkan nanti) --}}
        {{-- <div class="mt-16 text-center">
            ...
        </div> --}}
    </div>
</section>

@endsection
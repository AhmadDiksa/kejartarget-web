@extends('layouts.app')

@section('content')

{{-- Hero Section untuk Halaman Tim --}}
<section class="relative h-60 flex items-center justify-center text-white">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop" 
             alt="Team collaborating in an office" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="relative z-10 text-center">
        <h1 class="text-5xl font-bold">Our Team</h1>
        <nav class="text-sm mt-2"><a href="/" class="hover:text-green-300">Home</a><span class="mx-2">></span><span>Our Team</span></nav>
    </div>
</section>

{{-- Section Konten Tim --}}
<section class="py-20 bg-teal-50"> {{-- Warna latar diubah agar senada --}}
    <div class="container mx-auto px-6">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-teal-900">Meet Our Creative Team</h2>
            <p data-aos="fade-up" data-aos-delay="100" class="text-gray-600 mt-4">
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        {{-- Grid diubah menjadi 3 kolom di layar besar --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach ($teamMembers as $member)
                <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <x-team-member-card 
                        :image="$member['image']"
                        :name="$member['name']"
                        :position="$member['position']"
                        :description="$member['description']"
                        :socials="$member['socials']"
                    />
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
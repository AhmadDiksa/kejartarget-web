@extends('layouts.app')

@section('content')

{{-- HERO SECTION START --}}
<section class="relative h-[80vh] flex items-center justify-center text-white">
    
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D 
             alt="Audience in a conference hall" 
             class="w-full h-full object-cover">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-70"></div>
    </div>

    <!-- Main Content (Centered) -->
    <div class="relative z-10 container mx-auto px-6 text-center flex flex-col items-center">
        
        <h1 class="text-4xl lg:text-6xl font-bold leading-tight">
            Let's Create Your Super
            <br>
            <span id="dynamic-word" class="text-green-400 transition-opacity duration-150 ease-in-out">Meeting</span> With KejarTarget
        </h1>

        <p class="mt-6 text-gray-300 max-w-2xl">
            KejarTarget hadir sebagai Event Organizer (EO) Terbaik di Indonesia, dengan perwakilan di Jakarta, Bali, Yogyakarta, dan Surabaya. Berpengalaman lebih dari 7 tahun merencakan dan melaksanakan event perusahaan Nasional, Multinasional, Kementerian, & BUMN.
        </p>

        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="#" class="w-full sm:w-auto bg-green-500 text-white px-8 py-3 rounded-md font-semibold hover:bg-green-600 transition-colors">
                FREE EVENT CONSULTATION
            </a>
            <a href="#" class="w-full sm:w-auto flex items-center justify-center gap-3 font-semibold hover:text-green-400 transition-colors">
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                </svg>
                <span>WATCH INTRO</span>
            </a>
        </div>
    </div>

</section>
{{-- HERO SECTION END --}}

<!-- WhatsApp Button -->
<a href="https://wa.me/6281234567890?text=Halo%20Eventify,%20saya%20tertarik%20untuk%20konsultasi%20mengenai%20event." 
   target="_blank" 
   rel="noopener noreferrer"
   class="fixed bottom-6 right-6 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition-colors z-20">
    <img src="{{ asset('images/whatsapp-logo.png') }}" alt="Hubungi via WhatsApp" class="w-9 h-9">
</a>
<!-- WhatsApp Button End -->
 
{{-- Services Section (Data Dummy) --}}
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Layanan Kami</h2>
        <p class="text-center text-gray-600 mb-12">Kami menawarkan berbagai layanan untuk memastikan acara Anda sukses.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Data dummy di-hardcode di sini --}}
            <x-service-card title="Manajemen Acara" description="Perencanaan dan pelaksanaan acara dari awal hingga akhir." />
            <x-service-card title="Acara Perusahaan" description="Konferensi, seminar, dan acara perusahaan lainnya." />
            <x-service-card title="Pernikahan Impian" description="Wujudkan pernikahan impian Anda dengan perencanaan detail kami." />
        </div>
    </div>
</section>

{{-- Portfolio Section (Data Dummy) --}}
<section id="portfolio" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Portfolio Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Data dummy portfolio di-hardcode di sini --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=600" alt="Corporate Event" class="w-full h-64 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=600" alt="Conference" class="w-full h-64 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=600" alt="Music Festival" class="w-full h-64 object-cover">
            </div>
        </div>
    </div>
</section>

{{-- Testimonials Section (Data Dummy) --}}
<section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Apa Kata Mereka</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Data dummy testimoni di-hardcode di sini --}}
            <x-testimonial-card name="Andi Wijaya" quote="Tim yang sangat profesional dan kreatif. Acara kami berjalan dengan sempurna!" />
            <x-testimonial-card name="Siti Lestari" quote="Layanan yang luar biasa dari awal sampai akhir. Mereka benar-benar memahami visi kami." />
            <x-testimonial-card name="Budi Santoso" quote="Sangat direkomendasikan! Akan bekerja sama lagi di masa depan untuk acara kami selanjutnya." />
        </div>
    </div>
</section>

{{-- Contact Section (Statis) --}}
<section id="contact" class="py-20 bg-gray-800 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
        <p class="mb-8">Hubungi kami untuk konsultasi gratis dan mari wujudkan acara Anda.</p>
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full">Kontak Sekarang</a>
    </div>
</section>

@endsection
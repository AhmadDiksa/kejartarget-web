
@extends('layouts.app')

@section('content')

{{-- HERO SECTION START --}}
<section class="relative h-[80vh] flex items-center justify-center text-white overflow-hidden">
    
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
             alt="Audience in a conference hall" 
             class="w-full h-full object-cover">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-70"></div>
    </div>

    <!-- Main Content (Centered) -->
    <div class="relative z-10 container mx-auto px-6 text-center flex flex-col items-center">
        
        <h1 data-aos="fade-up" class="text-4xl lg:text-6xl font-bold leading-tight">
            Let's Create Your Super
            <br>
            <span id="dynamic-word" class="text-green-400 transition-opacity duration-150 ease-in-out">Meeting</span> With KejarTarget
        </h1>

        <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-gray-300 max-w-2xl">
            KejarTarget hadir sebagai Event Organizer (EO) Terbaik di Indonesia, dengan perwakilan di Jakarta, Bali, Yogyakarta, dan Surabaya. Berpengalaman lebih dari 7 tahun merencakan dan melaksanakan event perusahaan Nasional, Multinasional, Kementerian, & BUMN.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-6">
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

<!-- {{-- Pembungkus untuk mencegah scrollbar horizontal saat animasi --}}
<div class="overflow-x-hidden"> -->

    {{-- About Us Section Start --}}
    <section id="about-us" class="py-24 bg-teal-50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-16 items-center">
                
                <!-- Kolom Teks (Kiri) -->
                <div class="lg:col-span-2" data-aos="fade-right">
                    <h2 class="text-5xl lg:text-6xl font-bold text-teal-900 leading-tight">
                        Elevate Your
                        <br>
                        <span class="text-green-600">Events.</span>
                    </h2>
                    <p class="mt-6 text-gray-600 leading-relaxed">
                        Kami adalah Event Organizer dan spesialis MICE pemenang penghargaan. Dibuat dari ide-ide premium dan niat murni untuk membuat momen Anda tak terlupakan.
                    </p>

                    <!-- Ikon Fitur -->
                    <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-10">
                        <div class="flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.311a7.5 7.5 0 01-7.5 0c-1.255 0-2.443.29-3.5.832" /><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75a3 3 0 116 0 3 3 0 01-6 0z" /></svg>
                            <span class="font-semibold text-gray-800">Creative Concepts</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="font-semibold text-gray-800">Precision Planning</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg>
                            <span class="font-semibold text-gray-800">Seamless Execution</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" /></svg>
                            <span class="font-semibold text-gray-800">Memorable Experience</span>
                        </div>
                    </div>

                    <a href="#" class="inline-block mt-12 bg-teal-600 text-white font-bold px-10 py-3 hover:bg-teal-700 transition-colors">
                        LEARN MORE
                    </a>
                </div>

                <!-- Kolom Gambar (Kanan) -->
                <div class="lg:col-span-3" data-aos="zoom-in-left" data-aos-delay="200">
                    <div class="relative p-8">
                        <!-- Ornamen SVG di Latar Belakang -->
                        <div class="absolute -inset-2 z-0">
                        <svg class="w-full h-full text-teal-100" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 200 120">
                            <path d="M199,60 A70,59 0,1,1 1,60 A70,59 0,1,1 199,60" stroke-dasharray="5 5"></path>
                        </svg>
                        </div>

                        <!-- Gambar Utama -->
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Team creating an amazing event" class="rounded-xl shadow-2xl w-full z-10 relative">
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- About Us Section End --}}

    {{-- Services Section Start --}}
    <section id="services" class="py-20 bg-teal-50">
        <div class="container mx-auto px-6">

            <!-- Judul Section -->
            <div class="text-center mb-12">
                <p data-aos="fade-up" class="font-semibold text-teal-600 tracking-widest mb-2">Our Services</p>
                <h2 data-aos="fade-up" data-aos-delay="100" class="text-4xl font-bold text-teal-900">Our Features & Services.</h2>
            </div>

            <!-- Grid Fitur -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div data-aos="fade-up" data-aos-delay="200">
                    <x-feature-card 
                        image="https://img.icons8.com/?size=100&id=381&format=png&color=16a34a" 
                        title="Music Events" 
                        description="Pretium lectus quam id leo in vitae turpis. Mattis pellentesque id nibh tortor id." 
                    />
                </div>
                
                <div data-aos="fade-up" data-aos-delay="300">
                    <x-feature-card 
                        image="https://img.icons8.com/?size=100&id=25843&format=png&color=16a34a" 
                        title="Weadings" 
                        description="Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Risus feugiat." 
                    />
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <x-feature-card 
                        image="https://img.icons8.com/?size=100&id=20318&format=png&color=16a34a" 
                        title="Corporate Events" 
                        description="Nisl purus in mollis nunc sed id semper. Rhoncus aenean vel elit scelerisque mauris." 
                    />
                </div>

            </div>

        </div>
    </section>
    {{-- Features Section End --}}

    {{-- Statistics Section Start --}}
<section id="statistics" class="py-20 bg-gradient-to-r from-gray-900 via-green to-black">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            
            <div data-aos="fade-up">
                <x-stat-card 
                    iconUrl="https://img.icons8.com/?size=100&id=25391&format=png&color=16a34a"
                    target="125" 
                    suffix=" +" 
                    label="Projects Done"
                />
            </div>

            <div data-aos="fade-up" data-aos-delay="150">
                <x-stat-card 
                    iconUrl="https://img.icons8.com/?size=100&id=25565&format=png&color=16a34a"
                    target="1500" 
                    suffix=" +" 
                    label="Customer Happy"
                />
            </div>
            
            <div data-aos="fade-up" data-aos-delay="300">
                <x-stat-card 
                    iconUrl="https://img.icons8.com/?size=100&id=1136&format=png&color=16a34a"
                    target="100" 
                    suffix=" %" 
                    label="Satisfactory Rate"
                />
            </div>

            <div data-aos="fade-up" data-aos-delay="450">
                <x-stat-card 
                    iconUrl="https://img.icons8.com/?size=100&id=40390&format=png&color=16a34a"
                    target="99" 
                    label="Team Experts"
                />
            </div>

        </div>
    </div>
</section>
{{-- Statistics Section End --}}

{{-- Portfolio Section Start --}}
<section id="portfolio" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Judul Section -->
        <div class="text-center max-w-3xl mx-auto">
            <p data-aos="fade-up" class="font-semibold text-green-600 mb-2">From Our Happy Customers</p>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-4xl font-bold text-gray-900 mb-4">Portfolio</h2>
            <p data-aos="fade-up" data-aos-delay="200" class="text-gray-600">
                Mulai perjalanan Event yang tak terlupakan bersama Event Organizer (EO) Terbaik di Indonesia, KejarTarget. Portofolio kami adalah bukti nyata dari dedikasi, kreativitas, dan semangat yang kami hadirkan dalam setiap acara.
            </p>
        </div>

        <!-- Daftar Item Portofolio -->
        <div class="mt-16 space-y-24">
            
            {{-- Item 1: Gambar Kiri --}}
            <x-portfolio-item 
                image="https://images.unsplash.com/photo-1531058020387-3be344556be6?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                title="Vertiv Co Ltd Singapore<br>Asia Channel Summit 2023"
                client="Vertiv Co Ltd"
                category="International"
                venue="Grand Hyatt, Nusa Dua, Bali"
                participants="500 Pax"
                layout="left"
            />
            
            {{-- Item 2: Gambar Kanan (Layout Berganti) --}}
            <x-portfolio-item 
                image="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                title="KEMENPAREKRAF RI<br>Hari Ekonomi Kreatif Nasional"
                client="KEMENPAREKRAF RI"
                category="Government"
                venue="Gedung Sapta Pesona"
                participants="300 Pax"
                layout="right"
            />

            {{-- Item 3: Gambar Kiri --}}
            <x-portfolio-item 
                image="https://plus.unsplash.com/premium_photo-1663089174939-5870e2e8d62e?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                title="MIRAE ASSET SEKURITAS<br>10 Years Anniversary"
                client="Mirae Asset Sekuritas"
                category="Corporate"
                venue="Aston Sentul"
                participants="550 Pax"
                layout="left"
            />

        </div>

        <!-- Tombol Show More -->
        <div class="text-center mt-20">
            <a href="#" class="bg-green-600 text-white font-bold text-sm px-8 py-4 rounded-md hover:bg-green-700 transition-colors">
                SHOW MORE HAPPY CUSTOMERS
            </a>
        </div>

    </div>
</section>
{{-- Portfolio Section End --}}

{{-- Trusted By Section Start --}}
<section id="trusted-by" class="py-20 bg-white">
    {{-- Container utama yang akan men-sentering semua isinya --}}
    <div class="container mx-auto px-6">
        
        <!-- Judul Section -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-gray-900">Dipercaya oleh Perusahaan Terbaik</h2>
            <p data-aos="fade-up" data-aos-delay="100" class="text-gray-600 mt-4">
                Kami bangga telah berkolaborasi dengan berbagai brand terkemuka di berbagai industri, membantu mereka menciptakan acara yang berdampak dan tak terlupakan.
            </p>
        </div>

        <!-- Logo Scroller (Sekarang di dalam container) -->
        <div data-aos="fade-up" data-aos-delay="200" class="scroller">
            <div class="scroller__inner flex items-center gap-16">
                
                {{-- DAFTAR LOGO ASLI --}}
                <img src="{{ asset('images\clients\gdg.png') }}" alt="Google Logo" class="h-20 max-w-none transition duration-300">
                <img src="{{ asset('images\clients\logo-kemenparekraf.png') }}" alt="Microsoft Logo" class="h-20 max-w-none transition duration-300">
                <img src="{{ asset('images\clients\microsoft.jpg') }}" alt="Spotify Logo" class="h-20 max-w-none transition duration-300">
                <img src="{{ asset('images\clients\unesa.png') }}" alt="Netflix Logo" class="h-20 max-w-none transition duration-300">
                <!-- <img src="{{ asset('images/clients/client-amazon.png') }}" alt="Amazon Logo" class="h-14 max-w-none transition duration-300">
                <img src="{{ asset('images/clients/client-airbnb.png') }}" alt="Airbnb Logo" class="h-12 max-w-none transition duration-300">
                 -->
                {{-- JavaScript akan secara otomatis menduplikasi semua logo ini ke sini --}}
            </div>
        </div>

    </div>
</section>
{{-- Trusted By Section End --}}


{{-- Testimonials Section Start --}}
<section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Kolom Teks (Kiri) -->
            <div data-aos="fade-right">
                <p class="font-semibold text-green-600 mb-2">Testimonials</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Client Says</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Sebagai Event Organizer (EO) Terbaik di Indonesia, misi kami adalah mengubah setiap acara menjadi pengalaman yang luar biasa. Namun, jangan hanya percaya kata-kata kami, dengarkan langsung dari mereka yang telah merasakan pengalaman unik bersama kami.
                </p>
                <a href="#" class="bg-green-600 text-white font-bold text-sm px-8 py-4 rounded-md hover:bg-green-700 transition-colors">
                    FREE EVENT CONSULTATION
                </a>
            </div>

            <!-- Kolom Slider (Kanan) -->
            <div data-aos="fade-left" data-aos-delay="200">
                <!-- Struktur HTML yang dibutuhkan oleh Swiper.js -->
                <div id="testimonial-slider" class="swiper">
                    <div class="swiper-wrapper">
                        
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="bg-gray-50 rounded-lg p-8">
                                <div class="flex items-center gap-6 mb-6">
                                    <img class="h-20 w-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Stanno Yudha Putra">
                                    <div class="flex text-green-500">
                                        <!-- Bintang Rating -->
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-6">This Year, Future Leader fest is becoming an icon for leadership coaching for youth. And we're glad this event is fully supported by KejarTarget. Everything runs well everyone had a good time. Good Job KejarTarget</p>
                                <strong class="text-gray-900">Stanno Yudha Putra</strong>
                                <p class="text-sm text-gray-500">Chairman of Future Leader Fest 2023</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="bg-gray-50 rounded-lg p-8">
                                <div class="flex items-center gap-6 mb-6">
                                    <img class="h-20 w-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1619545307432-9fc73f8135ff?q=80&w=464&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Siti Aisyah">
                                    <div class="flex text-green-500">
                                        {{-- Bintang Rating --}}
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-6">Kerja sama dengan KejarTarget untuk acara tahunan kami adalah keputusan terbaik. Tim mereka sangat responsif, kreatif, dan profesional. Acara berjalan lancar melebihi ekspektasi. Sangat direkomendasikan!</p>
                                <strong class="text-gray-900">Siti Aisyah</strong>
                                <p class="text-sm text-gray-500">Marketing Director, TechCorp</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="bg-gray-50 rounded-lg p-8">
                                <div class="flex items-center gap-6 mb-6">
                                    <img class="h-20 w-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1585917170055-e40d30c73414?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Budi Hartono">
                                    <div class="flex text-green-500">
                                        {{-- Bintang Rating --}}
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-6">Dari konsep hingga eksekusi, semuanya ditangani dengan sangat baik. Tim KejarTarget memastikan kami tidak perlu khawatir tentang apa pun. Luar biasa!</p>
                                <strong class="text-gray-900">Budi Hartono</strong>
                                <p class="text-sm text-gray-500">Founder, Startup Maju</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Testimonials Section End --}}

<!-- </div> -->

{{-- Contact Section (Statis) --}}
<section id="contact" class="py-20 bg-gray-800 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 data-aos="zoom-in" class="text-3xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
        <p data-aos="zoom-in" data-aos-delay="100" class="mb-8">Hubungi kami untuk konsultasi gratis dan mari wujudkan acara Anda.</p>
        <a data-aos="zoom-in" data-aos-delay="200" href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full">Kontak Sekarang</a>
    </div>
</section>

@endsection
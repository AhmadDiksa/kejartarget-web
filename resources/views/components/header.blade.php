
<header class="bg-white/70 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
            <svg class="w-8 h-8 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
            </svg>
            <span class="text-2xl font-bold text-gray-800">KejarTarget</span>
        </a>

    <!-- Navigation Links (Sekarang Dinamis) -->
        <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold tracking-wider">
            
            @foreach ($navLinks as $link)
                <a href="{{ url($link['url']) }}" class="{{ request()->is($link['active_pattern']) ? 'text-green-600' : 'text-gray-600' }} hover:text-green-600 transition-colors">
                    {{ $link['text'] }}
                </a>
            @endforeach

        </nav>


        <!-- Right Side: Search and Contact Button -->
        <div class="hidden md:flex items-center space-x-6">
            <button class="text-gray-500 hover:text-green-600 transition-colors">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
            <a href="#" class="bg-green-600 text-white px-6 py-2 rounded-md text-sm font-semibold hover:bg-green-700 transition-colors">
                CONTACT US
            </a>
        </div>
    </div>
</header>
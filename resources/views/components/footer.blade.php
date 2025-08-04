{{-- resources/views/components/footer.blade.php --}}

<footer class="relative bg-gray-900 text-white pt-20 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/footer-bg.jpg') }}" alt="Footer Background" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Kolom 1: About & Address (Ikon diubah ke <img>) -->
            <div class="space-y-4">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" /></svg>
                    <span class="text-2xl font-bold">KejarTarget</span>
                </a>
                <p class="font-semibold text-sm tracking-widest">SUPER EVENT ORGANIZER</p>
                <div class="space-y-3 text-sm text-gray-300">
                    @foreach ($footerData['addresses'] as $location => $address)
                        <div class="flex items-start gap-3">
                            <img src="https://img.icons8.com/material-rounded/24/16a34a/marker.png" alt="Location Pin" class="w-5 h-5 mt-1 flex-shrink-0">
                            <p><strong class="text-white">{{ $location }}:</strong> {{ $address }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Kolom 2: Overview Links (Dinamis) -->
            <div>
                <h3 class="text-lg font-bold text-green-400 mb-4">Overview</h3>
                <ul class="space-y-2 text-gray-300">
                    @foreach ($footerData['overviewLinks'] as $link)
                        <li><a href="{{ url($link['url']) }}" class="hover:text-white">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Kolom 3: Branch Office (Dinamis) -->
            <div>
                <h3 class="text-lg font-bold text-green-400 mb-4">Branch Office</h3>
                <ul class="space-y-2 text-gray-300">
                    @foreach ($footerData['branchLinks'] as $link)
                        <li><a href="{{ url($link['url']) }}" class="hover:text-white">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Kolom 4: Social Media & Contact (Dinamis dengan <img>) -->
            <div>
                <h3 class="text-lg font-bold text-green-400 mb-4">Follow Our Social Media</h3>
                <p class="text-gray-300 mb-4">Super Event Organizer | KejarTarget</p>
                
                <div class="flex space-x-3 mb-6">
                    @foreach ($footerData['socials'] as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 flex items-center justify-center bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                            <img src="{{ $social['iconUrl'] }}" class="w-4 h-4" alt="">
                        </a>
                    @endforeach
                </div>

                <div class="space-y-3 text-sm text-gray-300">
                    @foreach ($footerData['contacts'] as $contact)
                        <div class="flex items-center gap-3">
                            <img src="{{ $contact['iconUrl'] }}" class="w-5 h-5" alt="">
                            <a href="{{ $contact['url'] }}" class="hover:text-white">{{ $contact['value'] }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
            <p>© {{ date('Y') }} KejarTarget. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php

namespace App\Providers;

// Pastikan use statement ini ada
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Kode untuk pagination
        Paginator::defaultView('vendor.pagination.tailwind');


        // 1. Definisikan Data untuk Navbar/Header
        $navLinks = [
            ['url' => '/', 'text' => 'HOME', 'active_pattern' => '/'],
            ['url' => '/teams', 'text' => 'OUR TEAM', 'active_pattern' => 'teams*'],
            ['url' => '#about-us', 'text' => 'ABOUT', 'active_pattern' => 'about-us'],
            ['url' => '/blog', 'text' => 'BLOG', 'active_pattern' => 'blog*'],
        ];

        // 2. Definisikan Data untuk Footer
        $footerData = [
        'addresses' => [
            // Ikon untuk alamat sama, jadi kita akan definisikan sekali di Blade.
            'Head Office' => 'Jl. Ketintang, Ketintang, Kec. Gayungan, Kota Surabaya, Jawa Timur 60231',
        ],
        'overviewLinks' => [
            ['url' => '/', 'text' => 'Home'],
            ['url' => '/teams', 'text' => 'Our Team'],
            ['url' => '#portfolio', 'text' => 'Portfolio'],
            ['url' => '/blog', 'text' => 'Publication'],
            ['url' => '#contact', 'text' => 'Contact'],
        ],
        'branchLinks' => [
            ['url' => '#', 'text' => 'Jakarta'],
            ['url' => '#', 'text' => 'Yogyakarta'],
            ['url' => '#', 'text' => 'Bali'],
            ['url' => '#', 'text' => 'Bandung'],
        ],
        'socials' => [
            // Kita menggunakan ikon PUTIH karena akan diletakkan di atas background hijau.
            'facebook' => ['url' => 'https://facebook.com', 'iconUrl' => 'https://img.icons8.com/ios-filled/50/FFFFFF/facebook-new.png'],
            'instagram' => ['url' => 'https://instagram.com', 'iconUrl' => 'https://img.icons8.com/ios-filled/50/FFFFFF/instagram-new.png'],
            'youtube' => ['url' => 'https://youtube.com', 'iconUrl' => 'https://img.icons8.com/ios-filled/50/FFFFFF/youtube-play.png'],
        ],
        'contacts' => [
            // Kita menggunakan ikon HIJAU (#16a34a) agar sesuai dengan tema.
            'email' => ['value' => 'info@kejartarget.co.id', 'url' => 'mailto:info@kejartarget.co.id', 'iconUrl' => 'https://img.icons8.com/material-rounded/24/16a34a/mail.png'],
            'phone' => ['value' => '+6285695861182', 'url' => 'tel:+6285695861182', 'iconUrl' => 'https://img.icons8.com/material-rounded/24/16a34a/phone--v1.png'],
        ]
    ];

        // 3. Bagikan data ke semua view yang akan di-render
        View::share('navLinks', $navLinks);
        View::share('footerData', $footerData);
    }
}
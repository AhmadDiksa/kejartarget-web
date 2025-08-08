<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    // Method baru untuk halaman Blog
    public function blog()
    {
        // Data dummy untuk semua postingan blog
        $allPosts = new Collection([
            [
                'image' => 'https://images.unsplash.com/photo-1605379399642-870262d3d051?q=80&w=2106&auto=format&fit=crop',
                'category' => 'Launching Event',
                'title' => 'Event Organizer Jakarta Terbaik Spesialis Expo, Summit, dan Launching Event',
                'date' => 'May 9, 2023',
                'excerpt' => 'Dalam dunia bisnis yang semakin kompetitif, kebutuhan akan penyelenggaraan event profesional menjadi sangat penting...',
                'url' => '#',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=2070&auto=format&fit=crop',
                'category' => 'Corporate',
                'title' => 'EO Jakarta Terbaik untuk Corporate Gathering, Seminar, dan Gala Dinner',
                'date' => 'May 9, 2023',
                'excerpt' => 'Merencanakan acara perusahaan seperti corporate gathering bukanlah hal yang mudah. Dibutuhkan pengalaman, kreativitas...',
                'url' => '#',
            ],
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1661310129193-81b6637a0e40?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'category' => 'Corporate',
                'title' => 'Panduan Lengkap Mengadakan Acara Perusahaan Bersama EO Terbaik',
                'date' => 'May 8, 2023',
                'excerpt' => 'Mengadakan acara perusahaan bukanlah perkara mudah. Dibutuhkan perencanaan matang, koordinasi yang rapi, serta eksekusi...',
                'url' => '#',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1511578191439-44c181658428?q=80&w=2070&auto=format&fit=crop',
                'category' => 'Tips & Trik',
                'title' => '5 Tips Memilih Vendor Dekorasi untuk Event Anda',
                'date' => 'May 7, 2023',
                'excerpt' => 'Dekorasi adalah salah satu elemen kunci yang menentukan suasana sebuah acara. Memilih vendor yang tepat adalah langkah vital...',
                'url' => '#',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop',
                'category' => 'Team Building',
                'title' => 'Ide Aktivitas Team Building Outdoor yang Seru dan Bermanfaat',
                'date' => 'May 6, 2023',
                'excerpt' => 'Meningkatkan kekompakan tim tidak harus dilakukan di dalam ruangan. Aktivitas outdoor bisa menjadi pilihan yang menyegarkan...',
                'url' => '#',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1560523159-4a9692c202f5?q=80&w=2070&auto=format&fit=crop',
                'category' => 'MICE',
                'title' => 'Tren Terkini dalam Industri MICE (Meetings, Incentives, Conferences, Exhibitions)',
                'date' => 'May 5, 2023',
                'excerpt' => 'Industri MICE terus berkembang dengan berbagai inovasi teknologi dan tren baru. Simak apa saja yang sedang populer saat ini...',
                'url' => '#',
            ],
        ]);

        // Konfigurasi Paginator secara manual
        $perPage = 3; // Menampilkan 3 post per halaman
        $currentPage = Paginator::resolveCurrentPage('page');
        $currentPageItems = $allPosts->slice(($currentPage - 1) * $perPage, $perPage);
        
        $posts = new Paginator($currentPageItems, $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        return view('pages.blog', [
            'posts' => $posts
        ]);
    }


public function home()
{
    // Data untuk Hero Section
    $hero = [
        'title' => "Let's Create Your Super<br><span id=\"dynamic-word\" class=\"text-green-400 transition-opacity duration-150 ease-in-out\">Meeting</span> With KejarTarget",
        'subtitle' => 'KejarTarget hadir sebagai Event Organizer (EO) Terbaik di Indonesia, dengan perwakilan di Jakarta, Bali, Yogyakarta, dan Surabaya. Berpengalaman lebih dari 7 tahun merencakan dan melaksanakan event perusahaan Nasional, Multinasional, Kementerian, & BUMN.',
    ];

    // Data untuk About Us Section
    $about = [
        'title' => 'Elevate Your<br><span class="text-green-600">Events.</span>',
        'description' => 'Kami adalah Event Organizer dan spesialis MICE pemenang penghargaan. Dibuat dari ide-ide premium dan niat murni untuk membuat momen Anda tak terlupakan.',
        'features' => [
            ['icon' => '<svg>...</svg>', 'text' => 'Creative Concepts'],
            ['icon' => '<svg>...</svg>', 'text' => 'Precision Planning'],
            ['icon' => '<svg>...</svg>', 'text' => 'Seamless Execution'],
            ['icon' => '<svg>...</svg>', 'text' => 'Memorable Experience'],
        ],
        'image' => "https://images.unsplash.com/photo-1523580494863-6f3031224c94?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ];

    // Data untuk Features/Services Section
    $features = [

        [
            'image' => 'images\services\music.png',
            'title' => 'Music Events',
            'description' => 'Pretium lectus quam id leo in vitae turpis. Mattis pellentesque id nibh tortor id.',
        ],
        [
            'image' => 'https://img.icons8.com/?size=100&id=25843&format=png&color=16a34a',
            'title' => 'Weddings',
            'description' => 'Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Risus feugiat.',
        ],
        [
            'image' => 'https://img.icons8.com/?size=100&id=20318&format=png&color=16a34a',
            'title' => 'Corporate Events',
            'description' => 'Nisl purus in mollis nunc sed id semper. Rhoncus aenean vel elit scelerisque mauris.',
        ],
    ];

    // Data untuk Statistics Section
    $stats = [
        ['iconUrl' => 'https://img.icons8.com/?size=100&id=25391&format=png&color=16a34a', 'target' => 125, 'suffix' => ' +', 'label' => 'Projects Done'],
        ['iconUrl' => 'https://img.icons8.com/?size=100&id=25565&format=png&color=16a34a', 'target' => 1500, 'suffix' => ' +', 'label' => 'Customer Happy'],
        ['iconUrl' => 'https://img.icons8.com/?size=100&id=1136&format=png&color=16a34a', 'target' => 100, 'suffix' => ' %', 'label' => 'Satisfactory Rate'],
        ['iconUrl' => 'https://img.icons8.com/?size=100&id=40390&format=png&color=16a34a', 'target' => 99, 'label' => 'Team Experts'],
    ];

    // Data untuk Portfolio Section
    $portfolioItems = [
        [
            'image' => 'images\portofolio\portfolio-summit.jpg',
            'title' => 'Vertiv Co Ltd Singapore<br>Asia Channel Summit 2023',
            'client' => 'Vertiv Co Ltd', 'category' => 'International', 'venue' => 'Grand Hyatt, Bali', 'participants' => '500 Pax'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1472653431158-6364773b2a56?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'KEMENPAREKRAF RI<br>Hari Ekonomi Kreatif Nasional',
            'client' => 'KEMENPAREKRAF RI', 'category' => 'Government', 'venue' => 'Gedung Sapta Pesona', 'participants' => '300 Pax'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'MIRAE ASSET SEKURITAS<br>10 Years Anniversary',
            'client' => 'Mirae Asset Sekuritas', 'category' => 'Corporate', 'venue' => 'Aston Sentul', 'participants' => '550 Pax'
        ],
    ];

    // Data untuk Client/Logo Scroller
    $clients = [
        ['logo' => 'images/clients/gdg.png', 'name' => 'GDG'],
        ['logo' => 'images/clients/logo-kemenparekraf.png', 'name' => 'Kemenparekraf'],
        ['logo' => 'images/clients/microsoft.jpg', 'name' => 'Microsoft'],
        ['logo' => 'images/clients/unesa.png', 'name' => 'Unesa'],
    ];
    
    // Data untuk Testimonial Section
    $testimonials = [
        [
            'image' => 'images\testimonials\client1.jpg',
            'quote' => "This Year, Future Leader fest is becoming an icon for leadership coaching for youth. And we're glad this event is fully supported by KejarTarget. Good Job KejarTarget!",
            'name' => 'Stanno Yudha Putra', 'title' => 'Chairman of Future Leader Fest 2023'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1619545307432-9fc73f8135ff?q=80&w=464&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'quote' => 'Kerja sama dengan KejarTarget adalah keputusan terbaik. Tim mereka sangat responsif, kreatif, dan profesional. Acara berjalan lancar melebihi ekspektasi.',
            'name' => 'Siti Aisyah', 'title' => 'Marketing Director, TechCorp'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1585917170055-e40d30c73414?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'quote' => 'Dari konsep hingga eksekusi, semuanya ditangani dengan sangat baik. Tim KejarTarget memastikan kami tidak perlu khawatir tentang apa pun. Luar biasa!',
            'name' => 'Budi Hartono', 'title' => 'Founder, Startup Maju'
        ],
    ];

    // Mengirim semua data ke view menggunakan fungsi compact()
    return view('pages.home', compact(
        'hero', 'about', 'features', 'stats', 'portfolioItems', 'clients', 'testimonials'
    ));
    
}

public function teams()
{
    // Data dummy untuk anggota tim dengan detail tambahan
    $teamMembers = [
        [
            'image' => 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop',
            'name' => 'Bob Brown',
            'position' => 'Creative Leader',
            'description' => 'Glavrida amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor.',
            'socials' => [
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#'
            ]
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=870&auto=format&fit=crop',
            'name' => 'Mary Smith',
            'position' => 'Chief Accountant',
            'description' => 'Glavrida amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor.',
            'socials' => [
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#'
            ]
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=387&auto=format&fit=crop',
            'name' => 'Nick Dark',
            'position' => 'Sales Manager',
            'description' => 'Glavrida amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor.',
            'socials' => [
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#'
            ]
        ],
    ];

    return view('pages.teams', compact('teamMembers'));
}
}
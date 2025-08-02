import './bootstrap';

// Menunggu hingga seluruh halaman HTML selesai dimuat sebelum menjalankan script
document.addEventListener('DOMContentLoaded', function() {

    // 1. Temukan elemen span berdasarkan ID yang telah ditentukan
    const dynamicWordElement = document.getElementById('dynamic-word');
    
    // Pastikan elemennya ada sebelum melanjutkan, untuk menghindari error
    if (dynamicWordElement) {
        
        // 2. Siapkan daftar kata-kata yang akan ditampilkan. Anda bisa menambah/mengubahnya di sini!
        const words = ['Meeting', 'Gathering', 'Wedding', 'Conference', 'Exhibition', 'Party'];
        let wordIndex = 0;

        // 3. Atur interval untuk mengubah kata setiap 3 detik (3000 milidetik)
        setInterval(() => {
            // A. Buat kata yang sekarang menjadi transparan (fade out)
            dynamicWordElement.classList.add('opacity-0');

            // B. Tunggu animasi fade-out selesai (sesuai durasi di class Tailwind: 300ms)
            setTimeout(() => {
                // Ganti indeks ke kata berikutnya, kembali ke awal jika sudah di akhir
                wordIndex = (wordIndex + 1) % words.length;
                
                // Ubah teks di dalam elemen span
                dynamicWordElement.textContent = words[wordIndex];
                
                // Hapus class transparan agar kata muncul kembali (fade in)
                dynamicWordElement.classList.remove('opacity-0');
            }, 150); // Waktu ini HARUS sama dengan 'duration-300'

        }, 1500); // Ganti kata setiap 3 detik
    }

    
});

import AOS from 'aos';

import { initCounterAnimation } from './counter.js';

import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

// Fungsi untuk inisialisasi Testimonial Slider
function initTestimonialSlider() {
    const testimonialSlider = new Swiper('#testimonial-slider', {
        // Gunakan modul yang diimpor
        modules: [Autoplay],

        // Opsi Slider
        loop: true, // Agar bisa berputar tak terbatas
        speed: 800, // Kecepatan transisi slide
        effect: 'slide', // Animasi geser (default)

        // Opsi Autoplay
        autoplay: {
            delay: 5000, // Ganti slide setiap 5 detik
            disableOnInteraction: false, // Tetap autoplay setelah interaksi user
            pauseOnMouseEnter: true, // Jeda saat kursor di atas slider
        },
    });
}

// Fungsi untuk inisialisasi Logo Scroller
function initLogoScroller() {
    const scrollers = document.querySelectorAll(".scroller");

    // Jika pengguna tidak suka animasi, hentikan
    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        scrollers.forEach((scroller) => {
            scroller.setAttribute("data-animated", "true");

            const scrollerInner = scroller.querySelector(".scroller__inner");
            const scrollerContent = Array.from(scrollerInner.children);

            scrollerContent.forEach(item => {
                const duplicatedItem = item.cloneNode(true);
                duplicatedItem.setAttribute("aria-hidden", true);
                scrollerInner.appendChild(duplicatedItem);
            });
        });
    }
}

// Inisialisasi semuanya saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({ once: true }); // 'once: true' adalah praktik yang baik

    // Panggil inisialisasi animasi counter
    initCounterAnimation();

    initLogoScroller(); 

    initTestimonialSlider();
});
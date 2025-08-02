// resources/js/counter.js

// Fungsi utama untuk menganimasikan satu elemen angka
function animateCounter(element) {
    const target = parseInt(element.dataset.target, 10); // Ambil angka target dari atribut data-target
    const suffix = element.dataset.suffix || ''; // Ambil suffix seperti '+' atau '%'
    const duration = 1500; // Durasi animasi dalam milidetik
    const frameRate = 1000 / 60; // 60 frame per detik
    const totalFrames = Math.round(duration / frameRate);
    const increment = target / totalFrames;

    let current = 0;
    const counter = setInterval(() => {
        current += increment;

        if (current >= target) {
            clearInterval(counter);
            // Format angka dengan titik (misal: 1500 -> 1.500) dan tambahkan suffix
            element.textContent = target.toLocaleString('de-DE') + suffix;
        } else {
            element.textContent = Math.floor(current).toLocaleString('de-DE');
        }
    }, frameRate);
}

// Fungsi untuk menginisialisasi observer
export function initCounterAnimation() {
    const counters = document.querySelectorAll('.animated-counter');
    if (counters.length === 0) return;

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Jika elemen masuk ke viewport
            if (entry.isIntersecting) {
                const el = entry.target;
                animateCounter(el); // Mulai animasi
                observer.unobserve(el); // Berhenti mengamati setelah animasi dimulai agar tidak berulang
            }
        });
    }, {
        threshold: 0.5 // Mulai animasi saat 50% elemen terlihat
    });

    // Amati setiap elemen counter
    counters.forEach(counter => {
        observer.observe(counter);
    });
}
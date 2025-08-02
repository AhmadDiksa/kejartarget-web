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
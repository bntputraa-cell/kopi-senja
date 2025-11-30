document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', function() {
        // Tambahkan/Hapus kelas 'open' pada menu-toggle UNTUK EFEK X
        menuToggle.classList.toggle('open'); 
        
        // Tambahkan/Hapus kelas 'open' pada nav-links UNTUK MENAMPILKAN MENU
        navLinks.classList.toggle('open');
    });

    // Opsional: Tutup menu saat link diklik
    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function() {
            navLinks.classList.remove('open');
            menuToggle.classList.remove('open'); // Penting: Tutup efek X juga
        });
    });
});
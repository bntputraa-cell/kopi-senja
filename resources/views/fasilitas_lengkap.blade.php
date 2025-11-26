<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Lengkap Gubuk Senja</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="container">
        <header class="navbar">
            <div class="logo">
                <span class="logo-text-visible">Gubuk Senja</span>
            </div>
            <nav class="nav-links">
                <a href="{{ route('home') }}#beranda">Beranda</a>
                <a href="{{ route('home') }}#tentang">Tentang</a>
                <a href="{{ route('menu.index') }}">Menu</a>
                <a href="{{ route('fasilitas.index') }}">Fasilitas</a>
                <a href="{{ route('home') }}#kontak">Kontak</a>
            </nav>
        </header>

       
        <div class="full-facilities-page">
            <h1 class="page-title full-title">
                Fasilitas Kami
                <span class="underline"></span>
            </h1>

            <div class="facility-grid">
                
                {{-- 1. Area Outdoor / Teras --}}
                <div class="facility-item">
                    <div class="facility-image-wrapper">
                        <img src="{{ asset('images/facility_outdoor.jpg') }}" alt="Area Outdoor Cafe" class="facility-image-full">
                    </div>
                    <div class="facility-text-content">
                        <i class="fa-solid fa-tree"></i>
                        <h2 class="facility-name">Area Luar Ruangan</h2>
                        <p class="facility-detail">Nikmati kopi Anda sambil menikmati suasana sejuk dan pemandangan hijau yang menenangkan.</p>
                    </div>
                </div>

                {{-- 2. Area Indoor / Nyaman --}}
                <div class="facility-item">
                    <div class="facility-image-wrapper">
                        <img src="{{ asset('images/facility_indoor.jpg') }}" alt="Area Indoor Cafe" class="facility-image-full">
                    </div>
                    <div class="facility-text-content">
                        <i class="fa-solid fa-house-chimney"></i>
                        <h2 class="facility-name">Area Dalam Ruangan</h2>
                        <p class="facility-detail">Ruangan ber-AC dengan desain interior kayu yang hangat, cocok untuk bekerja atau pertemuan santai.</p>
                    </div>
                </div>

                {{-- 3. Wi-Fi Gratis --}}
                <div class="facility-item">
                    <div class="facility-image-wrapper">
                        <img src="{{ asset('images/facility_wifi.jpg') }}" alt="Area Wi-Fi Cepat" class="facility-image-full">
                    </div>
                    <div class="facility-text-content">
                        <i class="fa-solid fa-wifi"></i>
                        <h2 class="facility-name">Wi-Fi Berkecepatan Tinggi</h2>
                        <p class="facility-detail">Akses internet cepat dan stabil gratis untuk mendukung produktivitas dan hiburan Anda.</p>
                    </div>
                </div>

                {{-- 4. Toilet Bersih --}}
                <div class="facility-item">
                    <div class="facility-image-wrapper">
                        <img src="{{ asset('images/facility_toilet.jpg') }}" alt="Toilet Bersih" class="facility-image-full">
                    </div>
                    <div class="facility-text-content">
                        <i class="fa-solid fa-restroom"></i>
                        <h2 class="facility-name">Toilet Bersih & Terawat</h2>
                        <p class="facility-detail">Kebersihan dan kenyamanan kamar mandi selalu menjadi prioritas kami.</p>
                    </div>
                </div>
                
                {{-- 5. Mushola --}}
                <div class="facility-item">
                    <div class="facility-image-wrapper">
                        <img src="{{ asset('images/facility_mushola.jpg') }}" alt="Mushola" class="facility-image-full">
                    </div>
                    <div class="facility-text-content">
                        <i class="fa-solid fa-mosque"></i>
                        <h2 class="facility-name">Mushola</h2>
                        <p class="facility-detail">Tersedia tempat ibadah yang tenang dan nyaman untuk para pengunjung Muslim.</p>
                    </div>
                </div>

                {{-- 6. Stop Kontak --}}
                <div class="facility-item">
                    <div class="facility-image-wrapper">
                        <img src="{{ asset('images/facility_charger.jpg') }}" alt="Stop Kontak" class="facility-image-full">
                    </div>
                    <div class="facility-text-content">
                        <i class="fa-solid fa-plug"></i>
                        <h2 class="facility-name">Stop Kontak Tersedia</h2>
                        <p class="facility-detail">Jangan khawatir kehabisan daya. Kami menyediakan banyak stop kontak di area duduk.</p>
                    </div>
                </div>

            </div>
        </div>


        
        <footer class="main-footer">
            <div class="footer-container">
                <div class="footer-column logo-col">
                    <h3 class="footer-logo">Gubuk Senja</h3>
                    <p class="footer-subtitle">COFFEE AND EATERY</p>
                    <div class="price-info">
                        <p>Harga Mulai Dari</p>
                        <p class="price-value">15K</p>
                    </div>
                </div>

                <div class="footer-column">
                    <h4 class="column-title">Navigasi</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}#beranda">Beranda</a></li>
                        <li><a href="{{ route('home') }}#tentang">Tentang</a></li>
                        <li><a href="{{ route('menu.index') }}">Menu</a></li>
                        <li><a href="{{ route('fasilitas.index') }}">Fasilitas</a></li>
                        <li><a href="{{ route('home') }}#kontak">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4 class="column-title">Menu</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('menu.index') }}">Minuman</a></li>
                        <li><a href="{{ route('menu.index') }}">Makanan</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4 class="column-title">Fasilitas</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('fasilitas.index') }}">Foto suasana cafe</a></li>
                        <li><a href="{{ route('fasilitas.index') }}">Mushola</a></li>
                        <li><a href="{{ route('fasilitas.index') }}">Toilet</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4 class="column-title">Kontak</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}#kontak">Jam buka</a></li>
                        <li><a href="{{ route('home') }}#kontak">WhatsApp</a></li>
                        <li><a href="{{ route('home') }}#kontak">Instagram</a></li>
                        <li><a href="{{ route('home') }}#kontak">Lokasi</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
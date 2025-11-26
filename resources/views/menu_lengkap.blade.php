<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lengkap Gubuk Senja</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
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
                <a href="{{ route('home') }}#fasilitas">Fasilitas</a>
                <a href="{{ route('home') }}#kontak">Kontak</a>
            </nav>
        </header>

        
        <div class="full-menu-page">
            <div class="full-menu-header">
                <img src="{{ asset('images/menu_header_bg.jpg') }}" alt="Background Menu" class="menu-header-bg">
                <div class="header-overlay">
                    <h1 class="header-title">Nikmati Minuman Yang Telah Kami Sediakan</h1>
                    <p class="header-subtitle">Pilih minuman kecintaanmu dan nikmatang</p>
                </div>
            </div>

           
            <div class="full-menu-grid-container">
                <div class="menu-grid-full">
                    @for ($i = 1; $i <= 18; $i++)
                        <div class="menu-card-full">
                            <div class="menu-image-placeholder"></div>
                            <div class="menu-text-content">
                                <h3 class="item-name">Nama Item Minuman {{ $i }}</h3>
                                <p class="item-desc">Deskripsi singkat tentang menu ini. Rasanya manis dan segar.</p>
                                <p class="item-price">Rp 20.000</p>
                            </div>
                        </div>
                    @endfor
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
                        <li><a href="{{ route('home') }}#fasilitas">Fasilitas</a></li>
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
                        <li><a href="#">Foto suasana cafe</a></li>
                        <li><a href="#">Mushola</a></li>
                        <li><a href="#">Toilet</a></li>
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
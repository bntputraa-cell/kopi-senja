<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gubuk Senja</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

        <div class="container">
            <header class="navbar">
                <div class="logo">
                <span class="logo-text-visible">Gubuk Senja</span>
            </div>
            <nav class="nav-links">
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang</a>
                <a href="#menu">Menu</a>
                <a href="#fasilitas">Fasilitas</a>
                <a href="#kontak">Kontak</a>
            </nav>
        </header>

       
        <main class="content-section" id="beranda">
            <div class="text-content">
                <p class="welcome-to">Welcome To</p>
                <h1 class="gubuk-senja">Gubuk Senja</h1>
                <p class="subtitle">COFFEE AND EATERY</p>
                <p class="description">
                    tempat sederhana dengan suasana hangat untuk menikmati kopi dan cerita di kala senja.
                </p>
            </div>
            <div class="image-content">
                <img src="{{ asset('images/home (2).jpeg') }}" alt="Interior Gubuk Senja" class="cafe-image">
            </div>
        </main>

       

        <div class="about-page-container" id="tentang">
            <h1 class="page-title">
                Tentang Kami
                <span class="underline"></span>
            </h1>

            <div class="about-content">
                <div class="image-column">
                    <img src="{{ asset('images/about (2).jpeg') }}" alt="Bar Kopi Gubuk Senja" class="bar-image">
                </div>

                <div class="text-column">
                    <div class="story-section">
                        <h2 class="section-title">Cerita Kami</h2>
                        <p class="section-text">
                            Bermula pada tahun 2025, Kopi Gubuk Senja hadir dengan
                            semangat menghadirkan cita rasa kopi asli Indonesia. Kami
                            percaya setiap tegukan kopi bukan hanya minuman, melainkan
                            teman setia untuk merenung, berbagi tawa, dan menikmati
                            senja.
                        </p>
                    </div>

                    <div class="philosophy-section">
                        <h2 class="section-title">Filosofi Kami</h2>
                        <p class="section-subtitle">Sudut nyaman di Gubuk Senja</p>
                        <p class="section-text">
                            Dengan dinding kayu yang hangat, cahaya lampu yang temaram,
                            dan kursi rotan yang mengundang cerita setiap sudut di Gubuk
                            Senja kami rancang bukan hanya untuk duduk, tapi untuk merasa.
                        </p>
                        <p class="section-text">
                            Di tempat ini, waktu berjalan lebih lambat. Obrolan sederhana jadi
                            berarti, dan secangkir kopi bisa menghangatkan lebih dari sekadar
                            telapak tangan. Sudut ini, dan setiap jengkal lainnya, lahir dari
                            harapan untuk menjadi tempat pulang dari hiruk pikuknya hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>

       
       
        <div class="menu-page-container" id="menu">
            <div class="menu-header">
                <h1 class="menu-title">
                    Menu
                    <span class="underline"></span>
                </h1>
                <h2 class="menu-subtitle">Minuman & Makanan</h2>
            </div>

            <div class="menu-grid">
                @for ($i = 0; $i < 6; $i++)
                    <div class="menu-item">
                        <img src="{{ asset('images/menu_placeholder.jpg') }}" alt="Menu Item" class="menu-image">
                    </div>
                @endfor
            </div>

           
            <div class="button-container">
            <a href="{{ route('menu.index') }}" class="btn-more">
                lihat lebih banyak 
            <span class="arrow-icon">→</span>
            </a>
            </div>
        </div>

       
        <div class="facilities-section" id="fasilitas">
            <div class="facilities-content-wrapper">
                <div class="facilities-image-column">
                    <img src="{{ asset('images/fasilitas.jpeg') }}" alt="Interior Gubuk Senja" class="facilities-image">
                </div>

                <div class="facilities-text-column">
                    <h2 class="facilities-title">
                        Fasilitas
                        <span class="underline"></span>
                    </h2>
                    
                    <p class="facilities-description">
                        Nikmati kenyamanan dan kemudahan <br> dengan fasilitas terbaik yang kami sediakan.
                    </p>
                    
                  
            <div class="facilities-button-container">
                <a href="{{ route('fasilitas.index') }}" class="btn-more-facilities">
                    lihat lebih banyak 
                    <span class="arrow-icon">→</span>
                </a>
            </div>
                </div>
            </div>
        </div>

       
        <div class="contact-page-container" id="kontak">
            <h1 class="contact-title">Kontak Kami</h1>

            <div class="contact-grid">
                <div class="social-links-row">
                    <a href="https://www.instagram.com/kopi.gubuksenja?igsh=OXQyZzNyanhtcHpt" target="_blank" class="contact-card instagram-card">
                        <i class="fa-brands fa-instagram fa-lg"></i>
                        <div class="card-text">
                            <span class="card-label">Instagram</span>
                            <span class="card-handle">@kopi.gubuksenja</span>
                        </div>
                    </a>
                    
                    <a href="https://www.tiktok.com/@gubuksenja.id?_r=1&_t=ZS-91PbT3Ke42c" target="_blank" class="contact-card tiktok-card">
                        <i class="fa-brands fa-tiktok fa-lg"></i>
                        <div class="card-text">
                            <span class="card-label">Tiktok</span>
                            <span class="card-handle">@gubuksenja.id</span>
                        </div>
                    </a>

                    <a href="https://wa.me/6287870162261" target="_blank" class="contact-card whatsapp-card">
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                        <div class="card-text">
                            <span class="card-label">WhatsApp</span>
                            <span class="card-handle">+62 878-7016-2261</span>
                        </div>
                    </a>
                </div>

                <div class="details-row">
                    <div class="hours-card">
                        <h2 class="hours-title">Jam Buka</h2>
                        <i class="fa-regular fa-clock fa-2xl"></i>
                        <br>
                        <br>
                        <p>
                            <span class="time-label">Weekday</span> | <span class="time-range">10.00 - 22.00</span>
                        </p>
                        <br>
                        <p>
                            <span class="time-label">Weekend</span> | <span class="time-range">10.00 - 00.00</span>
                        </p>
                    </div>

                    <div class="map-container-wrapper">
                        <div class="map-info-panel">
                            <div class="info-header">
                                <p class="address-line">Jl. Veteran III, Kp. Parung Jambu</p>
                                <p class="address-line">Kec. Ciawi, Kabupaten Bogor, Jawa</p>
                                <p class="address-line">Barat 16720</p>
                            </div>
                        </div>

                        <div class="map-iframe-panel">
                            <iframe 
                                src="https://www.google.com/maps/place/Kedai+kopi+gubuk+senja/@-6.6769922,106.858957,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c9002b8b4c6f:0xab2fb02773d2d1!8m2!3d-6.6769922!4d106.8615319!16s%2Fg%2F11xh2bx8tn?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D"
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
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
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#fasilitas">Fasilitas</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4 class="column-title">Menu</h4>
                    <ul class="footer-links">
                        <li><a href="#">Minuman</a></li>
                        <li><a href="#">Makanan</a></li>
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
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Tiktok</a></li>
                        <li><a href="#">WhatsApp</a></li>
                        <li><a href="#">Jam Buka</a></li>
                        <li><a href="#">Lokasi</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROA - Radar Organisasi dan Aspirasi</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Phosphor Icons for Hamburger & social icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="assets/img/logo.png" alt="Logo SMK Penerbangan" class="nav-logo">
            </div>
            
            <div class="nav-links">
                <a href="index.php" class="nav-item active">Home</a>
                <a href="bidang.php" class="nav-item">Bidang</a>
                <a href="aspirasi.php" class="nav-item">Aspirasi</a>
                
                <div class="dropdown">
                    <button class="hamburger-btn" id="hamburger-btn">
                        <i class="ph ph-list"></i>
                    </button>
                    <div class="dropdown-content" id="dropdown-menu">
                        <a href="index.php#osis">OSIS</a>
                        <a href="index.php#pks">PKS</a>
                        <a href="index.php#mpk">MPK</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Nav Wrapper to handle when screen is very small, though hamburger here acts as dropdown -->

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1 class="hero-title">
                    WELCOME TO <br>
                    <span class="highlight">RADAR OSIS SMK PENERBANGAN <br> BOGOR</span> OFFICIAL WEBSITE
                </h1>
                <p class="hero-subtitle">SAMPAIKAN ASPIRASI MU SEKARANG!!</p>
                <div class="hero-badges">
                    <span class="badge">Wadah Aspirasi</span>
                    <span class="badge">Ruang Kolaborasi</span>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="assets/img/hero.png" alt="OSIS Representatives" class="hero-image">
            </div>
        </div>
        <!-- Decorative curved wave at bottom of hero -->
        <div class="custom-shape-divider-bottom-1701198299">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="bidang" class="about-section">
        <div class="about-container">
            <div class="about-box">
                <h2>Tentang SMK Penerbangan</h2>
                <p>
                    SMK Penerbangan Bogor adalah wadah untuk siswa-siswi yang memiliki cita-cita tinggi. 
                    Sekolah ini membekali siswa dengan ilmu dan keterampilan tentang penerbangan, membentuk karakter 
                    disiplin, tangguh, dan profesional, serta mewadahi aspirasi dan kolaborasi antar siswa.
                </p>
            </div>
            <div class="about-logo">
                <img src="assets/img/logo.png" alt="Logo SMK">
            </div>
        </div>
    </section>

    <!-- Aspirasi Section -->
    <section id="aspirasi" class="aspirasi-section">
        <div class="section-title">
            <h2>Komentar Aspirasi</h2>
            <div class="title-underline"></div>
        </div>
        
        <div class="aspirasi-marquee">
            <div class="aspirasi-track">
                <!-- Group 1 -->
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+1&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Siswa Kelas X</h4>
                            <span>2 Jam yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Fasilitas lab komputer harap diperbarui agar praktikum bisa berjalan lebih lancar dan modern.</p>
                </div>
                
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+2&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Siswa Kelas XI</h4>
                            <span>1 Hari yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Kegiatan ekskul tolong ditambah waktu latihannya setiap minggu untuk persiapan lomba antar sekolah.</p>
                </div>
                
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+3&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Siswa Kelas XII</h4>
                            <span>2 Hari yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Mohon agar koperasi menyediakan lebih banyak variasi makanan sehat setiap waktu istirahat.</p>
                </div>
                
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+4&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Alumni</h4>
                            <span>1 Minggu yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Sangat bangga melihat perkembangan organisasi sekolah akhir-akhir ini. Maju terus pantang mundur!</p>
                </div>

                <!-- Duplicate Group for Infinite Scroll -->
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+1&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Siswa Kelas X</h4>
                            <span>2 Jam yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Fasilitas lab komputer harap diperbarui agar praktikum bisa berjalan lebih lancar dan modern.</p>
                </div>
                
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+2&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Siswa Kelas XI</h4>
                            <span>1 Hari yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Kegiatan ekskul tolong ditambah waktu latihannya setiap minggu untuk persiapan lomba antar sekolah.</p>
                </div>
                
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+3&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Siswa Kelas XII</h4>
                            <span>2 Hari yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Mohon agar koperasi menyediakan lebih banyak variasi makanan sehat setiap waktu istirahat.</p>
                </div>
                
                <div class="aspirasi-card">
                    <div class="card-header">
                        <img src="https://ui-avatars.com/api/?name=Siswa+4&background=random" alt="Avatar" class="avatar">
                        <div class="user-info">
                            <h4>Alumni</h4>
                            <span>1 Minggu yang lalu</span>
                        </div>
                    </div>
                    <p class="card-body">Sangat bangga melihat perkembangan organisasi sekolah akhir-akhir ini. Maju terus pantang mundur!</p>
                </div>
            </div>
        </div>
        
        <div class="btn-container">
            <a href="aspirasi.php" class="btn-primary" style="display:inline-block; margin-top:2rem;">Kirim Aspirasi</a>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-container">
            <!-- Embedding a dummy map centered on Bogor for illustration -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126425.86791176274!2d106.72659392237834!3d-6.595604118090757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e5b7c7c13b%3A0xe5fa887c9edba491!2sBogor%2C%20Bogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1701198533031!5m2!1sen!2sid" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <div class="brand">
                    <img src="assets/img/logo.png" alt="Logo">
                    <h3>SMK PENERBANGAN</h3>
                </div>
                <p class="footer-desc">
                    Membentuk tenaga ahli dirgantara yang disiplin, tangguh, dan profesional. 
                    Wadah aspirasi dan kolaborasi siswa.
                </p>
            </div>
            
            <div class="footer-center">
                <h4>Menu Navigasi</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#bidang">Bidang</a></li>
                    <li><a href="#aspirasi">Aspirasi</a></li>
                    <li><a href="#osis">OSIS</a></li>
                    <li><a href="#pks">PKS</a></li>
                    <li><a href="#mpk">MPK</a></li>
                </ul>
            </div>
            
            <div class="footer-right">
                <h4>Hubungi Kami</h4>
                <div class="contact-item">
                    <i class="ph ph-map-pin"></i>
                    <p>Jl. Raya Semplak No. 9, Atang Senjaya, Kec. Kemang, Bogor, Jawa Barat 16310</p>
                </div>
                <div class="contact-item">
                    <i class="ph ph-phone"></i>
                    <p>(0251) 753 6649</p>
                </div>
                
                <!-- Admin Login Link hidden at the bottom or styled as a subtle link -->
                <div style="margin-top: 2rem;">
                    <a href="admin/" class="admin-login-btn"><i class="ph ph-shield"></i> Login Admin</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 OSIS SMK Penerbangan Bogor. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

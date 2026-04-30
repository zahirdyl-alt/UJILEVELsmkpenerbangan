<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirasi - Radar Organisasi dan Aspirasi</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="light-blue-bg">

    <!-- Navbar -->
    <nav class="navbar solid-navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="assets/img/logo.png" alt="Logo SMK Penerbangan" class="nav-logo">
            </div>
            
            <div class="nav-links">
                <a href="index.php" class="nav-item">Home</a>
                <a href="bidang.php" class="nav-item">Bidang</a>
                <a href="aspirasi.php" class="nav-item active">Aspirasi</a>
                
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

    <!-- Aspirasi Form Section -->
    <section class="aspirasi-form-section">
        <div class="aspirasi-form-container">
            
            <!-- Banner -->
            <div class="aspirasi-banner">
                <h2>AYO KIRIM PESAN ASPIRASI MU DI SINI YA!</h2>
            </div>
            
            <!-- Form Card -->
            <div class="aspirasi-box">
                <h3 class="form-title">Kirim Aspirasi Mu Disini</h3>
                
                <form action="#" method="POST" class="form-content">
                    <div class="input-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" id="pengirim" name="pengirim" placeholder="Isi Nama Anda" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email (misal: mail@google.com)" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="telepon">Telepon</label>
                        <input type="tel" id="telepon" name="telepon" placeholder="No Telepon / Hp yang aktif" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="kategori_pengirim">Kategori Pengirim</label>
                        <div class="select-wrapper">
                            <select id="kategori_pengirim" name="kategori_pengirim" required>
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="OSIS">OSIS</option>
                                <option value="MPK">MPK</option>
                                <option value="PKS">PKS</option>
                            </select>
                            <i class="ph ph-caret-down select-icon"></i>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="kategori">Kategori</label>
                        <div class="select-wrapper">
                            <select id="kategori" name="kategori" required>
                                <option value="" disabled selected>Pilih Kategori Aspirasi</option>
                                <option value="Kritik">Kritik</option>
                                <option value="Saran">Saran</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <i class="ph ph-caret-down select-icon"></i>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" name="judul" placeholder="Judul Keluhan / Aspirasi Anda" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="isi">Isi</label>
                        <textarea id="isi" name="isi" rows="6" placeholder="Ketik isi aspirasi Anda secara mendetail..." required></textarea>
                    </div>
                    
                    <!-- Fake ReCaptcha -->
                    <div class="recaptcha-box">
                        <div class="checkbox-wrapper">
                            <input type="checkbox" id="robot" name="robot" required>
                            <label for="robot">Saya bukan robot</label>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/RecaptchaLogo.svg/512px-RecaptchaLogo.svg.png" alt="reCAPTCHA logo" class="recaptcha-logo">
                    </div>
                    
                    <button type="submit" class="submit-btn">KIRIM</button>
                </form>
            </div>
            
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bidang.php">Bidang</a></li>
                    <li><a href="aspirasi.php">Aspirasi</a></li>
                    <li><a href="index.php#osis">OSIS</a></li>
                    <li><a href="index.php#pks">PKS</a></li>
                    <li><a href="index.php#mpk">MPK</a></li>
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

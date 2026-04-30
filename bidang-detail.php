<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bidang - Radar Organisasi dan Aspirasi</title>
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
                <a href="bidang.php" class="nav-item active">Bidang</a>
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

    <!-- Detail Section -->
    <?php 
    // Fallback ID if missing
    $id = isset($_GET['id']) ? $_GET['id'] : 1; 
    ?>
    <section class="detail-page-section">
        <div class="detail-container">
            <div class="detail-hero-img">
                <?php
                // Check if local image exists (png or jpg)
                $heroImgSrc = "c:\Users\rajib zahir\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\LocalState\sessions\13D473BDF299A70F2408A6A360CA4BE235F1BAAA\transfers\2026-18\WhatsApp Image 2026-04-30 at 17.11.49.jpg$id";
                if (file_exists("assets/img/bidang_detail_$id.png")) {
                    $heroImgSrc = "assets/img/bidang_detail_$id.png";
                } elseif (file_exists("assets/img/bidang_detail_$id.jpg")) {
                    $heroImgSrc = "assets/img/bidang_detail_$id.jpg";
                } elseif (file_exists("assets/img/bidang_$id.png")) {
                    // Fallback to the thumbnail photo if a separate detail photo isn't provided
                    $heroImgSrc = "assets/img/bidang_$id.png";
                } elseif (file_exists("assets/img/bidang_$id.jpg")) {
                    $heroImgSrc = "assets/img/bidang_$id.jpg";
                }
                ?>
                <img src="<?= $heroImgSrc ?>" alt="Detail Bidang">
                <div class="detail-badge-title">SEKBID <?= $id ?></div>
            </div>

            <div class="detail-content-wrap">
                <div class="pill-title">
                    <span>Tentang Bidang <?= $id ?></span>
                </div>

                <!-- Quotes format matching the design -->
                <div class="quote-block">
                    <p>"Bidang <?= $id ?> berkomitmen menjadi garda terdepan dalam memupuk rasa nasionalisme dan menjaga marwah kedisiplinan Taruna SMK Penerbangan Bogor."</p>
                </div>

                <div class="quote-block">
                    <p>"Kami berfokus pada pembentukan karakter yang tangguh, setia kawan, dan memiliki wawasan kebangsaan yang luas demi masa depan dirgantara Indonesia."</p>
                </div>
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
                    <li><a href="index.php#aspirasi">Aspirasi</a></li>
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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Absensi QR Code & LBS - Sistem Absensi Mahasiswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --success-color: #4ade80;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --light-color: #f8fafc;
            --dark-color: #1e293b;
            --gray-color: #64748b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f1f5f9;
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo i {
            font-size: 2.2rem;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            font-weight: 600;
        }
        
        .nav-menu {
            display: flex;
            gap: 25px;
        }
        
        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            padding: 8px 12px;
            border-radius: 6px;
        }
        
        .nav-menu a:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }
        
        .nav-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        /* Hero Section */
        .hero {
            padding: 60px 0;
            text-align: center;
            background-color: white;
            border-radius: 0 0 20px 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .hero h2 {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }
        
        .hero p {
            font-size: 1.2rem;
            color: var(--gray-color);
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .hero-badges {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        
        .badge {
            background-color: var(--light-color);
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .badge.qr {
            color: var(--primary-color);
            border-left: 4px solid var(--primary-color);
        }
        
        .badge.lbs {
            color: var(--accent-color);
            border-left: 4px solid var(--accent-color);
        }
        
        .badge.laravel {
            color: #ff2d20;
            border-left: 4px solid #ff2d20;
        }
        
        /* Main Dashboard */
        .dashboard-title {
            font-size: 2rem;
            color: var(--dark-color);
            margin-bottom: 30px;
            text-align: center;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .dashboard-card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
        }
        
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .card-title {
            font-size: 1.4rem;
            color: var(--dark-color);
        }
        
        .card-body {
            color: var(--gray-color);
        }
        
        .card-body ul {
            padding-left: 20px;
            margin-top: 10px;
        }
        
        .card-body li {
            margin-bottom: 8px;
        }
        
        /* Technology Section */
        .tech-section {
            margin-bottom: 60px;
        }
        
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
        
        .tech-card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
        }
        
        .tech-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .tech-card h3 {
            color: var(--dark-color);
            margin-bottom: 10px;
        }
        
        /* Workflow Section */
        .workflow-section {
            margin-bottom: 60px;
        }
        
        .workflow-steps {
            display: flex;
            flex-direction: column;
            gap: 30px;
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .workflow-steps:before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: var(--primary-color);
            opacity: 0.3;
        }
        
        .step {
            display: flex;
            gap: 20px;
            position: relative;
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 600;
            z-index: 1;
            flex-shrink: 0;
        }
        
        .step-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            flex-grow: 1;
        }
        
        /* Stats Section */
        .stats-section {
            margin-bottom: 60px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .stat-card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 40px 0 20px;
            margin-top: 40px;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .footer-logo i {
            font-size: 1.8rem;
            color: var(--accent-color);
        }
        
        .footer-column h3 {
            margin-bottom: 20px;
            color: var(--accent-color);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column ul li a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column ul li a:hover {
            color: white;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .dashboard-title {
                font-size: 1.6rem;
            }
            
            .workflow-steps:before {
                left: 25px;
            }
            
            .step-number {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-qrcode"></i>
                <h1>AbsensiQR</h1>
            </div>
            <nav class="nav-menu">
                <a href="#overview" class="active">Overview</a>
                <a href="#fitur">Fitur</a>
                <a href="#teknologi">Teknologi</a>
                <a href="#alur">Alur Kerja</a>
                <a href="#stats">Statistik</a>
                <a href="{{ route('login') }}">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Sistem Absensi Mahasiswa Berbasis QR Code & LBS</h2>
            <p>Solusi modern dan efisien untuk presensi mahasiswa menggunakan teknologi QR Code dan Location Based Service (LBS) yang dibangun dengan framework Laravel.</p>
            <div class="hero-badges">
                <div class="badge qr">
                    <i class="fas fa-qrcode"></i>
                    <span>QR Code Scanning</span>
                </div>
                <div class="badge lbs">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location Based Service</span>
                </div>
                <div class="badge laravel">
                    <i class="fab fa-laravel"></i>
                    <span>Laravel Framework</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Dashboard -->
    <div class="container">
        <!-- Overview Section -->
        <section id="overview" class="dashboard-section">
            <h2 class="dashboard-title">Dashboard Overview</h2>
            <div class="dashboard-grid">
                <div class="dashboard-card">
                    <div class="card-header">
                        <div class="card-icon" style="background-color: var(--primary-color);">
                            <i class="fas fa-university"></i>
                        </div>
                        <h3 class="card-title">Tentang Sistem</h3>
                    </div>
                    <div class="card-body">
                        <p>Sistem absensi mahasiswa yang mengintegrasikan dua metode verifikasi: QR Code untuk autentikasi dan LBS untuk memastikan kehadiran di lokasi yang ditentukan.</p>
                        <p>Dibangun dengan Laravel untuk backend yang tangguh, dengan antarmuka responsif yang mudah digunakan oleh dosen dan mahasiswa.</p>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <div class="card-header">
                        <div class="card-icon" style="background-color: var(--accent-color);">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="card-title">Tujuan Sistem</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Mengurangi kecurangan dalam proses absensi</li>
                            <li>Memastikan mahasiswa hadir di lokasi yang benar</li>
                            <li>Meningkatkan efisiensi proses presensi</li>
                            <li>Memberikan data absensi real-time</li>
                            <li>Menyediakan dashboard analitik untuk dosen</li>
                        </ul>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <div class="card-header">
                        <div class="card-icon" style="background-color: var(--success-color);">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="card-title">Pengguna Sistem</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Mahasiswa:</strong> Melakukan absensi via QR Code dan verifikasi lokasi</li>
                            <li><strong>Dosen:</strong> Membuat sesi absensi, generate QR Code, dan monitoring kehadiran</li>
                            <li><strong>Admin:</strong> Mengelola data pengguna, mata kuliah, dan laporan</li>
                            <li><strong>Kaprodi:</strong> Monitoring statistik kehadiran per mata kuliah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="fitur" class="dashboard-section">
            <h2 class="dashboard-title">Fitur Utama Sistem</h2>
            <div class="dashboard-grid">
                <div class="dashboard-card">
                    <div class="card-header">
                        <div class="card-icon" style="background-color: #f59e0b;">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <h3 class="card-title">QR Code Generator</h3>
                    </div>
                    <div class="card-body">
                        <p>Dosen dapat membuat kode QR unik untuk setiap sesi perkuliahan yang berisi informasi:</p>
                        <ul>
                            <li>ID Mata Kuliah</li>
                            <li>Waktu Sesi</li>
                            <li>Lokasi yang Diizinkan</li>
                            <li>Durasi Validitas QR Code</li>
                        </ul>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <div class="card-header">
                        <div class="card-icon" style="background-color: var(--danger-color);">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="card-title">LBS Verification</h3>
                    </div>
                    <div class="card-body">
                        <p>Sistem memverifikasi lokasi mahasiswa saat melakukan absensi:</p>
                        <ul>
                            <li>Deteksi koordinat GPS perangkat</li>
                            <li>Verifikasi radius dari lokasi kelas</li>
                            <li>Pencegahan absensi dari luar lokasi</li>
                            <li>Pengaturan toleransi radius (misal: 50m)</li>
                        </ul>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <div class="card-header">
                        <div class="card-icon" style="background-color: #8b5cf6;">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="card-title">Analytics Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Dashboard analitik untuk memantau statistik kehadiran:</p>
                        <ul>
                            <li>Presentase kehadiran per mata kuliah</li>
                            <li>Rekap kehadiran per mahasiswa</li>
                            <li>Grafik tren kehadiran</li>
                            <li>Ekspor data ke Excel/PDF</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Stack -->
        <section id="teknologi" class="tech-section">
            <h2 class="dashboard-title">Teknologi yang Digunakan</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-icon" style="color: #ff2d20;">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <h3>Laravel 10</h3>
                    <p>Framework PHP untuk backend yang tangguh dengan sistem MVC, authentication, dan API.</p>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon" style="color: #61dbfb;">
                        <i class="fab fa-react"></i>
                    </div>
                    <h3>React JS</h3>
                    <p>Library JavaScript untuk frontend yang interaktif dan responsif.</p>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon" style="color: #4db33d;">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>MySQL</h3>
                    <p>Database relasional untuk menyimpan data pengguna, absensi, dan mata kuliah.</p>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon" style="color: #ea4335;">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google Maps API</h3>
                    <p>API untuk mendapatkan koordinat lokasi dan verifikasi LBS.</p>
                </div>
            </div>
        </section>

        <!-- Workflow Section -->
        <section id="alur" class="workflow-section">
            <h2 class="dashboard-title">Alur Kerja Sistem</h2>
            <div class="workflow-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Dosen Membuat Sesi Absensi</h3>
                        <p>Dosen login ke dashboard, memilih mata kuliah, dan membuat sesi absensi baru. Sistem akan generate QR Code unik untuk sesi tersebut.</p>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>QR Code Ditampilkan di Kelas</h3>
                        <p>QR Code ditampilkan di proyektor atau monitor di dalam kelas. QR Code hanya valid dalam durasi waktu tertentu (misal: 15 menit).</p>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Mahasiswa Scan QR Code</h3>
                        <p>Mahasiswa membuka aplikasi mobile atau web, scan QR Code yang ditampilkan. Sistem akan membaca data dari QR Code.</p>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Verifikasi Lokasi (LBS)</h3>
                        <p>Sistem meminta izin akses lokasi, memverifikasi bahwa mahasiswa berada dalam radius yang ditentukan dari lokasi kelas.</p>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Absensi Tercatat</h3>
                        <p>Jika semua verifikasi berhasil, absensi mahasiswa tercatat di sistem dengan timestamp dan lokasi. Data tersedia real-time di dashboard dosen.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section id="stats" class="stats-section">
            <h2 class="dashboard-title">Statistik Sistem</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">2X</div>
                    <p>Lebih Efisien</p>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">99.8%</div>
                    <p>Akurasi Absensi</p>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">95%</div>
                    <p>Pengurangan Kecurangan</p>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">&lt;5s</div>
                    <p>Waktu Proses Absensi</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-column">
                    <div class="footer-logo">
                        <i class="fas fa-qrcode"></i>
                        <h3>AbsensiQR</h3>
                    </div>
                    <p>Sistem absensi mahasiswa modern berbasis QR Code dan Location Based Service (LBS) untuk meningkatkan akurasi dan efisiensi presensi di lingkungan kampus.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Fitur Utama</h3>
                    <ul>
                        <li><a href="#fitur">QR Code Generator</a></li>
                        <li><a href="#fitur">LBS Verification</a></li>
                        <li><a href="#fitur">Real-time Dashboard</a></li>
                        <li><a href="#fitur">Analytics & Reporting</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Teknologi</h3>
                    <ul>
                        <li><a href="#teknologi">Laravel Framework</a></li>
                        <li><a href="#teknologi">React JS</a></li>
                        <li><a href="#teknologi">MySQL Database</a></li>
                        <li><a href="#teknologi">Google Maps API</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Kontak</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> support@absensiqr.ac.id</li>
                        <li><i class="fas fa-phone"></i> (021) 1234-5678</li>
                        <li><i class="fas fa-map-marker-alt"></i> Universitas Teknologi Indonesia</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 AbsensiQR - Sistem Absensi Mahasiswa Berbasis QR Code & LBS. Dibangun dengan Laravel.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Update active nav link
                    document.querySelectorAll('.nav-menu a').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });
        
        // Highlight current section in navigation on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id], .dashboard-section');
            const scrollPosition = window.scrollY + 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                const sectionId = section.getAttribute('id');
                
                if(scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    document.querySelectorAll('.nav-menu a').forEach(link => {
                        link.classList.remove('active');
                        if(link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
        
        // Animate stats counter
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 100;
                const timer = setInterval(() => {
                    current += increment;
                    if(current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    
                    if(stat.textContent.includes('X')) {
                        stat.textContent = current.toFixed(1) + 'X';
                    } else if(stat.textContent.includes('%')) {
                        stat.textContent = current.toFixed(1) + '%';
                    } else if(stat.textContent.includes('s')) {
                        stat.textContent = '<' + Math.ceil(current) + 's';
                    } else {
                        stat.textContent = Math.ceil(current) + '%';
                    }
                }, 20);
            });
        }
        
        // Trigger stats animation when section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateStats();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        const statsSection = document.getElementById('stats');
        if(statsSection) {
            observer.observe(statsSection);
        }
        
        // Set active nav link on page load
        window.addEventListener('load', function() {
            if(window.location.hash) {
                const activeLink = document.querySelector(`.nav-menu a[href="${window.location.hash}"]`);
                if(activeLink) {
                    document.querySelectorAll('.nav-menu a').forEach(link => {
                        link.classList.remove('active');
                    });
                    activeLink.classList.add('active');
                }
            }
        });
    </script>
</body>
</html>
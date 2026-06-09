<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portfolio - Milan Zhahira</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* BASE RESET & VARIABLES */
        :root {
            --primary: #3b82f6;
            --primary-gradient: linear-gradient(135deg, #3b82f6, #6366f1);
            --dark: #1e293b; 
            --slate: #475569;
            --light-bg: #eef2ff; 
            --card-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.08);
            --card-hover-shadow: 0 20px 40px -15px rgba(59, 130, 246, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--light-bg);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* NAVBAR HEADER */
        .dashboard-header {
            background: white;
            padding: 20px 5%;
            box-shadow: 0 4px 30px rgba(59, 130, 246, 0.03);
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 26px;
            font-weight: 800;
            color: var(--dark);
            letter-spacing: -0.5px;
        }

        .logo span {
            color: var(--primary);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            align-items: center;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--slate);
            font-size: 15px;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        .logout-wrapper {
            width: auto;
        }

        .logout-btn {
            width: auto;
            background: #dbeafe;
            color: var(--primary);
            border: 1px solid rgba(59, 130, 246, 0.1);
            padding: 10px 22px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: var(--primary-gradient);
            color: white;
            border-color: transparent;
            box-shadow: 0 8px 166px rgba(59, 130, 246, 0.1);
        }

        /* LAYOUT MAIN CONTENT */
        .main-content {
            width: 100%;
        }

        section {
            padding: 60px 5%;
        }

        .section-title {
            font-size: 34px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title i {
            color: var(--primary);
            font-size: 28px;
        }

        .section-subtitle {
            font-size: 15px;
            color: var(--slate);
            max-width: 700px;
            margin-bottom: 45px;
            line-height: 1.6;
            padding-left: 2px;
        }

        /* HERO SECTION */
        .hero {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline:hover {
            background: #eff6ff;
            transform: translateY(-2px);
        }

        /* PROFILE IMAGE PORTRAIT SQUARE FLAT CORNERS */
        .hero-image {
            position: relative;
        }

        .hero-image::after {
            content: '';
            position: absolute;
            inset: -4px;
            background: var(--primary-gradient);
            border-radius: 20px; 
            z-index: -1;
        }

        .hero-image img {
            display: block;
            width: 200px;        
            height: 260px;       
            object-fit: cover;
            border-radius: 20px; 
            border: 6px solid white;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            background-color: #cbd5e1;
        }

        .greeting-text {
            font-size: 22px;
            font-weight: 600;
            color: var(--slate);
            margin-bottom: 6px;
        }

        .hero-text h1 {
            font-size: 46px;
            font-weight: 800;
            color: var(--dark);
            letter-spacing: -1px;
            margin-bottom: 8px;
        }

        .hero-text h1 span {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-text h3 {
            font-size: 20px;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .short-bio {
            color: var(--slate);
            font-size: 15px;
            line-height: 1.6;
        }

        /* STATS BAR */
        .stats-bar {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin: 0 5% 40px 5%;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .stat-item {
            text-align: center;
            position: relative;
        }

        .stat-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 20%;
            width: 1px;
            height: 60%;
            background: #e2e8f0;
        }

        .stat-item h2 {
            font-size: 32px;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-item p {
            font-size: 13px;
            color: var(--slate);
            font-weight: 600;
        }

        /* ABOUT ME */
        #about {
            background: white;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .about-left h3 {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 14px;
        }

        .about-left p {
            color: var(--slate);
            line-height: 1.8;
            font-size: 15px;
        }

        .about-meta-box {
            background: var(--light-bg);
            padding: 30px;
            border-radius: 18px;
            border: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .meta-profile-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .meta-profile-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .meta-profile-item i {
            font-size: 20px;
            color: var(--primary);
            width: 24px;
            text-align: center;
        }

        .meta-profile-text label {
            display: block;
            font-size: 11px;
            text-transform: uppercase;
            color: var(--slate);
            font-weight: 700;
            margin-bottom: 2px;
        }

        .meta-profile-text p {
            font-size: 15px;
            color: var(--dark);
            font-weight: 600;
        }

        /* EXPERIENCE TIMELINE */
        .timeline {
            position: relative;
        }

        .timeline-item {
            position: relative;
            padding-left: 40px;
            margin-bottom: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 18px;
            top: 0;
            width: 20px;
            height: 100%;
            border-left: 2px dashed #cbd5e1;
        }

        .timeline-item:last-child::before {
            display: none;
        }

        .timeline-dot {
            position: absolute;
            left: 10px;
            top: 4px;
            width: 16px;
            height: 16px;
            background: white;
            border: 4px solid var(--primary);
            border-radius: 50%;
            z-index: 2;
        }

        .timeline-content {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .timeline-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .badge-date {
            font-size: 12px;
            font-weight: 600;
            color: var(--primary);
            background: #eff6ff;
            padding: 4px 12px;
            border-radius: 30px;
        }

        /* SKILLS */
        #skills {
            background: white;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .skill-card {
            background: var(--light-bg);
            padding: 22px;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
        }

        .skill-cat {
            font-size: 10px;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--primary);
            background: #dbeafe;
            padding: 3px 8px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .progress-track {
            background: #cbd5e1;
            height: 6px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-fill {
            background: var(--primary-gradient);
            height: 100%;
        }

        /* PROJECTS */
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .project-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-top: 4px solid var(--primary);
        }

        .project-content {
            padding: 25px;
        }

        .project-tech {
            font-size: 12px;
            font-weight: 600;
            color: #6366f1;
            background: #eeebff;
            padding: 4px 10px;
            border-radius: 6px;
            display: inline-block;
            margin: 12px 0 15px 0;
        }

        .project-links {
            display: flex;
            gap: 20px;
            border-top: 1px solid #e2e8f0;
            padding-top: 15px;
            margin-top: 5px;
        }

        .project-links a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            color: var(--slate);
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .project-links a:hover {
            color: var(--primary);
        }

        /* CONTACT */
        #contact {
            background: var(--dark);
            color: white;
            border-radius: 24px 24px 0 0;
        }

        #contact .section-title { color: white; }
        #contact .section-title i { color: #3b82f6; }
        #contact .section-subtitle { color: #94a3b8; }

        .contact-wrapper {
            display: flex;
            flex-direction: column; 
            gap: 15px; 
        }

        .contact-box {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px;
            border-radius: 14px;
            width: 100%; 
        }

        /* RESPONSIVE SUB-SYSTEM */
        @media (max-width: 768px) {
            .dashboard-header { flex-direction: column; gap: 15px; text-align: center; }
            nav ul { gap: 15px; flex-wrap: wrap; justify-content: center; }
            .hero { flex-direction: column-reverse; text-align: center; }
            .about-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>

    <div class="dashboard-header">
        <div class="logo">Milan<span>.dev</span></div>

        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="logout-wrapper">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout Account</button>
            </form>
        </div>
    </div>

    <div class="main-content">
        
        <section id="home" class="hero">
            <div class="hero-text">
                <p class="greeting-text">Hello, I am</p> 
                <h1><span>Milan Zhahira</span></h1>
                <h3>Laravel Web Developer</h3>
                
                <p class="short-bio">
                    Mendedikasikan keahlian penuh untuk membangun arsitektur website modern berskala tinggi menggunakan Laravel, PHP, dan MySQL dengan rancangan modular yang bersih.
                </p>

                <div class="btn-group">
                    <a href="#contact" class="btn btn-primary">Connect With Me</a>
                    <a href="#project" class="btn btn-outline">Explore Projects</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="{{ asset('img/milan.jpg') }}" 
                     onerror="this.onerror=null; this.src='{{ asset('img/profile.jpeg') }}'; this.removeAttribute('onerror');" 
                     alt="Profile Milan Zhahira">
            </div>
        </section>

        <div class="stats-bar">
            <div class="stat-item">
                <h2>20+</h2>
                <p>Successful Projects</p>
            </div>
            <div class="stat-item">
                <h2>2+</h2>
                <p>Years Experience</p>
            </div>
            <div class="stat-item">
                <h2>15+</h2>
                <p>Happy Clients</p>
            </div>
        </div>

        <section id="about">
            <h2 class="section-title"><i class="fa-solid fa-user"></i>About Me</h2>
            <p class="section-subtitle">Mengenal lebih dekat latar belakang pendidikan dan fokus keahlian saya.</p>

            <div class="about-grid">
                <div class="about-left">
                    <h3>Tentang Jurusan PPLG</h3>
                    <p>
                        Pengembangan Perangkat Lunak dan Gim (PPLG) merupakan sebuah kompetensi keahlian yang mendalami seluruh proses pengelolaan pemrograman, pembuatan, pemeliharaan, hingga manajemen kualitas perangkat lunak. 
                    </p>
                    <br>
                    <p>
                        Fokus utama dari program ini adalah membekali kemampuan untuk merancang arsitektur aplikasi backend yang kokoh, mengelola database relasional, hingga mengimplementasikan desain antarmuka modern yang responsif dan berorientasi pada kebutuhan pengguna industri.
                    </p>
                </div>
                
                <div class="about-meta-box">
                    <div class="meta-profile-item">
                        <i class="fa-solid fa-id-card"></i>
                        <div class="meta-profile-text">
                            <label>Nama Lengkap</label>
                            <p>Milan Zhahira</p>
                        </div>
                    </div>
                    <div class="meta-profile-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div class="meta-profile-text">
                            <label>Kelas</label>
                            <p>XI PPLG 4</p> 
                        </div>
                    </div>
                    <div class="meta-profile-item">
                        <i class="fa-solid fa-school"></i>
                        <div class="meta-profile-text">
                            <label>Sekolah</label>
                            <p>SMKN 4 Tasikmalaya</p> 
                        </div>
                    </div>
                    <div class="meta-profile-item">
                        <i class="fa-solid fa-code"></i>
                        <div class="meta-profile-text">
                            <label>Kompetensi Keahlian</label>
                            <p>Pengembangan Perangkat Lunak & Gim (PPLG)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience">
            <h2 class="section-title"><i class="fa-solid fa-briefcase"></i>Experience</h2>
            <p class="section-subtitle">Rekam jejak kontribusi profesional saya di dunia pengembangan aplikasi.</p>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div>
                                <h3 style="font-size:18px; font-weight:700;">Backend Developer</h3>
                                <h4 style="font-size:14px; color:var(--slate); font-weight:500;">PT. Solusi Teknologi Nusantara</h4>
                            </div>
                            <span class="badge-date">Jan 2024 - Sekarang</span>
                        </div>
                        <p style="font-size:14px; color:var(--slate); line-height:1.6; margin-top: 10px;">
                            Merancang manajemen RESTful API terintegrasi menggunakan ekosistem Laravel. Menangani skalabilitas data dan optimasi struktur *query execution time* pada server database MySQL perusahaan.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div>
                                <h3 style="font-size:18px; font-weight:700;">Fullstack Web Developer</h3>
                                <h4 style="font-size:14px; color:var(--slate); font-weight:500;">School Project / Tugas Akhir PPLG</h4>
                            </div>
                            <span class="badge-date">Ags 2025 - Des 2025</span>
                        </div>
                        <p style="font-size:14px; color:var(--slate); line-height:1.6; margin-top: 10px;">
                            Mengembangkan aplikasi web interaktif berbasis client-server untuk keperluan internal sekolah. Bertanggung jawab penuh atas perancangan database relasional dan integrasi komponen antarmuka web.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2 class="section-title"><i class="fa-solid fa-code"></i>Skills</h2>
            <p class="section-subtitle">Kemampuan teknis dan tingkat penguasaan kompetensi saya di bidang pemrograman.</p>

            <div class="skills-grid">
                <div class="skill-card">
                    <span class="skill-cat">Backend</span>
                    <h3 style="font-size:16px; font-weight:700; margin-bottom:8px;">Laravel Framework</h3>
                    <div class="progress-track"><div class="progress-fill" style="width: 85%;"></div></div>
                </div>
                <div class="skill-card">
                    <span class="skill-cat">Language</span>
                    <h3 style="font-size:16px; font-weight:700; margin-bottom:8px;">PHP Programming</h3>
                    <div class="progress-track"><div class="progress-fill" style="width: 80%;"></div></div>
                </div>
                <div class="skill-card">
                    <span class="skill-cat">Database</span>
                    <h3 style="font-size:16px; font-weight:700; margin-bottom:8px;">MySQL Relational</h3>
                    <div class="progress-track"><div class="progress-fill" style="width: 80%;"></div></div>
                </div>
            </div>
        </section>

        <section id="project">
            <h2 class="section-title"><i class="fa-solid fa-folder-open"></i>My Projects</h2>
            <p class="section-subtitle">Koleksi hasil karya aplikasi terpilih yang telah selesai maupun yang sedang dikembangkan.</p>

            <div class="project-grid">
                <div class="project-card">
                    <div class="project-content">
                        <h3 style="font-size:20px; font-weight:700;"><i class="fa-solid fa-cash-register" style="color: var(--primary); margin-right: 8px;"></i> Point of Sale App</h3>
                        <p style="font-size:13px; color:var(--slate); margin: 4px 0 10px 0;">Independent Project | Developer</p>
                        <p style="font-size:14px; color:var(--slate); line-height:1.5;">Membuat aplikasi Point of Sale (POS) untuk mempermudah pencatatan transaksi penjualan, manajemen stok barang secara real-time, dan pembuatan laporan keuangan otomatis.</p>
                        <span class="project-tech">Laravel, MySQL, Bootstrap</span>
                        
                        <div class="project-links">
                            <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
                            <a href="https://google.com" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Live Demo</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <h3 style="font-size:20px; font-weight:700;"><i class="fa-solid fa-gauge-high" style="color: var(--primary); margin-right: 8px;"></i> Filament Admin Dashboard</h3>
                        <p style="font-size:13px; color:var(--slate); margin: 4px 0 10px 0;">School / Independent Project | Developer</p>
                        <p style="font-size:14px; color:var(--slate); line-height:1.5;">Membuat aplikasi back-office dan panel admin modern menggunakan Filament PHP dan Laravel untuk manajemen data yang cepat, aman, efisien, serta didukung fitur ekspor laporan yang dinamis.</p>
                        <span class="project-tech">Laravel, Filament PHP, Tailwind</span>
                        
                        <div class="project-links">
                            <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
                            <a href="https://google.com" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2 class="section-title"><i class="fa-solid fa-phone"></i>Contact Me</h2>
            <p class="section-subtitle">Jangan ragu hubungi saya untuk membuka diskusi kerja sama maupun kolaborasi proyek teknologi.</p>

            <div class="contact-wrapper">
                <div class="contact-box">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                        <i class="fa-solid fa-envelope" style="color: #3b82f6; font-size: 16px;"></i>
                        <span style="color: #94a3b8; font-weight: 600;">Email Address</span>
                    </div>
                    <a href="mailto:milan@example.com" target="_blank" style="text-decoration: none; color: white; font-weight: 600; transition: color 0.2s;">
                        Email Saya
                    </a>
                </div>

                <div class="contact-box">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                        <i class="fa-solid fa-phone" style="color: #25d366; font-size: 16px;"></i>
                        <span style="color: #94a3b8; font-weight: 600;">WhatsApp / Handphone</span>
                    </div>
                    <a href="https://wa.me/6281234567890" target="_blank" style="text-decoration: none; color: white; font-weight: 600; transition: color 0.2s;">
                        WhatsApp Saya
                    </a>
                </div>

                <div class="contact-box">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                        <i class="fa-brands fa-instagram" style="color: #f43f5e; font-size: 18px;"></i>
                        <span style="color: #94a3b8; font-weight: 600;">Instagram</span>
                    </div>
                    <a href="https://instagram.com/username_kamu" target="_blank" style="text-decoration: none; color: white; font-weight: 600; transition: color 0.2s;">
                        Instagram Saya
                    </a>
                </div>
            </div>
        </section>

    </div>

</body>
</html>
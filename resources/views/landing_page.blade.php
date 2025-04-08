<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Sismenkes | Sistem Manajemen Kesehatan</title>
    <link rel="icon" href="{{ asset('images/heart-pulse-solid.svg') }}">
    <link rel="shortcut icon" href="{{ asset('images/heart-pulse-solid.svg') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0d6efd;
            --primary-dark: #0a58ca;
            --secondary-color: #6c757d;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --section-padding: 5rem 0;
            --card-border-radius: 0.75rem;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
            scroll-behavior: smooth;
            scroll-padding-top: 70px;
            /* Ensures scrolling stops below the fixed navbar */
        }

        html {
            scroll-behavior: smooth;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        }

        .section-padding {
            padding: var(--section-padding);
        }

        .section-margin {
            margin: 6rem 0;
        }

        .section-title {
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            transform: translateX(-50%);
        }

        .section-title p {
            max-width: 700px;
            margin: 0 auto;
        }

        .card {
            border: none;
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .navbar {
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: var(--transition);
        }

        .nav-link.active {
            color: white !important;
            font-weight: 600;
        }

        .btn {
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .hero-section {
            padding: 8rem 0 6rem;
            position: relative;
        }

        .hero-section h1 {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .stats-card {
            border-radius: var(--card-border-radius);
            padding: 1.5rem;
            height: 100%;
        }

        .stats-card .icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .feature-card {
            height: 100%;
        }

        .feature-card .card-body {
            padding: 1.5rem;
        }

        .testimonial-card {
            height: 100%;
            padding: 2rem;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--primary-color);
        }

        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            position: relative;
            overflow: hidden;
        }

        .cta-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTI4MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2ZmZmZmZiI+PHBhdGggZD0iTTEyODAgMy40QzEwNTAuNTkgMTggMTAxOS40IDg0Ljg5IDczNC40MiA4NC44OWMtMzIwIDAtMzIwLTg0LjMtNjQwLTg0LjNDNTkuNC41OSAyOC4yIDEuNiAwIDMuNFYxNDBoMTI4MHoiIGZpbGwtb3BhY2l0eT0iLjMiLz48cGF0aCBkPSJNMCAyNC4zMWM0My40Ni01LjY5IDk0LjU2LTkuMjUgMTU4LjQyLTkuMjUgMzIwIDAgMzIwIDg5LjI0IDY0MCA4OS4yNCAyNTYuMTMgMCAzMDcuMjgtNTcuMTYgNDgxLjU4LTgwVjE0MEgweiIgZmlsbC1vcGFjaXR5PSIuNSIvPjxwYXRoIGQ9Ik0xMjgwIDUxLjc2Yy0yMDEgMTIuNDktMjQyLjQzIDUzLjQtNTEzLjU4IDUzLjQtMzIwIDAtMzIwLTU3LTY0MC01Ny00OC44NS4wMS05MC4yMSAxLjM1LTEyNi40MiAzLjZWMTQwaDEyODB6Ii8+PC9nPjwvc3ZnPg==');
            background-size: 100% 100px;
            top: -50px;
            opacity: 0.3;
        }

        .footer {
            padding: 5rem 0 2rem;
            background-color: #212529;
        }

        .footer h3,
        .footer h4 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: var(--transition);
            display: block;
            margin-bottom: 0.75rem;
        }

        .footer-link:hover {
            color: white;
            transform: translateX(5px);
        }

        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .table-container {
            border-radius: var(--card-border-radius);
            overflow: hidden;
        }

        .table th {
            font-weight: 600;
            border-top: none;
        }

        .dept-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: white;
        }

        .bg-cardiology {
            background-color: #ff6b6b;
        }

        .bg-neurology {
            background-color: #48dbfb;
        }

        .bg-pediatrics {
            background-color: #1dd1a1;
        }

        .bg-orthopedics {
            background-color: #feca57;
        }

        .bg-oncology {
            background-color: #5f27cd;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 6rem 0 4rem;
                text-align: center;
            }

            .section-padding {
                padding: 3rem 0;
            }

            .section-margin {
                margin: 3rem 0;
            }

            .section-title {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-heartbeat me-2"></i>SISMENKES
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#analytics">Analitik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex ms-lg-3">
                    @auth
                        <a href="{{ auth()->user()->role === 'dokter' ? route('dokter.dashboard') : route('pasien.dashboard') }}"
                            class="btn btn-light text-primary">Dashboard</a>
                    @else
                        <a href="/login" class="btn btn-outline-light me-2">Masuk</a>
                        <a href="/register" class="btn btn-light text-primary">Daftar</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section bg-gradient-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold">Sistem Manajemen Kesehatan Modern</h1>
                    <p class="lead mb-4">Tingkatkan efisiensi operasional dan kualitas pelayanan kesehatan dengan solusi
                        manajemen terpadu kami.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#features" class="btn btn-light text-primary btn-lg me-2">
                            Mulai Sekarang <i class="fas fa-chevron-right ms-2"></i>
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">
                            Minta Demo
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118" alt="Healthcare Dashboard"
                        class="img-fluid rounded-3 shadow-lg" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <div class="icon bg-primary-subtle mx-auto">
                                <i class="fas fa-hospital text-primary fa-2x"></i>
                            </div>
                            <h3 class="h2 fw-bold mt-3">500+</h3>
                            <p class="text-muted mb-0">Rumah Sakit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <div class="icon bg-success-subtle mx-auto">
                                <i class="fas fa-user-md text-success fa-2x"></i>
                            </div>
                            <h3 class="h2 fw-bold mt-3">10,000+</h3>
                            <p class="text-muted mb-0">Tenaga Medis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <div class="icon bg-warning-subtle mx-auto">
                                <i class="fas fa-calendar-check text-warning fa-2x"></i>
                            </div>
                            <h3 class="h2 fw-bold mt-3">25,000+</h3>
                            <p class="text-muted mb-0">Janji Temu Harian</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <div class="icon bg-danger-subtle mx-auto">
                                <i class="fas fa-shield-alt text-danger fa-2x"></i>
                            </div>
                            <h3 class="h2 fw-bold mt-3">100%</h3>
                            <p class="text-muted mb-0">Keamanan Data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-padding bg-light">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="h1">Manajemen Kesehatan Komprehensif</h2>
                <p class="lead text-muted">
                    Platform kami menawarkan semua yang Anda butuhkan untuk mengelola fasilitas kesehatan secara efisien
                </p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842" class="card-img-top"
                            alt="Manajemen Pasien">
                        <div class="card-body">
                            <h3 class="h4 card-title">Manajemen Pasien</h3>
                            <p class="card-text text-muted">Sederhanakan pendaftaran pasien, pelacakan riwayat medis,
                                dan penjadwalan janji temu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef" class="card-img-top"
                            alt="Rekam Medis Elektronik">
                        <div class="card-body">
                            <h3 class="h4 card-title">Rekam Medis Elektronik</h3>
                            <p class="card-text text-muted">Rekam medis elektronik yang aman dan mudah diakses dengan
                                riwayat pasien yang komprehensif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f" class="card-img-top"
                            alt="Penagihan & Asuransi">
                        <div class="card-body">
                            <h3 class="h4 card-title">Penagihan & Asuransi</h3>
                            <p class="card-text text-muted">Proses penagihan yang disederhanakan dan manajemen klaim
                                asuransi untuk penyedia layanan kesehatan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Section -->
    <section id="analytics" class="section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="h1">Analitik & Wawasan</h2>
                <p class="lead text-muted">
                    Dapatkan wawasan berharga tentang operasional fasilitas kesehatan Anda
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-white border-0 py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="h5 mb-0">Kunjungan Pasien</h3>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Laporan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <p class="h2 fw-bold mb-0">8,240</p>
                                    <p class="text-muted">Kunjungan Pasien Bulanan</p>
                                </div>
                                <div class="text-end">
                                    <p class="text-success mb-0 d-flex align-items-center justify-content-end">
                                        <i class="fas fa-arrow-up me-1"></i> 12.5%
                                    </p>
                                    <p class="text-muted small">Sejak bulan lalu</p>
                                </div>
                            </div>
                            <div class="chart-container mb-4">
                                <canvas id="visitors-chart"></canvas>
                            </div>
                            <div class="d-flex justify-content-end">
                                <span class="me-3 d-flex align-items-center">
                                    <span class="d-inline-block me-2 rounded-circle bg-primary"
                                        style="width: 12px; height: 12px;"></span>
                                    Bulan Ini
                                </span>
                                <span class="d-flex align-items-center">
                                    <span class="d-inline-block me-2 rounded-circle bg-secondary"
                                        style="width: 12px; height: 12px;"></span>
                                    Bulan Lalu
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-white border-0 py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="h5 mb-0">Performa Departemen</h3>
                                <div>
                                    <button class="btn btn-sm btn-outline-secondary me-2">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-container">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-3">Departemen</th>
                                            <th>Pasien</th>
                                            <th>Pertumbuhan</th>
                                            <th class="text-end pe-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="dept-icon bg-cardiology me-2">C</div>
                                                    <span>Kardiologi</span>
                                                </div>
                                            </td>
                                            <td>1,245</td>
                                            <td>
                                                <span class="text-success d-flex align-items-center">
                                                    <i class="fas fa-arrow-up me-1"></i> 12%
                                                </span>
                                            </td>
                                            <td class="text-end pe-3">
                                                <a href="#" class="btn btn-sm btn-link text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="dept-icon bg-neurology me-2">N</div>
                                                    <span>Neurologi</span>
                                                </div>
                                            </td>
                                            <td>986</td>
                                            <td>
                                                <span class="text-success d-flex align-items-center">
                                                    <i class="fas fa-arrow-up me-1"></i> 8.5%
                                                </span>
                                            </td>
                                            <td class="text-end pe-3">
                                                <a href="#" class="btn btn-sm btn-link text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="dept-icon bg-pediatrics me-2">P</div>
                                                    <span>Pediatri</span>
                                                </div>
                                            </td>
                                            <td>1,430</td>
                                            <td>
                                                <span class="text-danger d-flex align-items-center">
                                                    <i class="fas fa-arrow-down me-1"></i> 0.5%
                                                </span>
                                            </td>
                                            <td class="text-end pe-3">
                                                <a href="#" class="btn btn-sm btn-link text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="dept-icon bg-orthopedics me-2">O</div>
                                                    <span>Ortopedi</span>
                                                </div>
                                            </td>
                                            <td>892</td>
                                            <td>
                                                <span class="text-danger d-flex align-items-center">
                                                    <i class="fas fa-arrow-down me-1"></i> 3%
                                                </span>
                                            </td>
                                            <td class="text-end pe-3">
                                                <a href="#" class="btn btn-sm btn-link text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="dept-icon bg-oncology me-2">O</div>
                                                    <span>Onkologi</span>
                                                </div>
                                            </td>
                                            <td>654</td>
                                            <td>
                                                <span class="text-success d-flex align-items-center">
                                                    <i class="fas fa-arrow-up me-1"></i> 15%
                                                </span>
                                            </td>
                                            <td class="text-end pe-3">
                                                <a href="#" class="btn btn-sm btn-link text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="section-padding bg-light">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="h1">Dipercaya oleh Profesional Kesehatan</h2>
                <p class="lead text-muted">
                    Lihat apa yang dikatakan penyedia layanan kesehatan tentang sistem manajemen kami
                </p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                            </div>
                            <p class="card-text fst-italic mb-4">"Sistem ini telah mengubah cara kami mengelola data
                                pasien dan merampingkan seluruh operasi kami."</p>
                            <div class="d-flex align-items-center">
                                <div class="testimonial-img me-3">SJ</div>
                                <div>
                                    <p class="fw-bold mb-0">Dr. Sarah Johnson</p>
                                    <p class="text-muted small mb-0">Kepala Petugas Medis</p>
                                    <p class="text-muted small mb-0">RS Metro General</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                            </div>
                            <p class="card-text fst-italic mb-4">"Kemampuan analitik telah memberi kami wawasan yang
                                membantu meningkatkan perawatan pasien dan mengurangi waktu tunggu."</p>
                            <div class="d-flex align-items-center">
                                <div class="testimonial-img me-3">MC</div>
                                <div>
                                    <p class="fw-bold mb-0">Dr. Michael Chen</p>
                                    <p class="text-muted small mb-0">Direktur Rumah Sakit</p>
                                    <p class="text-muted small mb-0">Pusat Medis Pasifik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="fas fa-quote-left fa-2x text-primary opacity-25"></i>
                            </div>
                            <p class="card-text fst-italic mb-4">"Implementasi berjalan lancar dan tim dukungan telah
                                luar biasa dalam membantu kami menyesuaikan sistem."</p>
                            <div class="d-flex align-items-center">
                                <div class="testimonial-img me-3">AR</div>
                                <div>
                                    <p class="fw-bold mb-0">Amanda Rodriguez</p>
                                    <p class="text-muted small mb-0">Direktur IT</p>
                                    <p class="text-muted small mb-0">Jaringan Kesehatan Riverside</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container text-center">
            <h2 class="h1 text-white mb-4">Siap untuk mengubah manajemen kesehatan Anda?</h2>
            <p class="lead text-white mb-5 mx-auto" style="max-width: 700px; opacity: 0.9;">
                Bergabunglah dengan ribuan penyedia layanan kesehatan yang telah meningkatkan operasi dan perawatan
                pasien mereka dengan sistem kami.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="btn btn-light btn-lg px-4 fw-medium">
                    Mulai Uji Coba Gratis
                </a>
                <a href="#" class="btn btn-outline-light btn-lg px-4 fw-medium">
                    Hubungi Sales
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h3 class="h5 text-white">SISMENKES</h3>
                    <p class="text-muted">
                        Sistem manajemen kesehatan komprehensif untuk fasilitas medis modern.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h4 class="h6 text-white">Produk</h4>
                    <ul class="list-unstyled">
                        <li><a href="#features" class="footer-link">Fitur</a></li>
                        <li><a href="#" class="footer-link">Harga</a></li>
                        <li><a href="#" class="footer-link">Studi Kasus</a></li>
                        <li><a href="#" class="footer-link">Dokumentasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h4 class="h6 text-white">Perusahaan</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Tentang Kami</a></li>
                        <li><a href="#" class="footer-link">Karir</a></li>
                        <li><a href="#" class="footer-link">Blog</a></li>
                        <li><a href="#contact" class="footer-link">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h4 class="h6 text-white">Legal</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Kebijakan Privasi</a></li>
                        <li><a href="#" class="footer-link">Syarat Layanan</a></li>
                        <li><a href="#" class="footer-link">Kepatuhan HIPAA</a></li>
                        <li><a href="#" class="footer-link">Keamanan</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary mt-5 pt-4 text-center text-muted">
                Copyright &copy; 2025 <a href="https://bengkelkoding.dinus.ac.id">Bengkel Koding</a>.
                All rights reserved.
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom Scripts -->
    <script>
        $(function() {
            // Visitors Chart
            var visitorsChartCanvas = document.getElementById('visitors-chart').getContext('2d')

            var visitorsChartData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                        label: 'Bulan Ini',
                        backgroundColor: 'rgba(13, 110, 253, 0.1)',
                        borderColor: 'rgba(13, 110, 253, 0.8)',
                        pointRadius: 3,
                        pointBackgroundColor: 'rgba(13, 110, 253, 1)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgba(13, 110, 253, 1)',
                        tension: 0.4,
                        fill: true,
                        data: [28, 48, 40, 19, 86, 27, 90, 85, 92, 70, 86, 97]
                    },
                    {
                        label: 'Bulan Lalu',
                        backgroundColor: 'rgba(108, 117, 125, 0.1)',
                        borderColor: 'rgba(108, 117, 125, 0.8)',
                        pointRadius: 3,
                        pointBackgroundColor: 'rgba(108, 117, 125, 1)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgba(108, 117, 125, 1)',
                        tension: 0.4,
                        fill: true,
                        data: [65, 59, 80, 81, 56, 55, 40, 50, 45, 30, 20, 10]
                    }
                ]
            }

            var visitorsChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            borderDash: [2],
                            drawBorder: false
                        }
                    }
                }
            }

            new Chart(visitorsChartCanvas, {
                type: 'line',
                data: visitorsChartData,
                options: visitorsChartOptions
            });

            // Active link highlighting
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const sections = document.querySelectorAll('section[id]');

            function highlightNavLink() {
                let scrollPosition = window.scrollY;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');

                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === '#' + sectionId) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', highlightNavLink);

            // Smooth scrolling for navbar links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 70,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            navbarCollapse.classList.remove('show');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>

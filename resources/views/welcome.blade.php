<x-layout>
    <div class="container-fluid px-4 py-5">

        {{-- HERO SECTION --}}
        <div class="hero-section position-relative overflow-hidden rounded-4 p-5 mb-5 text-white">

            <div class="hero-blur hero-blur-1"></div>
            <div class="hero-blur hero-blur-2"></div>

            <div class="row align-items-center position-relative">
                <div class="col-lg-7">
                    <span class="badge bg-light text-primary px-3 py-2 rounded-pill mb-3 fw-semibold">
                        <i class="bi bi-stars me-1"></i> Sistem Informasi Akademik
                    </span>

                    <h1 class="display-4 fw-bold mb-3 hero-title">
                        Kelola Fakultas & Program Studi
                    </h1>

                    <p class="lead text-light opacity-75 mb-4">
                        Platform modern untuk manajemen data akademik kampus
                        dengan tampilan interaktif dan responsif.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="/fakultas" class="btn btn-light btn-lg px-4 shadow-sm btn-jedag">
                            <i class="bi bi-building me-2"></i>Data Fakultas
                        </a>

                        <a href="/prodi" class="btn btn-outline-light btn-lg px-4 btn-jedag">
                            <i class="bi bi-book me-2"></i>Program Studi
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 text-center d-none d-lg-block">
                    <div class="floating-card">
                        <div class="glass-card p-4">
                            <div class="mb-3">
                                <div class="icon-box mx-auto">
                                    <i class="bi bi-mortarboard-fill"></i>
                                </div>
                            </div>

                            <h4 class="fw-bold">Dashboard Akademik</h4>

                            <p class="small text-light opacity-75 mb-4">
                                Sistem cepat, modern, dan mudah digunakan.
                            </p>

                            <div class="d-flex justify-content-center gap-3">
                                <div class="mini-stat">
                                    <h5>{{ App\Models\Fakultas::count() }}</h5>
                                    <small>Fakultas</small>
                                </div>

                                <div class="mini-stat">
                                    <h5>{{ App\Models\Prodi::count() }}</h5>
                                    <small>Prodi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- STATS --}}
        <div class="row g-4 mb-5">

            <div class="col-md-3 col-sm-6">
                <div class="card border-0 stat-card shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Fakultas</p>
                                <h2 class="fw-bold text-primary counter">
                                    {{ App\Models\Fakultas::count() }}
                                </h2>
                            </div>

                            <div class="stat-icon bg-primary-subtle text-primary">
                                <i class="bi bi-building"></i>
                            </div>
                        </div>

                        <div class="progress mt-3" style="height: 6px;">
                            <div class="progress-bar bg-primary progress-animated"
                                 style="width: 85%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card border-0 stat-card shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Prodi</p>
                                <h2 class="fw-bold text-success counter">
                                    {{ App\Models\Prodi::count() }}
                                </h2>
                            </div>

                            <div class="stat-icon bg-success-subtle text-success">
                                <i class="bi bi-book"></i>
                            </div>
                        </div>

                        <div class="progress mt-3" style="height: 6px;">
                            <div class="progress-bar bg-success progress-animated"
                                 style="width: 75%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card border-0 stat-card shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Dekan</p>
                                <h2 class="fw-bold text-info counter">
                                    {{ App\Models\Fakultas::count() }}
                                </h2>
                            </div>

                            <div class="stat-icon bg-info-subtle text-info">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        </div>

                        <div class="progress mt-3" style="height: 6px;">
                            <div class="progress-bar bg-info progress-animated"
                                 style="width: 65%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card border-0 stat-card shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Kaprodi</p>
                                <h2 class="fw-bold text-warning counter">
                                    {{ App\Models\Prodi::count() }}
                                </h2>
                            </div>

                            <div class="stat-icon bg-warning-subtle text-warning">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="progress mt-3" style="height: 6px;">
                            <div class="progress-bar bg-warning progress-animated"
                                 style="width: 90%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- FEATURE CARD --}}
        <div class="row g-4 mb-5">

            <div class="col-lg-4">
                <div class="card feature-card border-0 shadow-sm h-100">
                    <div class="card-body p-4 text-center">
                        <div class="feature-icon bg-primary-subtle text-primary mx-auto mb-4">
                            <i class="bi bi-database-fill"></i>
                        </div>

                        <h5 class="fw-bold mb-3">Manajemen Data</h5>

                        <p class="text-muted">
                            Kelola data fakultas dan program studi dengan tampilan modern.
                        </p>

                        <a href="/fakultas" class="btn btn-outline-primary rounded-pill px-4">
                            Jelajahi
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card feature-card border-0 shadow-sm h-100">
                    <div class="card-body p-4 text-center">
                        <div class="feature-icon bg-success-subtle text-success mx-auto mb-4">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>

                        <h5 class="fw-bold mb-3">Cepat & Responsif</h5>

                        <p class="text-muted">
                            Dibangun menggunakan Laravel dan Bootstrap 5 modern.
                        </p>

                        <a href="/prodi" class="btn btn-outline-success rounded-pill px-4">
                            Lihat Prodi
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card feature-card border-0 shadow-sm h-100">
                    <div class="card-body p-4 text-center">
                        <div class="feature-icon bg-warning-subtle text-warning mx-auto mb-4">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <h5 class="fw-bold mb-3">Validasi Aman</h5>

                        <p class="text-muted">
                            Validasi input modern untuk menjaga data tetap konsisten.
                        </p>

                        <a href="/fakultas/create"
                           class="btn btn-outline-warning rounded-pill px-4">
                            Tambah Data
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- QUICK ACTION --}}
        <div class="quick-section rounded-4 p-5 text-center text-white">

            <h2 class="fw-bold mb-3">
                Akses Cepat Menu Akademik
            </h2>

            <p class="opacity-75 mb-4">
                Gunakan menu cepat berikut untuk mengelola sistem.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3">

                <a href="/fakultas"
                   class="btn btn-light px-4 py-2 rounded-pill btn-jedag">
                    <i class="bi bi-building me-2"></i>Fakultas
                </a>

                <a href="/fakultas/create"
                   class="btn btn-outline-light px-4 py-2 rounded-pill btn-jedag">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Fakultas
                </a>

                <a href="/prodi"
                   class="btn btn-light px-4 py-2 rounded-pill btn-jedag">
                    <i class="bi bi-book me-2"></i>Program Studi
                </a>

                <a href="/prodi/create"
                   class="btn btn-outline-light px-4 py-2 rounded-pill btn-jedag">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Prodi
                </a>

            </div>
        </div>

    </div>

    {{-- STYLE --}}
    <style>

        body{
            background: #f5f7fb;
        }

        .hero-section{
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            position: relative;
        }

        .hero-title{
            animation: fadeUp 1s ease;
        }

        .hero-blur{
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: .4;
        }

        .hero-blur-1{
            width: 250px;
            height: 250px;
            background: #ffffff;
            top: -60px;
            left: -60px;
        }

        .hero-blur-2{
            width: 200px;
            height: 200px;
            background: #38bdf8;
            bottom: -60px;
            right: -60px;
        }

        .glass-card{
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            animation: floatCard 4s ease-in-out infinite;
        }

        .icon-box{
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(255,255,255,.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .mini-stat h5{
            margin: 0;
            font-weight: bold;
        }

        .stat-card{
            border-radius: 20px;
            transition: all .3s ease;
            overflow: hidden;
        }

        .stat-card:hover{
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 35px rgba(0,0,0,.1)!important;
        }

        .stat-icon{
            width: 55px;
            height: 55px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .feature-card{
            border-radius: 24px;
            transition: all .35s ease;
        }

        .feature-card:hover{
            transform: translateY(-12px);
            box-shadow: 0 18px 35px rgba(0,0,0,.1)!important;
        }

        .feature-icon{
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
        }

        .btn-jedag{
            transition: all .25s ease;
        }

        .btn-jedag:hover{
            transform: scale(1.08);
        }

        .quick-section{
            background: linear-gradient(135deg,#0f172a,#1e293b);
        }

        .progress-animated{
            animation: progressAnim 2s ease;
        }

        @keyframes floatCard{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(-12px);
            }
            100%{
                transform: translateY(0px);
            }
        }

        @keyframes fadeUp{
            from{
                opacity: 0;
                transform: translateY(20px);
            }
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes progressAnim{
            from{
                width: 0;
            }
        }

    </style>

    {{-- SCRIPT --}}
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            // Counter Animation
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {

                const target = +counter.innerText;
                let current = 0;

                const increment = target / 40;

                const updateCounter = () => {

                    current += increment;

                    if(current < target){
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target;
                    }

                };

                updateCounter();

            });

        });

    </script>

</x-layout>
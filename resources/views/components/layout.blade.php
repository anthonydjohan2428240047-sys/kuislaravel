<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Fakultas & Prodi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite([])

    <style>
        body{
            background: #f4f7fe;
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar{
            width: 260px;
            min-height: 100vh;
            background: linear-gradient(180deg,#1e3c72,#2a5298);
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            box-shadow: 4px 0 20px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .sidebar .brand{
            color: white;
            font-size: 1.4rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar .nav-link{
            color: rgba(255,255,255,0.8);
            padding: 14px 20px;
            margin: 6px 14px;
            border-radius: 12px;
            transition: .3s;
            font-weight: 500;
        }

        .sidebar .nav-link:hover{
            background: rgba(255,255,255,0.15);
            color: white;
            transform: translateX(5px);
        }

        .sidebar .nav-link.active{
            background: white;
            color: #2a5298;
            font-weight: bold;
        }

        /* Main Content */
        .main-content{
            margin-left: 260px;
            min-height: 100vh;
        }

        /* Topbar */
        .topbar{
            background: white;
            padding: 18px 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .topbar h4{
            margin: 0;
            font-weight: bold;
            color: #2a5298;
        }

        /* Content */
        .content-wrapper{
            padding: 30px;
        }

        /* Card */
        .card{
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            overflow: hidden;
        }

        .card-header{
            background: linear-gradient(135deg,#4facfe,#00f2fe);
            color: white;
            padding: 18px 24px;
            border: none;
        }

        /* Button */
        .btn-primary{
            background: linear-gradient(135deg,#1e3c72,#2a5298);
            border: none;
            border-radius: 10px;
            padding: 10px 18px;
        }

        .btn-primary:hover{
            opacity: .9;
            transform: translateY(-2px);
        }

        /* Table */
        .table{
            border-radius: 15px;
            overflow: hidden;
        }

        .table thead{
            background: #2a5298;
            color: white;
        }

        .table th{
            border: none;
        }

        .table td{
            vertical-align: middle;
        }

        .table tbody tr:hover{
            background: #f1f5ff;
        }

        /* Form */
        .form-control,
        .form-select{
            border-radius: 10px;
            padding: 10px;
            border: 1px solid #dcdcdc;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #2a5298;
            box-shadow: 0 0 0 .2rem rgba(42,82,152,.2);
        }

        /* Alert */
        .alert{
            border: none;
            border-radius: 12px;
        }

        /* Footer */
        footer{
            text-align: center;
            padding: 20px;
            color: #777;
        }

        /* Responsive */
        @media(max-width: 992px){

            .sidebar{
                width: 100%;
                min-height: auto;
                position: relative;
            }

            .main-content{
                margin-left: 0;
            }

            .topbar{
                position: relative;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="brand">
            <i class="bi bi-mortarboard-fill"></i>
            SI Fakultas
        </div>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="{{ url('/fakultas') }}"
                   class="nav-link {{ request()->is('fakultas') ? 'active' : '' }}">
                    <i class="bi bi-building me-2"></i>
                    Fakultas
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/fakultas/create') }}"
                   class="nav-link {{ request()->is('fakultas/create') ? 'active' : '' }}">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Fakultas
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/prodi') }}"
                   class="nav-link {{ request()->is('prodi') ? 'active' : '' }}">
                    <i class="bi bi-book me-2"></i>
                    Program Studi
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/prodi/create') }}"
                   class="nav-link {{ request()->is('prodi/create') ? 'active' : '' }}">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Prodi
                </a>
            </li>

        </ul>
    </div>

    <!-- Main -->
    <div class="main-content">

        <!-- Topbar -->
        <div class="topbar d-flex justify-content-between align-items-center">
            <h4>Dashboard Sistem Informasi</h4>

            <div>
                <span class="text-muted">
                    <i class="bi bi-person-circle me-1"></i>
                    Admin
                </span>
            </div>
        </div>

        <!-- Content -->
        <div class="content-wrapper">

            <!-- Alert Success -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>
                </div>
            @endif

            <!-- Alert Error -->
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    {{ session('error') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>
                </div>
            @endif

            <!-- Validation -->
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show">

                    <strong>Terjadi Kesalahan:</strong>

                    <ul class="mt-2 mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>
                </div>
            @endif

            <!-- Slot -->
            {{ $slot }}

        </div>

        <!-- Footer -->
        <footer>
            © {{ date('Y') }} Sistem Informasi Fakultas & Prodi
        </footer>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach((alert) => {
                let bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>

</body>
</html>
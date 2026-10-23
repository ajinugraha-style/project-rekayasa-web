<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Alat Camping - CampAzzi</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
       
        .navbar-transparent {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            background: linear-gradient(to bottom, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0) 100%);
        }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100 position-relative">

    
    <nav class="navbar navbar-expand-lg navbar-dark navbar-transparent py-3">
        <div class="container">
            
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ url('/') }}">
                <div class="rounded-circle d-flex align-items-center justify-content-center text-white shadow-sm" 
                     style="width: 42px; height: 42px; background: linear-gradient(135deg, #198754 0%, #0d6efd 50%, #212529 100%); font-size: 18px;">
                    ⛰️
                </div>
                <span class="fs-4">CampAzzi</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
               
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 text-white" href="{{ url('/') }}">Beranda</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center mt-3 mt-lg-0">
                    <a href="#" class="btn btn-outline-light position-relative rounded-pill px-4 py-2 fw-semibold">
                        <i class="bi bi-cart3 fs-6 me-1"></i> Keranjang
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-fill">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-1 fw-semibold">&copy; {{ date('Y') }} CampAzzi - UTS Rekayasa Web</p>
            <p class="mb-0 text-muted small">Aji Nugraha | Sistem Informasi S-1</p>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background-color: #fefeff;
            background-image: url("data:image/svg+xml,%3Csvg width='32' height='26' viewBox='0 0 32 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14 0v3.994C14 7.864 10.858 11 7 11c-3.866 0-7-3.138-7-7.006V0h2v4.005C2 6.765 4.24 9 7 9c2.756 0 5-2.236 5-4.995V0h2zm0 26v-5.994C14 16.138 10.866 13 7 13c-3.858 0-7 3.137-7 7.006V26h2v-6.005C2 17.235 4.244 15 7 15c2.76 0 5 2.236 5 4.995V26h2zm2-18.994C16 3.136 19.142 0 23 0c3.866 0 7 3.138 7 7.006v9.988C30 20.864 26.858 24 23 24c-3.866 0-7-3.138-7-7.006V7.006zm2-.01C18 4.235 20.244 2 23 2c2.76 0 5 2.236 5 4.995v10.01C28 19.765 25.756 22 23 22c-2.76 0-5-2.236-5-4.995V6.995z' fill='%23e2dfe7' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        .header-container {
            min-height: 100vh;
        }
        .content-padding {
            padding-top: 80px;
        }
        .subtitle span {
            height: 4px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 100%;
            background-color: #6f42c1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
        <div class="container">
            <a class="navbar-brand text-md md:text-2xl font-bold text-purple-600" href="#">
                <img src="" class="h-6 w-6 me-2 d-inline-block align-middle" alt="">
                <span>Education</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('beasiswa.create') ? 'active' : '' }}" aria-current="page" href="{{ route('beasiswa.create') }}">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('beasiswa.index') ? 'active' : '' }}" href="{{ route('beasiswa.index') }}">Hasil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if(Route::is('welcome'))
    <header class="header bg-light py-5">
        <div class="container header-container d-flex flex-column flex-md-row-reverse align-items-center">
            <div class="px-3 py-3 w-100 w-md-50">
                <img src="./img/header.svg" class="img-fluid" alt="Scholarship Illustration">
            </div>
            <div class="w-100 w-md-50 text-center text-md-start">
                <h1 class="display-5 fw-bold">Temukan <span class="text-primary">Beasiswa</span> Terbaik Untuk Masa Depan Anda</h1>
                <p class="text-muted my-4">Kami menyediakan berbagai program beasiswa yang dirancang untuk mendukung perjalanan akademis Anda. Pilihlah beasiswa akademik maupun non-akademik sesuai dengan bakat dan minat Anda.</p>
                <a href="#scholarship-section" class="btn btn-primary me-2">View Scholarships</a>
                <a href="#" class="btn btn-outline-primary">Contact us</a>
            </div>
        </div>
    </header>
    @endif
    
    <div class="container content-padding">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-auto">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Beasiswa. All rights reserved.</p>
            <p class="text-muted mb-0">Created by <a href="https://github.com/Denngrh/Beasiswa-JWD" class="text-primary">denngrh</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

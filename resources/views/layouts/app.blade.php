<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-custom {
            background-color: #f8f9fa;
            border-bottom: 2px solid #000;
        }
        .navbar-nav .nav-link {
            font-weight: bold;
            font-size: 1.1rem;
        }
        .navbar-nav .nav-link.active {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 5px 15px;
        }
        .navbar-nav .nav-link:hover {
            background-color: #007bff;
            color: white;
        }
        .navbar-nav .nav-item {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Pilihan Beasiswa</a>
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
    

    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

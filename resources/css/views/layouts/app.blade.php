<!doctype html>
<html lang="id" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'KursusKu')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column h-100 bg-light">
    
    @include('partials.navbar')

    <main class="flex-shrink-0 py-4 py-md-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 border-start border-4 border-success" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill fs-4 me-3"></i>
                        <div><strong>Berhasil!</strong> {{ session('success') }}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-4 bg-white border-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <img src="{{ asset('images/logo.svg') }}" alt="KursusKu" style="height: 24px;" class="me-2">
                    <span class="text-secondary fw-semibold">&copy; {{ date('Y') }} KursusKu.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="{{ route('home') }}" class="text-decoration-none text-secondary me-3">Beranda</a>
                    <a href="{{ route('enrollments.create') }}" class="text-decoration-none text-secondary">Pendaftaran</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
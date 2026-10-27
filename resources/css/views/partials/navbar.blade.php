<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
    <div class="container">
        <!-- Logo & Teks -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo KursusKu" style="height: 32px; width: auto;" class="me-2">
            <span class="fw-bolder fs-4" style="letter-spacing: -1px;">KursusKu</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold text-success' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('enrollments.create') ? 'active fw-bold text-success' : '' }}" href="{{ route('enrollments.create') }}">Pendaftaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        {{-- Logo / Brand --}}
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            KursusKu
        </a>

        {{-- Tombol Hamburger untuk Mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu Navigasi --}}
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                {{-- Menu Beranda --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                {{-- Menu Kelola Kursus (Pertemuan 10 & 11) --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}" href="{{ route('courses.index') }}">
                        Kelola Kursus
                    </a>
                </li>

                {{-- Menu Pendaftaran (Pertemuan 12) --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('enrollments.*') ? 'active' : '' }}" href="{{ route('enrollments.index') }}">
                        Pendaftaran
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
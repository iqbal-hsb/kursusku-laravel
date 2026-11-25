<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        {{-- Logo --}}
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            KursusKu
        </a>

        {{-- Tombol Hamburger (Mobile) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu Navigasi --}}
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-center">
                
                {{-- Menu Umum --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                
                {{-- Menu Khusus Jika Sudah Login --}}
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('courses.*') ? 'active fw-bold' : '' }}" href="{{ route('courses.index') }}">Kelola Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('enrollments.*') ? 'active fw-bold' : '' }}" href="{{ route('enrollments.index') }}">Pendaftaran</a>
                    </li>
                @endauth

                {{-- Cek Status Login --}}
                @auth
                    {{-- Jika Sudah Login: Tampilkan Dropdown User --}}
                    <li class="nav-item dropdown ms-2">
                        <a class="nav-link dropdown-toggle fw-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item py-2" href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-speedometer2 me-2 text-primary"></i> Dashboard Admin
                                </a>
                            </li>
                            {{-- PERBAIKAN: route('profile') diubah menjadi route('admin.profile') --}}
                            <li>
                                <a class="dropdown-item py-2" href="{{ route('admin.profile') }}">
                                    <i class="bi bi-person-gear me-2 text-success"></i> Profil Saya
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item py-2 text-danger fw-bold">
                                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- Jika Belum Login: Tampilkan Tombol Login --}}
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary fw-bold px-4" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        
        <a class="navbar-brand fw-bold" href="<?php echo e(route('home')); ?>">
            KursusKu
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-center">
                
                
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active fw-bold' : ''); ?>" href="<?php echo e(route('home')); ?>">Beranda</a>
                </li>
                
                
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('courses.*') ? 'active fw-bold' : ''); ?>" href="<?php echo e(route('courses.index')); ?>">Kelola Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('enrollments.*') ? 'active fw-bold' : ''); ?>" href="<?php echo e(route('enrollments.index')); ?>">Pendaftaran</a>
                    </li>
                <?php endif; ?>

                
                <?php if(auth()->guard()->check()): ?>
                    
                    <li class="nav-item dropdown ms-2">
                        <a class="nav-link dropdown-toggle fw-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i>
                            <?php echo e(Auth::user()->name); ?>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item py-2" href="<?php echo e(route('admin.dashboard')); ?>">
                                    <i class="bi bi-speedometer2 me-2 text-primary"></i> Dashboard Admin
                                </a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item py-2" href="<?php echo e(route('admin.profile')); ?>">
                                    <i class="bi bi-person-gear me-2 text-success"></i> Profil Saya
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="dropdown-item py-2 text-danger fw-bold">
                                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary fw-bold px-4" href="<?php echo e(route('login')); ?>">
                            Login
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>
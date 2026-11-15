<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        
        <a class="navbar-brand fw-bold" href="<?php echo e(route('home')); ?>">
            KursusKu
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">
                        Beranda
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('courses.*') ? 'active' : ''); ?>" href="<?php echo e(route('courses.index')); ?>">
                        Kelola Kursus
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('enrollments.*') ? 'active' : ''); ?>" href="<?php echo e(route('enrollments.index')); ?>">
                        Pendaftaran
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>
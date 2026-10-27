<!doctype html>
<html lang="id" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="KursusKu - Platform belajar teknologi web untuk mahasiswa.">
    
    <title><?php echo $__env->yieldContent('title', 'KursusKu'); ?></title>
    
    <!-- Favicon (Menggunakan logo SVG yang sudah dibuat) -->
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('images/logo.svg')); ?>">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vite (CSS & JS) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="d-flex flex-column h-100 bg-light">
    
    <!-- Navbar Partial -->
    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Main Content Area -->
    <main class="flex-shrink-0 py-4 py-md-5">
        <div class="container">
            
            <!-- Flash Message Alert (Sukses) -->
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 border-start border-4 border-success" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill fs-4 me-3"></i>
                        <div>
                            <strong>Berhasil!</strong> <?php echo e(session('success')); ?>

                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Flash Message Alert (Error Global) -->
            <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0 border-start border-4 border-danger" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                        <div>
                            <strong>Oops!</strong> <?php echo e(session('error')); ?>

                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Konten Halaman Anak -->
            <?php echo $__env->yieldContent('content'); ?>
            
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4 bg-white border-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="KursusKu" style="height: 24px;" class="me-2">
                    <span class="text-secondary fw-semibold">&copy; <?php echo e(date('Y')); ?> KursusKu. Hak Cipta Dilindungi.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="<?php echo e(route('home')); ?>" class="text-decoration-none text-secondary me-3">Beranda</a>
                    <a href="<?php echo e(route('enrollments.create')); ?>" class="text-decoration-none text-secondary">Pendaftaran</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>
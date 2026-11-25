 

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="h3 mb-4 fw-bold">Dashboard Administrator</h1>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Kursus</h5>
                    <h2 class="display-5 fw-bold"><?php echo e($totalCourses); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Peserta</h5>
                    <h2 class="display-5 fw-bold"><?php echo e($totalParticipants); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Pendaftaran</h5>
                    <h2 class="display-5 fw-bold"><?php echo e($totalEnrollments); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
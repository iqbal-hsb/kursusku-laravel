

<?php $__env->startSection('title', 'Laporan Pendaftaran'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Laporan Pendaftaran Kursus</h1>
            <p class="text-muted mb-0">Data relasional antara Peserta, Kursus, dan Jadwal.</p>
        </div>
        <a href="<?php echo e(route('enrollments.create')); ?>" class="btn btn-primary">+ Tambah Pendaftaran</a>
    </div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Kursus</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                
                                <td class="fw-bold"><?php echo e($enrollment->participant->name); ?></td>
                                <td><?php echo e($enrollment->participant->email); ?></td>
                                
                                
                                <td><?php echo e($enrollment->course->name); ?></td>
                                
                                
                                <td><?php echo e($enrollment->course->start_date?->format('d/m/Y')); ?></td>
                                
                                <td>
                                    <span class="badge bg-primary"><?php echo e(ucfirst($enrollment->status)); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    Belum ada data pendaftaran.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/enrollments/index.blade.php ENDPATH**/ ?>
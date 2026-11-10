

<?php $__env->startSection('title', 'Daftar Kursus'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Daftar Kursus</h1>
            <p class="text-muted mb-0">Data diambil dari MySQL melalui Eloquent.</p>
        </div>
        <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary">
            + Tambah Kursus
        </a>
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
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Biaya</th>
                            <th>Kuota</th>
                            <th>Mulai</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($course->code); ?></td>
                                <td><?php echo e($course->name); ?></td>
                                <td>Rp <?php echo e(number_format($course->fee, 0, ',', '.')); ?></td>
                                <td><?php echo e($course->quota); ?></td>
                                <td><?php echo e($course->start_date->format('d/m/Y')); ?></td>
                                <td>
                                    
                                    <?php if($course->status === 'open'): ?>
                                        <span class="badge bg-success">Open</span>
                                    <?php elseif($course->status === 'draft'): ?>
                                        <span class="badge bg-warning text-dark">Draft</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger">Closed</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-center flex-wrap">
                                        
                                        <a href="<?php echo e(route('courses.show', $course)); ?>" class="btn btn-sm btn-outline-primary">
                                            Detail
                                        </a>
                                        
                                        
                                        <a href="<?php echo e(route('courses.edit', $course)); ?>" class="btn btn-sm btn-outline-warning">
                                            Edit
                                        </a>
                                        
                                        
                                        <form method="POST" action="<?php echo e(route('courses.destroy', $course)); ?>" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kursus ini?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    Belum ada data kursus. Silakan klik tombol "+ Tambah Kursus".
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/courses/index.blade.php ENDPATH**/ ?>
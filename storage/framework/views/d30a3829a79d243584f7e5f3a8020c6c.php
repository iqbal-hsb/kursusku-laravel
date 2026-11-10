

<?php $__env->startSection('title', 'Detail Kursus'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Detail Kursus</h1>
            <p class="text-muted mb-0"><?php echo e($course->code); ?> - <?php echo e($course->name); ?></p>
        </div>
        <div class="d-flex gap-2">
            <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-outline-secondary">Kembali</a>
            <a href="<?php echo e(route('courses.edit', $course)); ?>" class="btn btn-primary">Edit</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3">Kode</dt>
                <dd class="col-sm-9"><?php echo e($course->code); ?></dd>

                <dt class="col-sm-3">Nama</dt>
                <dd class="col-sm-9"><?php echo e($course->name); ?></dd>

                <dt class="col-sm-3">Deskripsi</dt>
                <dd class="col-sm-9"><?php echo e($course->description ?: '-'); ?></dd>

                <dt class="col-sm-3">Biaya</dt>
                <dd class="col-sm-9">Rp <?php echo e(number_format($course->fee, 0, ',', '.')); ?></dd>

                <dt class="col-sm-3">Kuota</dt>
                <dd class="col-sm-9"><?php echo e($course->quota); ?> peserta</dd>

                <dt class="col-sm-3">Tanggal Mulai</dt>
                <dd class="col-sm-9"><?php echo e($course->start_date?->format('d-m-Y')); ?></dd>

                <dt class="col-sm-3">Status</dt>
                <dd class="col-sm-9"><?php echo e(ucfirst($course->status)); ?></dd>
            </dl>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/courses/show.blade.php ENDPATH**/ ?>
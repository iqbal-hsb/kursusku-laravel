<div id="course-results">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="py-3 px-4">Kode</th>
                    <th class="py-3">Nama</th>
                    <th class="py-3">Biaya</th>
                    <th class="py-3">Kuota</th>
                    <th class="py-3">Mulai</th>
                    <th class="py-3">Status</th>
                    <th class="py-3 text-center" style="min-width: 220px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-4 fw-bold text-primary"><?php echo e($course->code); ?></td>
                        <td><?php echo e($course->name); ?></td>
                        <td>Rp <?php echo e(number_format($course->fee, 0, ',', '.')); ?></td>
                        <td><?php echo e($course->quota); ?> Kursi</td>
                        <td><?php echo e($course->start_date->format('d/m/Y')); ?></td>
                        <td>
                            <?php if($course->status == 'open'): ?>
                                <span class="badge bg-success">Open</span>
                            <?php elseif($course->status == 'draft'): ?>
                                <span class="badge bg-warning text-dark">Draft</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Closed</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="<?php echo e(route('courses.show', $course)); ?>" class="btn btn-sm btn-outline-primary">Detail</a>
                                <a href="<?php echo e(route('courses.edit', $course)); ?>" class="btn btn-sm btn-outline-warning text-dark">Edit</a>
                                <form method="POST" action="<?php echo e(route('courses.destroy', $course)); ?>" onsubmit="return confirm('Hapus kursus ini?')" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted">
                            Tidak ada kursus yang sesuai pencarian/filter.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    
    <div class="d-flex justify-content-between align-items-center mt-4 px-3 pb-3">
        <div class="text-muted small">
            Menampilkan <?php echo e($courses->firstItem() ?? 0); ?> sampai <?php echo e($courses->lastItem() ?? 0); ?> dari <?php echo e($courses->total()); ?> hasil
        </div>
        <div>
            <?php echo e($courses->links()); ?>

        </div>
    </div>
</div><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/courses/_results.blade.php ENDPATH**/ ?>
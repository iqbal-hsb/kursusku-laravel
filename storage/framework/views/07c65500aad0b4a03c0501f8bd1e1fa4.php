

<?php $__env->startSection('title', 'Pendaftaran Kursus'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center py-4">
    <div class="col-lg-7">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="card-header bg-success text-white text-center py-4 border-0">
                <h2 class="h4 mb-1 fw-bold">Formulir Pendaftaran</h2>
                <p class="mb-0 text-white-50">Isi data diri dan pilih kursus impianmu.</p>
            </div>
            <div class="card-body p-4 p-md-5">
                <form method="POST" action="<?php echo e(route('enrollments.preview')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" id="name" name="name"
                               value="<?php echo e(old('name')); ?>"
                               class="form-control form-control-lg bg-light <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="Contoh: Muhammad Iqbal"
                               required>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">Alamat Email</label>
                        <input type="email" id="email" name="email"
                               value="<?php echo e(old('email')); ?>"
                               class="form-control form-control-lg bg-light <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="nama@email.com"
                               required>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-4">
                        <label for="course_id" class="form-label fw-semibold">Pilih Kursus</label>
                        <select id="course_id" name="course_id"
                                class="form-select form-select-lg bg-light <?php $__errorArgs = ['course_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                required>
                            <option value="" disabled selected>-- Pilih Kursus yang Tersedia --</option>
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>" <?php if(old('course_id') == $id): echo 'selected'; endif; ?>>
                                    <?php echo e($course['name']); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['course_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Kotak untuk menampilkan sisa kursi -->
                    <div id="availability" class="alert alert-light border text-center py-3 rounded-3 mb-4">
                        <i class="bi bi-info-circle me-2"></i> Pilih kursus untuk melihat sisa kursi.
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 py-3 fw-bold shadow-sm">
                        Kirim Pendaftaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT NATIVE FETCH (PASTI JALAN TANPA JQUERY/VITE) -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectElement = document.getElementById('course_id');
        const availabilityBox = document.getElementById('availability');

        selectElement.addEventListener('change', function () {
            const courseId = this.value;

            if (!courseId) {
                availabilityBox.className = 'alert alert-light border text-center py-3 rounded-3 mb-4';
                availabilityBox.innerHTML = '<i class="bi bi-info-circle me-2"></i> Pilih kursus untuk melihat sisa kursi.';
                return;
            }

            // Tampilkan Loading
            availabilityBox.className = 'alert alert-light border text-center py-3 rounded-3 mb-4';
            availabilityBox.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Memuat ketersediaan...';

            // Fetch ke Route JSON Laravel
            fetch('/courses/' + courseId + '/availability')
                .then(response => {
                    if (!response.ok) throw new Error('Gagal mengambil data');
                    return response.json();
                })
                .then(data => {
                    // Tampilkan sukses (Hijau)
                    availabilityBox.className = 'alert alert-success border-success text-success text-center py-3 rounded-3 mb-4';
                    availabilityBox.innerHTML = '<strong>' + data.remaining + ' kursi</strong> tersisa untuk <strong>' + data.course + '</strong>.';
                })
                .catch(error => {
                    // Tampilkan gagal (Merah)
                    console.error('Error:', error);
                    availabilityBox.className = 'alert alert-danger border-danger text-danger text-center py-3 rounded-3 mb-4';
                    availabilityBox.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i> Gagal memuat ketersediaan.';
                });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/enrollments/create.blade.php ENDPATH**/ ?>
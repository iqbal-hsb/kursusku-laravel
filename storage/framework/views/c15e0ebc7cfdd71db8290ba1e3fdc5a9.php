

<?php $__env->startSection('title', 'Profil Administrator - KursusKu'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Profil Saya</h2>
            <p class="text-secondary mb-0">Kelola informasi akun dan data diri Anda.</p>
        </div>
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Dashboard
        </a>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 text-center">
                <div class="card-body p-5">
                    
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                         style="width: 100px; height: 100px;">
                        <i class="bi bi-person-fill" style="font-size: 3rem;"></i>
                    </div>
                    
                    <h4 class="fw-bold mb-1"><?php echo e(Auth::user()->name); ?></h4>
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">
                        Administrator
                    </span>
                    
                    <hr class="my-4 text-muted">
                    
                    <div class="text-start small">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope text-secondary me-3 fs-5"></i>
                            <div>
                                <span class="text-secondary d-block">Email</span>
                                <span class="fw-semibold"><?php echo e(Auth::user()->email); ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-secondary me-3 fs-5"></i>
                            <div>
                                <span class="text-secondary d-block">Bergabung Sejak</span>
                                <span class="fw-semibold"><?php echo e(Auth::user()->created_at->format('d F Y')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
                    <h5 class="fw-bold mb-0">Informasi Akun</h5>
                </div>
                <div class="card-body p-4">
                    
                    
                    <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row g-3">
                            
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold text-secondary">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-lg bg-light <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="name" name="name" value="<?php echo e(old('name', Auth::user()->name)); ?>" required>
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

                            
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold text-secondary">Alamat Email</label>
                                <input type="email" class="form-control form-control-lg bg-light <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="email" name="email" value="<?php echo e(old('email', Auth::user()->email)); ?>" required>
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

                            
                            <div class="col-12 mt-4">
                                <label for="password" class="form-label fw-semibold text-secondary">Password Baru (Opsional)</label>
                                <input type="password" class="form-control form-control-lg bg-light <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="form-text text-muted small mt-1">
                                    Minimal 8 karakter. Biarkan kosong jika tidak ada perubahan.
                                </div>
                            </div>
                            
                            
                            <div class="col-12 mt-3">
                                <label for="password_confirmation" class="form-label fw-semibold text-secondary">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control form-control-lg bg-light" 
                                       id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru">
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg px-4 shadow-sm">
                                    <i class="bi bi-save me-2"></i> Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/admin/profile.blade.php ENDPATH**/ ?>
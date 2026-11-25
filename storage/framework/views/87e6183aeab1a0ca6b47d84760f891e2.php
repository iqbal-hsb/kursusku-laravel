

<?php $__env->startSection('title', 'Login - KursusKu'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="col-lg-10 col-xl-8">
        
        
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="row g-0">
                
                
                <div class="col-md-5 d-none d-md-flex flex-column justify-content-between p-5 text-white" 
                     style="background: linear-gradient(135deg, #198754 0%, #146c43 100%);">
                    
                    
                    <div>
                        <h4 class="fw-bold mb-4">
                            <i class="bi bi-mortarboard-fill me-2"></i>KursusKu
                        </h4>
                        
                        
                        <h2 class="display-6 fw-bold mb-3" style="line-height: 1.2;">
                            Setiap kelas.<br>
                            Setiap progres.<br>
                            Lebih terarah.
                        </h2>
                        <p class="text-white-50 mb-0">
                            Kelola presensi, tugas, nilai, dan perkembangan mahasiswa melalui dashboard yang terintegrasi.
                        </p>
                    </div>
                    
                    
                    <div class="mt-5">
                        <div class="bg-white bg-opacity-10 p-3 rounded-3 border border-light border-opacity-25">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                <span class="fw-semibold small">Presensi QR</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-graph-up-arrow text-warning me-2"></i>
                                <span class="fw-semibold small">Nilai dan tugas</span>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-7 bg-white p-5">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-dark">Selamat Datang 👋</h3>
                        <p class="text-secondary small">Silakan masuk ke akun Anda.</p>
                    </div>

                    
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        
                        <div class="mb-3">
                            <label for="email" class="form-label small fw-semibold text-secondary">Username / Email</label>
                            <input type="email" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="email" name="email" value="<?php echo e(old('email')); ?>" 
                                   placeholder="Masukkan email" required autofocus>
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

                        
                        <div class="mb-3">
                            <label for="password" class="form-label small fw-semibold text-secondary">Password</label>
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="password" name="password" placeholder="Masukkan password" required>
                                
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" tabindex="-1">
                                    <i class="bi bi-eye" id="eyeIcon"></i>
                                </button>
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
                            </div>
                        </div>

                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label small text-secondary" for="remember">
                                    Ingat Saya
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none small text-primary fw-semibold">Lupa Password?</a>
                        </div>

                        
                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold shadow-sm mb-3" style="background-color: #0d6efd; border: none;">
                            Masuk ke Dashboard
                        </button>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eyeIcon');

        togglePassword.addEventListener('click', function (e) {
            // Toggle tipe input
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle ikon mata
            eyeIcon.classList.toggle('bi-eye');
            eyeIcon.classList.toggle('bi-eye-slash');
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>
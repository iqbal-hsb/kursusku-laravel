

<?php $__env->startSection('title', 'Beranda - KursusKu'); ?>

<?php $__env->startSection('content'); ?>
<div class="row align-items-center py-5 g-5">
    <!-- Kolom Kiri: Teks & Tombol -->
    <div class="col-lg-6">
        <span class="badge bg-success bg-opacity-10 text-success mb-3 px-3 py-2 rounded-pill fw-semibold">
            ✨ Platform Belajar Terbaik
        </span>
        <h1 class="display-4 fw-bold mb-4" style="letter-spacing: -1.5px; line-height: 1.2;">
            Kuasai Teknologi Web <br>
            <span class="text-success">Bersama KursusKu</span>
        </h1>
        <p class="lead text-secondary mb-5">
            Mulai perjalananmu dari HTML dasar hingga Laravel fundamental. Pilih kursus, cek ketersediaan kursi secara *real-time*, dan daftar dalam hitungan detik.
        </p>
        <div class="d-flex gap-3">
            <a href="<?php echo e(route('enrollments.create')); ?>" class="btn btn-success btn-lg px-4 py-2 shadow-sm">
                Daftar Sekarang
            </a>
            <a href="#" class="btn btn-outline-secondary btn-lg px-4 py-2">
                Lihat Kurikulum
            </a>
        </div>
    </div>
    
    <!-- Kolom Kanan: Gambar Ilustrasi -->
    <div class="col-lg-6 text-center">
        <!-- 
            PERBAIKAN: 
            Memanggil file 'ilustrasi.svg' yang sudah ada di folder public/images Anda.
            Jika Anda ingin memakai 'hero.jpg', tinggal ganti tulisan 'ilustrasi.svg' menjadi 'hero.jpg'.
        -->
        <img src="<?php echo e(asset('images/ilustrasi.svg')); ?>" 
             alt="Ilustrasi Hero KursusKu" 
             class="img-fluid w-100"
             style="max-height: 450px; object-fit: contain;">
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/home.blade.php ENDPATH**/ ?>
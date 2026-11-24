

<?php $__env->startSection('title', 'Daftar Kursus'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Daftar Kursus</h1>
            <p class="text-muted mb-0">Data diambil dari MySQL melalui Eloquent.</p>
        </div>
        <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary fw-bold">
            + Tambah Kursus
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    
    <form method="GET" action="<?php echo e(route('courses.index')); ?>" class="row g-2 mb-4" id="filter-form">
        <div class="col-md-6">
            <input type="search" id="live-search" name="q" value="<?php echo e($search ?? ''); ?>" class="form-control" placeholder="Cari kode atau nama kursus...">
        </div>
        <div class="col-md-3">
            <select id="status-filter" name="status" class="form-select">
                <option value="">Semua Status</option>
                <option value="open" <?php if(($status ?? '') === 'open'): echo 'selected'; endif; ?>>Open</option>
                <option value="closed" <?php if(($status ?? '') === 'closed'): echo 'selected'; endif; ?>>Closed</option>
                <option value="draft" <?php if(($status ?? '') === 'draft'): echo 'selected'; endif; ?>>Draft</option>
            </select>
        </div>
        <div class="col-md-3 d-flex gap-2">
            <button class="btn btn-primary" type="submit">Cari</button>
            <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-outline-secondary">Reset</a>
        </div>
    </form>

    
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
            <?php echo $__env->make('courses._results', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // 1. Cek apakah jQuery termuat
    if (typeof jQuery == 'undefined') {
        alert('GAGAL: jQuery tidak termuat!');
    } else {
        console.log('SUKSES: jQuery termuat.');
    }

    $(document).ready(function() {
        // 2. Paksa munculkan alert saat halaman siap
        alert('Script jalan!'); 
        console.log('SUKSES: Script Ajax berjalan.');

        let searchTimer;

        function loadCourses(url = '<?php echo e(route('courses.index')); ?>') {
            const q = $('#live-search').val();
            const status = $('#status-filter').val();
            
            console.log('Mengirim request Ajax: q=' + q + ', status=' + status);

            $('#course-results').css('opacity', '0.5');

            $.get(url, { q: q, status: status, partial: 1 })
                .done(function (html) {
                    console.log('SUKSES: Response diterima.');
                    $('#course-results').replaceWith(html);
                })
                .fail(function () {
                    console.error('GAGAL: Request Ajax gagal.');
                })
                .always(function() {
                    $('#course-results').css('opacity', '1');
                });
        }

        // Debounce 300ms
        $('#live-search').on('input', function () {
            console.log('Mengetik: ' + $(this).val());
            clearTimeout(searchTimer);
            searchTimer = setTimeout(function () {
                loadCourses();
            }, 300);
        });

        // Filter status
        $('#status-filter').on('change', function () {
            console.log('Filter diganti: ' + $(this).val());
            loadCourses();
        });

        // Pagination Ajax
        $(document).on('click', '#course-results .pagination a', function (e) {
            e.preventDefault();
            const url = $(this).attr('href');
            console.log('Klik pagination: ' + url);
            loadCourses(url);
        });

        // Cegah form submit reload
        $('#filter-form').on('submit', function(e) {
            e.preventDefault();
            loadCourses();
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kursusku-laravel\resources\views/courses/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <h6>Welcome, <?php echo e(auth()->user()->name); ?></h6>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <p class="text-center">Selamat! Kamu telah menjadi member WELL GYM.</p>
            <div class="card border-info">
                <div class="card-header border-info d-flex justify-content-start">
                    <img src="<?php echo e(asset('assets/images/default.png')); ?>" class="img-fluid" width="30">
                    <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">
                        KARTU MEMBER
                    </p>
                </div>
                <div class="card-body">
                    <h2><b><?php echo e(auth()->user()->name); ?></b></h2>
                    <p class="text-secondary mb-0"><?php echo e(auth()->user()->email); ?></p>
                </div>
                <div class="card-footer border-info">
                    <small class="text-secondary mb-0">Bergabung sejak <b><?php echo e(auth()->user()->created_at); ?></b></small>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/dashboard.blade.php ENDPATH**/ ?>
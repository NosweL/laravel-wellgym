<?php $__env->startSection('content'); ?>
<section class="hero-section">
    <div class="container">
        
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
            Session::forget('success');
            ?>
        </div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
        <div class="alert alert-warning">
            <?php echo e(Session::get('error')); ?>

            <?php
            Session::forget('error');
            ?>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12 col-md-6 pt-3 pt-md-4">
                <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Selamat Datang di <b>Arista Gym</b></h2>
                <div class="site-tagline mb-3">Tempat ngegym paling nyaman di Rogojampi, Daftar segera untuk jadi
                    membership!</div>
                <div class="cta-btns">
                    <div class="mb-4">
                        <a class="btn btn-primary font-weight-bold theme-btn" href="<?php echo e(url('user/register')); ?>">Daftar
                            Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pt-3 pt-md-4">
                <img src="<?php echo e(asset('assets/images/gym3.jpg')); ?>" class="d-block w-100">
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Development\Joki\gym\resources\views/home.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<section class="logos-section theme-bg-primary py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-primary" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="<?php echo e(asset('assets/images/default.png')); ?>" class="img-fluid mb-2" width="100">
                            <h4 class="text-center">Pendaftaran Member</h4>
                        </div>

                        
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

                        <!-- Menampilkan Error form validation -->
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <b>Terjadi kesalahan pada proses input data</b> <br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('user/process-register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="reenter_password" class="form-label">Ulangi Password</label>
                                <input type="password" class="form-control" id="reenter_password"
                                    name="reenter_password">
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg" type="button">Daftar</button>
                            </div>

                            <div class="d-grid gap-2 mt-4 mb-1">
                                <p class="mb-0">Sudah punya akun?</p>
                                <a href="<?php echo e(url('user/login')); ?>" class="btn btn-outline-back">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/user/register.blade.php ENDPATH**/ ?>
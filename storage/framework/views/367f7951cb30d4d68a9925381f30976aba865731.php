<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arista Gym</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo e(asset('assets/css/theme.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
    <header class="header">
        <div class="branding">
            <div class="container position-relative">
                <nav class="navbar navbar-expand-lg">
                    <h1 class="site-logo">
                        <a class="navbar-brand" href="/">
                            <img class="logo-icon img-fluid" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo" width="70px">
                        </a>
                    </h1>

                    
                    <ul class="social-list list-inline mb-0 position-absolute">
                        <?php if(Auth::check() == false): ?>
                        <li class="list-inline-item">
                            <a class="btn btn-info" href="<?php echo e(url('user/register')); ?>">Daftar Member</i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-dark" href="<?php echo e(url('user/login')); ?>">Login</i></a>
                        </li>
                        <?php else: ?>
                        <li class="list-inline-item">
                            <a class="btn btn-info" href="<?php echo e(url('dashboard')); ?>">Dashboard</i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-danger" href="<?php echo e(url('user/process-logout')); ?>">Logout</i></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php echo $__env->yieldContent('content'); ?>

    <script type="text/javascript" src="<?php echo e(asset('assets/plugins/popper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH D:\Development\Joki\gym\resources\views/layouts/app.blade.php ENDPATH**/ ?>
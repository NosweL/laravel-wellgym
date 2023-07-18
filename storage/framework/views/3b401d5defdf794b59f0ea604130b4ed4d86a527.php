<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arista Gym</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/simple-datatables/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/choices.js/choices.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>" />
</head>

<body>
    <div id="app">
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('assets/js/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendors.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\Development\Joki\gym\resources\views/layouts/main.blade.php ENDPATH**/ ?>
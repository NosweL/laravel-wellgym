

<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Tambah Suplemen</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="<?php echo e(route('suplemen.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Suplemen</label>
                            <input type="text" name="nama" class="form-control" required
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="integer" name="harga" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="integer" name="stock" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/suplemen/add_suplemen.blade.php ENDPATH**/ ?>
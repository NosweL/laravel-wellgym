<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Update Paket</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="<?php echo e(route('pakets.update', $editData->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Paket</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo e($editData->nama); ?>" required
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Durasi (Hari)</label>
                            <input type="integer" name="durasi" class="form-control" value="<?php echo e($editData->durasi); ?>" required
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="integer" name="harga" class="form-control" value="<?php echo e($editData->harga); ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/paket/edit_paket.blade.php ENDPATH**/ ?>
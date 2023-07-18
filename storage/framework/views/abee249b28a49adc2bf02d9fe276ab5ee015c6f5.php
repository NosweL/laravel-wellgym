

<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Edit Latihan</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="<?php echo e(route('latihan.update', $latihan->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo e($latihan->nama); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" required><?php echo e($latihan->deskripsi); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="current_foto" class="form-label">Current Foto</label>
                            <img src="<?php echo e(asset($latihan->foto)); ?>" width="100px" height="100px" alt="Current Foto" class="img-thumbnail">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/latihan/edit_latihan.blade.php ENDPATH**/ ?>
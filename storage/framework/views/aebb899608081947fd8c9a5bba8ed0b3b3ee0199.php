

<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Suplemen</h3>
        </div>
        <section class="section">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Suplemen</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="<?php echo e(route('suplemen.create')); ?>" class="btn btn-primary">Tambah Suplemen</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stock</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $suplemens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suplemen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($suplemen->nama); ?></td>
                                            <td>Rp. <?php echo e($suplemen->harga); ?></td>
                                            <td><?php echo e($suplemen->stock); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('suplemen.edit', $suplemen->id)); ?>"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="<?php echo e(route('suplemen.delete', $suplemen->id)); ?>"
                                                        class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus suplemen ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/suplemen/view_suplemen.blade.php ENDPATH**/ ?>
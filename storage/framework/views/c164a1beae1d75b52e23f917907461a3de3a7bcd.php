<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Paket</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <a href="/paket/add" class="btn btn-primary mb-3">Tambah Paket</a>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $allDataPaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($paket->nama); ?></td>
                                    <td><?php echo e($paket->durasi); ?> Hari</td>
                                    <td>Rp. <?php echo e($paket->harga); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('pakets.edit', $paket->id)); ?>" class="btn btn-warning"><span
                                                data-feather="edit"></span></a>
                                        <a href="<?php echo e(route('pakets.delete', $paket->id)); ?>" class="btn btn-danger"><span
                                                data-feather="x-circle"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Development\Joki\gym\resources\views/paket/view_paket.blade.php ENDPATH**/ ?>
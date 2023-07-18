<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Paket</h3>
        </div>
        <section class="section">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Paket</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="/paket/add" class="btn btn-primary">Tambah Paket</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Durasi</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $allDataPaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($paket->nama); ?></td>
                                            <td><?php echo e($paket->durasi); ?> Hari</td>
                                            <td>Rp. <?php echo e($paket->harga); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('pakets.edit', $paket->id)); ?>"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="<?php echo e(route('pakets.delete', $paket->id)); ?>"
                                                        class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/paket/view_paket.blade.php ENDPATH**/ ?>
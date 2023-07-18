

<?php $__env->startSection('content'); ?>
    <div id="main">
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Daftar Latihan</h3>
            </div>
            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Latihan</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="/latihan/create" class="btn btn-primary">Tambah Latihan</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $latihans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latihan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($latihan->nama); ?></td>
                                                    <td><?php echo e($latihan->deskripsi); ?></td>
                                                    <td>
                                                        <?php if($latihan->foto): ?>
                                                            Foto Alat <br> <img src="<?php echo e(asset($latihan->foto)); ?>" width="100px" height="100px">
                                                        <?php else: ?>
                                                            No Image
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(route('latihan.edit', $latihan->id)); ?>"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="<?php echo e(route('latihan.delete', $latihan->id)); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus latihan ini?')">Hapus</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/latihan/view_latihan.blade.php ENDPATH**/ ?>
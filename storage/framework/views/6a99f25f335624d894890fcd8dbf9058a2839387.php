

<?php $__env->startSection('content'); ?>
    <div id="main">
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Jadwal Aktif</h3>
            </div>
            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Jadwal Aktif</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="/jadwal/create" class="btn btn-primary">Buat Jadwal</a>
                                    <a href="/jadwal/riwayat" class="btn btn-dark">Riwayat Transaksi</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Coach</th>
                                                <th>Paket</th>
                                                <th>Harga</th>
                                                <th>Jadwal Mulai</th>
                                                <th>Jadwal Selesai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($item->coach->nama); ?></td>
                                                    <td><?php echo e($item->paket->nama); ?></td>
                                                    <td>Rp. <?php echo e($item->paket->harga); ?></td>
                                                    <td><?php echo e($item->jadwal_mulai); ?></td>
                                                    <td><?php echo e($item->jadwal_selesai); ?></td>
                                                    <td>
                                                        <?php if($item->status == 0): ?>
                                                            <span class="badge bg-danger">Belum Aktif</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-success">Aktif</span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">Tidak ada jadwal aktif. <a href="<?php echo e(url('jadwal/create')); ?>">Buat jadwal sekarang!</a></td>
                                                </tr>
                                            <?php endif; ?>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/jadwal/view.blade.php ENDPATH**/ ?>
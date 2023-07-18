<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Transaksi</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Member</th>
                                    <th>Coach</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th>Jadwal Mulai</th>
                                    <th>Jadwal Selesai</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($transaksi->member->name); ?></td>
                                    <td><?php echo e($transaksi->coach->nama); ?></td>
                                    <td><?php echo e($transaksi->paket->nama); ?></td>
                                    <td>Rp. <?php echo e($transaksi->paket->harga); ?></td>
                                    <td><?php echo e($transaksi->jadwal_mulai); ?></td>
                                    <td><?php echo e($transaksi->jadwal_selesai); ?></td>
                                    <td>
                                        <?php if($transaksi->pembayaran == 0): ?>
                                        Bayar Di Tempat
                                        <?php else: ?>
                                        Transfer (<a href="<?php echo e(url($transaksi->bukti)); ?>">Bukti</a>)
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($transaksi->status == 1): ?>
                                        <span class="badge bg-success">Aktif</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger">Belum Aktif</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('transaksi/edit', $transaksi->id)); ?>"
                                            class="btn btn-warning"><span data-feather="edit"></span></a>
                                        <a href="<?php echo e(url('transaksi/delete', $transaksi->id)); ?>"
                                            class="btn btn-danger"><span data-feather="x-circle"></span></a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Development\Joki\gym\resources\views/transaksi/index.blade.php ENDPATH**/ ?>
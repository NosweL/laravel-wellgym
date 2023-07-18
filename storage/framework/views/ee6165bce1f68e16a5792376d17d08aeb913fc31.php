<?php $__env->startSection('content'); ?>
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Jadwal Aktif</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Coach</th>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th>Jadwal Mulai</th>
                                <th>Jadwal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($transaksi->coach->nama); ?></td>
                                <td><?php echo e($transaksi->paket->nama); ?></td>
                                <td>Rp. <?php echo e($transaksi->paket->harga); ?></td>
                                <td><?php echo e($transaksi->jadwal_mulai); ?></td>
                                <td><?php echo e($transaksi->jadwal_selesai); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada jadwal aktif. <a href="<?php echo e(url('jadwal/create')); ?>">Buat jadwal sekarang!</a></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    $(function () {
        $("#pembayaran").change(function () {
            if ($("#cod").is(":selected")) {
                $("#bukti_tf").hide();
            } else {
                $("#bukti_tf").show();
            }
        }).trigger('change');
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Development\Joki\gym\resources\views/jadwal/riwayat.blade.php ENDPATH**/ ?>
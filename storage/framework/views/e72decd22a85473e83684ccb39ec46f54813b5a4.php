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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($data): ?>
                            <tr>
                                <td><?php echo e($data->coach->nama); ?></td>
                                <td><?php echo e($data->paket->nama); ?></td>
                                <td>Rp. <?php echo e($data->paket->harga); ?></td>
                                <td><?php echo e($data->jadwal_mulai); ?></td>
                                <td><?php echo e($data->jadwal_selesai); ?></td>
                                <td>
                                    <?php if($data->status == 0): ?>
                                    <span class="badge bg-danger">Belum Aktif</span>
                                    <?php else: ?>
                                    <span class="badge bg-success">Aktif</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php else: ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Development\Joki\gym\resources\views/jadwal/view.blade.php ENDPATH**/ ?>
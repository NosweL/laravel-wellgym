<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Update Transaksi</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="<?php echo e(url('transaksi/update', $data->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" <?php echo e($data->status == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="flexRadioDefault1">Aktif</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" <?php echo e($data->status == 0 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="flexRadioDefault2">Belum Aktif</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Member</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo e($data->member->name); ?>" disabled required data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Nama Coach</label>
                            <select class="form-select" name="coach_id">
                                <?php $__currentLoopData = $coachs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($coach->id); ?>" <?php echo e($data->coach_id == $coach->id ? 'selected' : ''); ?>><?php echo e($coach->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Pilihan Paket</label>
                            <select class="form-select" name="paket_id">
                                <?php $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($paket->id); ?>" <?php echo e($data->paket_id == $paket->id ? 'selected' : ''); ?>><?php echo e($paket->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jadwal Mulai</label>
                            <input type="date" name="jadwal_mulai" class="form-control" value="<?php echo e($data->jadwal_mulai); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jadwal Selesai</label>
                            <input type="date" name="jadwal_selesai" class="form-control" value="<?php echo e($data->jadwal_selesai); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <input type="text" name="pembayaran" class="form-control" value="<?php echo e($data->pembayaran == 0 ? 'Bayar Di Tempat' : 'Transfer'); ?>" disabled>
                            <input type="file" name="bukti" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    $(function () {
        $("#pembayaran").change(function () {
            if ($("#cod").is(":selected")) {
                $("#norek").hide();
                $("#bukti_tf").hide();
            } else {
                $("#norek").show();
                $("#bukti_tf").show();
            }
        }).trigger('change');
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>
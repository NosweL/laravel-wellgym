

<?php $__env->startSection('content'); ?>
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-primary" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h4 class="text-center">Edit Penilaian</h4>
                        </div>

                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <b>Terjadi kesalahan pada proses input data</b> <br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('penilaian.update', $penilaian->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3">
                                <label for="coach_id" class="form-label">Nama Coach</label>
                                <select name="coach_id" id="coach_id" class="form-control">
                                    <option value="">Pilih Coach</option>
                                    <?php $__currentLoopData = $coaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($coach->id); ?>"
                                        <?php echo e($penilaian->coach_id == $coach->id ? 'selected' : ''); ?>>
                                        <?php echo e($coach->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="latihan_id" class="form-label">Nama Latihan</label>
                                <select name="latihan_id" id="latihan_id" class="form-control">
                                    <option value="">Pilih Latihan</option>
                                    <?php $__currentLoopData = $latihans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latihan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($latihan->id); ?>"
                                        <?php echo e($penilaian->latihan_id == $latihan->id ? 'selected' : ''); ?>>
                                        <?php echo e($latihan->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nilai" class="form-label">Nilai</label>
                                <input type="number" class="form-control" id="nilai" name="nilai"
                                    value="<?php echo e($penilaian->nilai); ?>">
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/penilaian/edit.blade.php ENDPATH**/ ?>
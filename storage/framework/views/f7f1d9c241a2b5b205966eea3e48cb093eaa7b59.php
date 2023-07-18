

<?php $__env->startSection('content'); ?>
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-primary" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h4 class="text-center">Edit Pembelian Suplemen</h4>
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

                        <form action="<?php echo e(route('belisuplemen.update', $beliSuplemen->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3">
                                <label for="user_id" class="form-label">Nama User</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="">Pilih User</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"
                                        <?php echo e($beliSuplemen->user_id == $user->id ? 'selected' : ''); ?>>
                                        <?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="suplemen_id" class="form-label">Nama Suplemen</label>
                                <select name="suplemen_id" id="suplemen_id" class="form-control">
                                    <option value="">Pilih Suplemen</option>
                                    <?php $__currentLoopData = $suplemen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suplemen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($suplemen->id); ?>"
                                        <?php echo e($beliSuplemen->suplemen_id == $suplemen->id ? 'selected' : ''); ?>>
                                        <?php echo e($suplemen->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control" id="tanggal_pembelian"
                                    name="tanggal_pembelian" value="<?php echo e($beliSuplemen->tanggal_pembelian); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_pembelian" class="form-label">Jumlah Pembelian</label>
                                <input type="number" class="form-control" id="jumlah_pembelian"
                                    name="jumlah_pembelian" value="<?php echo e($beliSuplemen->jumlah_pembelian); ?>">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/belisuplemen/edit.blade.php ENDPATH**/ ?>
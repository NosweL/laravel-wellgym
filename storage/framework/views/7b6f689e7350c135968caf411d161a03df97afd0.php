

<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Penilaian</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="<?php echo e(route('penilaian.create')); ?>" class="btn btn-primary">Tambah Penilaian</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Coach</th>
                                    <th>Nama Latihan</th>
                                    <th>Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $penilaian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penilaian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($penilaian->coach->nama); ?></td>
                                    <td><?php echo e($penilaian->latihan->nama); ?></td>
                                    <td><?php echo e($penilaian->nilai); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('penilaian.edit', $penilaian->id)); ?>"
                                            class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?php echo e(route('penilaian.delete', $penilaian->id)); ?>"
                                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus penilaian ini?')">Hapus</a>
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
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/penilaian/index.blade.php ENDPATH**/ ?>
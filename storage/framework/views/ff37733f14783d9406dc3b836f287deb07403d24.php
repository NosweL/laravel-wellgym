

<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pembelian Suplemen</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="<?php echo e(route('belisuplemen.create')); ?>" class="btn btn-primary">Tambah Pembelian Suplemen</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>Nama Suplemen</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Jumlah Pembelian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $beliSuplemen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beliSuplemen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($beliSuplemen->user->name); ?></td>
                                    <td><?php echo e($beliSuplemen->suplemen->nama); ?></td>
                                    <td><?php echo e($beliSuplemen->tanggal_pembelian); ?></td>
                                    <td><?php echo e($beliSuplemen->jumlah_pembelian); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('belisuplemen.edit', $beliSuplemen->id)); ?>"
                                            class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?php echo e(route('belisuplemen.delete', $beliSuplemen->id)); ?>"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pembelian suplemen ini?')">Hapus</a>
                                        </form>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/belisuplemen/index.blade.php ENDPATH**/ ?>
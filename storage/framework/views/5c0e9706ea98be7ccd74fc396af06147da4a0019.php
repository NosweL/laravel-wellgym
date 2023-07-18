<?php $__env->startSection('content'); ?>
    <div id="main">
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Daftar Coach</h3>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Coach List</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="/coach/add" class="btn btn-primary">Tambah Coach</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">      
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">No Telp</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $allDataCoach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($coach->nama); ?></td>
                                                    <td><?php echo e($coach->no_telp); ?></td>
                                                    <td><?php echo e($coach->alamat); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('coachs.edit', $coach->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="<?php echo e(route('coachs.delete', $coach->id)); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus coach ini?')">Hapus</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/coach/view_coach.blade.php ENDPATH**/ ?>
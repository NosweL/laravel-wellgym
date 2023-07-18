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
                    <form method="post" action="<?php echo e(route('coachs.update', $editData->id)); ?>" onsubmit="return validatePhoneNumber()">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo e($editData->nama); ?>" required
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo e($editData->alamat); ?>" required
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telp</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?php echo e($editData->no_telp); ?>" required
                                data-validation-required-message="This field is required">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    function validatePhoneNumber() {
        var phoneNumber = document.getElementById('no_telp').value;
        var isNumeric = /^\d+$/.test(phoneNumber);
        if (!isNumeric) {
            alert('Nomor telepon harus berupa angka!');
            return false;
        }
        return true;
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/coach/edit_coach.blade.php ENDPATH**/ ?>
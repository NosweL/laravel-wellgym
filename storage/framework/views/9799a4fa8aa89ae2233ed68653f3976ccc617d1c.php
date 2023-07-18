<?php $__env->startSection('content'); ?>
<div id="main">
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Tambah Coach</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="<?php echo e(route('coachs.store')); ?>" onsubmit="return validateForm()">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required
                                pattern="[A-Za-z\s]+" title="Nama harus berupa huruf"
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telp</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control" required
                                pattern="[0-9]+" title="Nomor telepon harus berupa angka"
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required
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
    function validateForm() {
        var nama = document.getElementById('nama').value;
        var noTelp = document.getElementById('no_telp').value;
        var nameRegex = /^[A-Za-z\s]+$/;
        var phoneRegex = /^[0-9]+$/;

        if (nama.trim() === '' || !nameRegex.test(nama)) {
            alert('Nama harus berupa huruf!');
            return false;
        }

        if (!phoneRegex.test(noTelp)) {
            alert('Nomor telepon harus berupa angka!');
            return false;
        }

        return true;
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\welygym\resources\views/coach/add_coach.blade.php ENDPATH**/ ?>
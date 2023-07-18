<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arista Gym - Invoice</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo e(asset('assets/css/theme.css')); ?>">
</head>

<body>
    <div class="row justify-content-center my-5">
        <div class="col-8">
            <div class="alert alert-primary">Tunjukkan ke Pegawai Arista Gym untuk mengaktifkan jadwal.</div>
            <div class="card border-dark">
                <div class="card-header border-dark d-flex justify-content-start">
                    <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="img-fluid" width="30">
                    <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">
                        INVOICE
                    </p>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama </td>
                            <td>: <?php echo e($data->member->name); ?></td>
                        </tr>
                        <tr>
                            <td>Coach</td>
                            <td>: <?php echo e($data->coach->nama); ?></td>
                        </tr>
                        <tr>
                            <td>Paket</td>
                            <td>: <?php echo e($data->paket->nama); ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>: Rp. <?php echo e($data->paket->harga); ?></td>
                        </tr>
                        <tr>
                            <td>Jadwal Mulai</td>
                            <td>: <?php echo e($data->jadwal_mulai); ?></td>
                        </tr>
                        <tr>
                            <td>Jadwal Selesai</td>
                            <td>: <?php echo e($data->jadwal_selesai); ?></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td>: <?php echo e(($data->pembayaran == 0) ? 'Bayar Di Tempat' : 'Transfer'); ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>: <?php echo e(($data->status == 0) ? 'Belum Aktif' : 'Aktif'); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer border-dark text-end">
                    <small class="text-secondary mb-0">© Arista Gym</small>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\Development\Joki\gym\resources\views/transaksi/invoice.blade.php ENDPATH**/ ?>
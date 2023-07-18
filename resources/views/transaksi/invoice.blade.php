<!DOCTYPE html>
<html lang="en">

<head>
    <title>Well Gym - Invoice</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
</head>

<body>
    <div class="row justify-content-center my-5">
        <div class="col-8">
            <div class="alert alert-primary">Tunjukkan ke Pegawai WELL GYM untuk mengaktifkan jadwal.</div>
            <div class="card border-dark">
                <div class="card-header border-dark d-flex justify-content-start">
                    <img src="{{ asset('assets/images/default.png') }}" class="img-fluid" width="30">
                    <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">
                        INVOICE
                    </p>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama </td>
                            <td>: {{$data->member->name}}</td>
                        </tr>
                        <tr>
                            <td>Coach</td>
                            <td>: {{$data->coach->nama}}</td>
                        </tr>
                        <tr>
                            <td>Paket</td>
                            <td>: {{$data->paket->nama}}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>: Rp. {{$data->paket->harga}}</td>
                        </tr>
                        <tr>
                            <td>Jadwal Mulai</td>
                            <td>: {{$data->jadwal_mulai}}</td>
                        </tr>
                        <tr>
                            <td>Jadwal Selesai</td>
                            <td>: {{$data->jadwal_selesai}}</td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td>: {{($data->pembayaran == 0) ? 'Bayar Di Tempat' : 'Transfer'}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>: {{($data->status == 0) ? 'Belum Aktif' : 'Aktif'}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer border-dark text-end">
                    <small class="text-secondary mb-0">© Well Gym</small>
                </div>
                <div>
                    <button type="submit" class="btn btn-back"><a href="/jadwal/detail">Lihat Status</a></button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>

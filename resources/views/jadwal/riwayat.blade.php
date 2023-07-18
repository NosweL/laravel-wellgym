@extends('layouts.app')

@section('content')
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Riwayat Jadwal Aktif</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Coach</th>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th>Jadwal Mulai</th>
                                <th>Jadwal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $transaksi)
                            <tr>
                                <td>{{$transaksi->coach->nama}}</td>
                                <td>{{$transaksi->paket->nama}}</td>
                                <td>Rp. {{$transaksi->paket->harga}}</td>
                                <td>{{$transaksi->jadwal_mulai}}</td>
                                <td>{{$transaksi->jadwal_selesai}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada jadwal aktif. <a href="{{url('jadwal/create')}}">Buat jadwal sekarang!</a></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="/jadwal/detail">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    $(function () {
        $("#pembayaran").change(function () {
            if ($("#cod").is(":selected")) {
                $("#bukti_tf").hide();
            } else {
                $("#bukti_tf").show();
            }
        }).trigger('change');
    });
</script>
@endsection

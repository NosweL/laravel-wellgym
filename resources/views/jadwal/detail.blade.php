@extends('layouts.app')
@section('content')
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Jadwal Aktif</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Coach</th>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th>Jadwal Mulai</th>
                                <th>Jadwal Selesai</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data)
                            <tr>
                                <td>{{$data->coach->nama}}</td>
                                <td>{{$data->paket->nama}}</td>
                                <td>Rp. {{$data->paket->harga}}</td>
                                <td>{{$data->jadwal_mulai}}</td>
                                <td>{{$data->jadwal_selesai}}</td>
                                <td>
                                    @if($data->status == 0)
                                    <span class="badge bg-danger">Belum Aktif</span>
                                    @else
                                    <span class="badge bg-success">Aktif</span>
                                    @endif
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada jadwal aktif. <a href="{{url('jadwal/create')}}">Buat jadwal sekarang!</a></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
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

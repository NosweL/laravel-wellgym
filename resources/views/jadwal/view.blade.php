@extends('layouts.main')

@section('content')
    <div id="main">
        @include('layouts.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Jadwal Aktif</h3>
            </div>
            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Jadwal Aktif</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="/jadwal/create" class="btn btn-primary">Buat Jadwal</a>
                                    <a href="/jadwal/riwayat" class="btn btn-dark">Riwayat Transaksi</a>
                                </div>
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
                                            @forelse($data as $item)
                                                <tr>
                                                    <td>{{$item->coach->nama}}</td>
                                                    <td>{{$item->paket->nama}}</td>
                                                    <td>Rp. {{$item->paket->harga}}</td>
                                                    <td>{{$item->jadwal_mulai}}</td>
                                                    <td>{{$item->jadwal_selesai}}</td>
                                                    <td>
                                                        @if($item->status == 0)
                                                            <span class="badge bg-danger">Belum Aktif</span>
                                                        @else
                                                            <span class="badge bg-success">Aktif</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Tidak ada jadwal aktif. <a href="{{url('jadwal/create')}}">Buat jadwal sekarang!</a></td>
                                                </tr>
                                            @endforelse
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
@endsection

@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Transaksi</h3>
        </div>
        <section class="section">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Member</th>
                                            <th>Coach</th>
                                            <th>Paket</th>
                                            <th>Harga</th>
                                            <th>Jadwal Mulai</th>
                                            <th>Jadwal Selesai</th>
                                            <th>Pembayaran</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $transaksi)
                                        <tr>
                                            <td>{{$transaksi->member->name}}</td>
                                            <td>{{$transaksi->coach->nama}}</td>
                                            <td>{{$transaksi->paket->nama}}</td>
                                            <td>Rp. {{$transaksi->paket->harga}}</td>
                                            <td>{{$transaksi->jadwal_mulai}}</td>
                                            <td>{{$transaksi->jadwal_selesai}}</td>
                                            <td>
                                                @if($transaksi->pembayaran == 0)
                                                Bayar Di Tempat
                                                @else
                                                Transfer (<a href="{{url($transaksi->bukti)}}">Bukti</a>)
                                                @endif
                                            </td>
                                            <td>
                                                @if($transaksi->status == 1)
                                                <span class="badge bg-success">Aktif</span>
                                                @else
                                                <span class="badge bg-danger">Belum Aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('transaksi/edit', $transaksi->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{url('transaksi/delete', $transaksi->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
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

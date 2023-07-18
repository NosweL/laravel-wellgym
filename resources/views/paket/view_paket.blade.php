@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Paket</h3>
        </div>
        <section class="section">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Paket</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="/paket/add" class="btn btn-primary">Tambah Paket</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Durasi</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allDataPaket as $key => $paket)
                                        <tr>
                                            <td>{{$paket->nama}}</td>
                                            <td>{{$paket->durasi}} Hari</td>
                                            <td>Rp. {{$paket->harga}}</td>
                                            <td>
                                                <a href="{{route('pakets.edit', $paket->id)}}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="{{route('pakets.delete', $paket->id)}}"
                                                        class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</a>
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

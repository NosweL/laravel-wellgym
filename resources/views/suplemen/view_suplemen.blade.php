@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Suplemen</h3>
        </div>
        <section class="section">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Suplemen</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ route('suplemen.create') }}" class="btn btn-primary">Tambah Suplemen</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stock</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($suplemens as $suplemen)
                                        <tr>
                                            <td>{{$suplemen->nama}}</td>
                                            <td>Rp. {{$suplemen->harga}}</td>
                                            <td>{{$suplemen->stock}}</td>
                                            <td>
                                                <a href="{{route('suplemen.edit', $suplemen->id)}}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="{{route('suplemen.delete', $suplemen->id)}}"
                                                        class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus suplemen ini?')">Hapus</a>
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

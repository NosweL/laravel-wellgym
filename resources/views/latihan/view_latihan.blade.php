@extends('layouts.main')

@section('content')
    <div id="main">
        @include('layouts.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Daftar Latihan</h3>
            </div>
            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Latihan</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="/latihan/create" class="btn btn-primary">Tambah Latihan</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($latihans as $latihan)
                                                <tr>
                                                    <td>{{ $latihan->nama }}</td>
                                                    <td>{{ $latihan->deskripsi }}</td>
                                                    <td>
                                                        @if ($latihan->foto)
                                                            Foto Alat <br> <img src="{{asset($latihan->foto)}}" width="100px" height="100px">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('latihan.edit', $latihan->id) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="{{ route('latihan.delete', $latihan->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus latihan ini?')">Hapus</a>
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

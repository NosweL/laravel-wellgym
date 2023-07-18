@extends('layouts.main')

@section('content')
    <div id="main">
        @include('layouts.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Daftar Coach</h3>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Coach List</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="/coach/add" class="btn btn-primary">Tambah Coach</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">      
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">No Telp</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allDataCoach as $key => $coach)
                                                <tr>
                                                    <td>{{$coach->nama}}</td>
                                                    <td>{{$coach->no_telp}}</td>
                                                    <td>{{$coach->alamat}}</td>
                                                    <td>
                                                        <a href="{{route('coachs.edit', $coach->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="{{route('coachs.delete', $coach->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus coach ini?')">Hapus</a>
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

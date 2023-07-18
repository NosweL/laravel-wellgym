@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Penilaian</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('penilaian.create') }}" class="btn btn-primary">Tambah Penilaian</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Coach</th>
                                    <th>Nama Latihan</th>
                                    <th>Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penilaian as $penilaian)
                                <tr>
                                    <td>{{ $penilaian->coach->nama }}</td>
                                    <td>{{ $penilaian->latihan->nama }}</td>
                                    <td>{{ $penilaian->nilai }}</td>
                                    <td>
                                        <a href="{{ route('penilaian.edit', $penilaian->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('penilaian.delete', $penilaian->id) }}"
                                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus penilaian ini?')">Hapus</a>
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
</div>
</section>
@endsection
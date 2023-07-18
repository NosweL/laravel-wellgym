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
                        <h4 class="card-title">Daftar Pembelian Suplemen</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('belisuplemen.create') }}" class="btn btn-primary">Tambah Pembelian Suplemen</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>Nama Suplemen</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Jumlah Pembelian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beliSuplemen as $beliSuplemen)
                                <tr>
                                    <td>{{ $beliSuplemen->user->name }}</td>
                                    <td>{{ $beliSuplemen->suplemen->nama }}</td>
                                    <td>{{ $beliSuplemen->tanggal_pembelian }}</td>
                                    <td>{{ $beliSuplemen->jumlah_pembelian }}</td>
                                    <td>
                                        <a href="{{ route('belisuplemen.edit', $beliSuplemen->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('belisuplemen.delete', $beliSuplemen->id) }}"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pembelian suplemen ini?')">Hapus</a>
                                        </form>
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

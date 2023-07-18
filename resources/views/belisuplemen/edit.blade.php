@extends('layouts.app')

@section('content')
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-primary" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h4 class="text-center">Edit Pembelian Suplemen</h4>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <b>Terjadi kesalahan pada proses input data</b> <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('belisuplemen.update', $beliSuplemen->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="user_id" class="form-label">Nama User</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="">Pilih User</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $beliSuplemen->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="suplemen_id" class="form-label">Nama Suplemen</label>
                                <select name="suplemen_id" id="suplemen_id" class="form-control">
                                    <option value="">Pilih Suplemen</option>
                                    @foreach ($suplemen as $suplemen)
                                    <option value="{{ $suplemen->id }}"
                                        {{ $beliSuplemen->suplemen_id == $suplemen->id ? 'selected' : '' }}>
                                        {{ $suplemen->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control" id="tanggal_pembelian"
                                    name="tanggal_pembelian" value="{{ $beliSuplemen->tanggal_pembelian }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_pembelian" class="form-label">Jumlah Pembelian</label>
                                <input type="number" class="form-control" id="jumlah_pembelian"
                                    name="jumlah_pembelian" value="{{ $beliSuplemen->jumlah_pembelian }}">
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

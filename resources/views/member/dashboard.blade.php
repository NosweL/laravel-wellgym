@extends('layouts.app')
@section('content')
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row my-5">
            <div class="col-md-6 mt-md-0 mt-4">
                <p>Selamat! kamu telah menjadi member WELL GYM.</p>
                <div class="row d-flex">
                    <div class="col">
                        <a href="/jadwal/create" class="btn btn-success">Buat Jadwal</a>
                    </div>
                    <div class="col">
                        <a href="/jadwal/view" class="btn btn-warning">Lihat Jadwal</a>
                    </div>
                    <div class="col">
                        <a href="/jadwal/riwayat" class="btn btn-dark">Riwayat Transaksi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card border-info">
                    <div class="card-header border-info d-flex justify-content-start">
                        <img src="{{ asset('assets/images/default.png') }}" class="img-fluid" width="30">
                        <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">
                            KARTU MEMBER
                        </p>
                    </div>
                    <div class="card-body">
                        <h2><b>{{ $user->name }}</b></h2>
                        <p class="text-secondary mb-0">{{ $user->email }}</p>
                    </div>
                    <div class="card-footer border-info">
                        <small class="text-secondary mb-0">Bergabung sejak <b>{{ $user->created_at }}</b></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

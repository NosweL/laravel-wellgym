@extends('layouts.app')
@section('content')
<section class="hero-section">
    <div class="container">
        {{-- Alert ketika success dan error --}}
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-warning">
            {{ Session::get('error') }}
            @php
            Session::forget('error');
            @endphp
        </div>
        @endif
        <div class="row">
            <div class="col-12 col-md-6 pt-3 pt-md-4">
                <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Selamat Datang di <b>WELL GYM</b></h2>
                <div class="site-tagline mb-3">Tempat ngegym paling nyaman di Malang, Daftar segera untuk jadi
                    membership!</div>
                <div class="cta-btns">
                    <div class="mb-4">
                        <a class="btn btn-primary font-weight-bold theme-btn" href="{{ url('user/register') }}">Daftar
                            Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pt-3 pt-md-4">
                <img src="{{ asset('assets/images/gym3.jpg') }}" class="d-block w-100">
            </div>
        </div>
    </div>
</section>
@endsection

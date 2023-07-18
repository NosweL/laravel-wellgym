@extends('layouts.app')

@section('content')
<section class="logos-section theme-bg-primary py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-primary" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/images/default.png') }}" class="img-fluid mb-2" width="100">
                            <h4 class="text-center">Login</h4>
                        </div>

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

                        <!-- Menampilkan Error form validation -->
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

                        <form action="{{ url('user/process-login') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg" type="button">Login</button>
                            </div>

                            <div class="d-grid gap-2 mt-4 mb-1">
                                <p class="mb-0">Daftar Member ? Click Daftar Dibawah ini! </p>
                                <a href="{{ url('user/register') }}" class="btn btn-outline-back">Daftar Member</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

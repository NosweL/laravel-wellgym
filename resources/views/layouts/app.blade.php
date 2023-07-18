<!DOCTYPE html>
<html lang="en">

<head>
    <title>WELL GYM</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    @yield('style')
</head>

<body>
    <header class="header">
        <div class="branding">
            <div class="container position-relative">
                <nav class="navbar navbar-expand-lg">
                    <h1 class="site-logo">
                        <a class="navbar-brand" href="/">
                            <img class="logo-icon img-fluid" src="{{asset('assets/images/default.png')}}" alt="logo" width="70px">
                        </a>
                    </h1>

                    {{-- PENGECEKAN SUDAH LOGIN APA BELUM --}}
                    <ul class="social-list list-inline mb-0 position-absolute">
                        @if (Auth::check() == false)
                        <li class="list-inline-item">
                            <a class="btn btn-info" href="{{ url('user/register') }}">Daftar Member</i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-dark" href="{{ url('user/login') }}">Login</i></a>
                        </li>
                        @else
                        <li class="list-inline-item">
                            <a class="btn btn-info" href="{{ url('dashboard') }}">Dashboard</i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-danger" href="{{ url('user/process-logout') }}">Logout</i></a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    @yield('content')

    <script type="text/javascript" src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('script')
</body>

</html>

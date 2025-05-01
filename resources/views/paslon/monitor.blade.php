<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Monitor | Borneo Corner</title>
    <meta name="description" content="">
    <meta name="keywords" content="Borneo Corner">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        body,
        html {
            height: 100%;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100">
                <div class="col-xl-12 col-lg-12 col-md-12 m-auto">
                    <div class=" text-center">
                        <a href="#"><img width="7%" src="{{ asset('KPU_Logo.png') }}"
                                alt="Borneo Corner"></a>
                    </div>
                    <h1 class="text-white text-center">
                        <b> Counter Paslon</b>
                    </h1>

                    <div class="row">
                        @foreach ($paslon as $item)
                            <div class="col-md-4">
                                <div class="card">

                                    <div class="card-body">
                                        <h5 class="text-center" style="font-size: 40px; font-weight: bold;">
                                            {{ $item->nama }}</h5>
                                        {{-- Jumlah Peserta Masuk --}}
                                        <p class="card-text text-center" style="font-size: 20px; font-weight: bold;">
                                            Jumlah Peserta Masuk</p>
                                        <h1 class="text-center" style="font-size: 200px; font-weight: bold;">
                                            {{ $item->hasEntrance ? $item->hasEntrance->count() : 0 }}
                                        </h1>
                                        {{-- Jumlah Peserta Belum Masuk --}}
                                        <p class="card-text">Jumlah Peserta Belum Masuk:
                                            {{ $item->hasPeserta ? $item->hasPeserta->count() - ($item->hasEntrance ? $item->hasEntrance->count() : 0) : 0 }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

</body>

</html>

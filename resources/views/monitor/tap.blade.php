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
                        <a href="#"><img width="7%" src="{{ asset('KPU_Logo.png') }}" alt="Borneo Corner"></a>
                    </div>
                    <h1 class="text-white text-center">

                        <b> Selamat Datang Peserta</b>
                    </h1>
                    <h1 class="text-white text-center">

                        <b> {{$dataEvent->nama}}</b>
                    </h1>
                    <div class="row">
                        <div class="col-sm-6 m-auto">
                            <form method="POST" action="{{ route('monitor.store') }}">
                                @csrf
                                <div class="input-group input-group-button">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Scan Qrcode</button>
                                    </div>
                                    <input type="text" class="form-control" name="barcode" placeholder="Scan Qrcode" autofocus>
                                    <input type="hidden" name="event_id" value="{{$dataEvent->id}}">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        @if (session('message'))
                        <div class="col-md-6 col-lg-6  m-auto  pt-10" id="#success-alert">
                            <div class="container-fluid alert alert-{{ session('Class') }} alert-dismissible fade show"
                                role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (session('peserta'))
                        <div class="col-md-6 col-lg-6  m-auto  pt-10" id="#success-alert">
                            <div class="container-fluid alert alert-{{ session('Class') }} alert-dismissible fade show"
                                role="alert">
                                {{ session('peserta') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>

</body>

</html>

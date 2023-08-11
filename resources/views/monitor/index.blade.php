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

                    <h1 class="text-white text-center">
                      <b> Daftar Event</b>
                    </h1>
                    <div class="row">
                        <div class="col-5 m-auto">
                             @if (session('message'))
                        <div class="row pt-10" id="#success-alert">
                            <div class="container-fluid alert alert-{{ session('Class') }} alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        </div>
                    </div>

                    @foreach ($dataEvent as $event)
                    <a href="{{route('monitor.show', $event->id)}}" >
                        <div class="row">
                            <div class="col-5 m-auto">
                                <div class="card proj-t-card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="far fa-calendar-check text-red f-30"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">{{$event->nama}}</h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <h6 class="mb-0">Tanggal Mulai : <br>{{$event->start}}</h6>
                                            </div>
                                            <div class="col"><i class="ik ik-arrow-right text-red f-18"></i></div>
                                            <div class="col">
                                                <h6 class="mb-0">Tanggal Selesai : <br>{{$event->end}}</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                    @endforeach
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

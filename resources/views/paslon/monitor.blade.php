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
    {{-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> --}}

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
                    @if ($dataEvent)
                        <h1 class="text-white text-center">
                            <b> {{ $dataEvent->nama }}</b>
                        </h1>
                        <div id="paslonmonitor">
    
                            <div class="row" >
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
                                                    {{ $item->hasEntranceById($dataEvent->id) ? $item->hasEntranceById($dataEvent->id)->count() : 0 }}
                                                </h1>
                                                {{-- Jumlah Peserta Belum Masuk --}}
                                                <p class="card-text text-center" style="font-size: 15px; font-weight: bold;">Jumlah Peserta Belum Masuk:
                                                </p>
                                                <h1 class="text-center" style="font-size: 20px; font-weight: bold;">
                                                    {{ $item->hasPeserta ? $item->hasPeserta->count() - ($item->hasEntranceById($dataEvent->id) ? $item->hasEntranceById($dataEvent->id)->count() : 0) : 0 }}
                                                </h1>
    
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                    @foreach ($listEvent as $event)
                    <a href="{{route('paslon.monitor', ['event_id' => $event->id])}}" >
                        <div class="row">
                            <div class="col-5 m-auto">
                                <div class="card proj-t-card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="far fa-calendar-check text-red f-30"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">
                                                    {{-- ambil 2 kata dari nama event --}}
                                                    {{Str::limit($event->nama, 20)}}
                                                </h6>
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
                    @endif
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

    <script type="text/javascript">

        // set interval
        setInterval(function() {
            $('#paslonmonitor').load(location.href + ' #paslonmonitor');
        }, 2000);
    </script>
</body>

</html>

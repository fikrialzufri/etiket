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

                            <form method="POST" action="{{ route('monitor.store') }}" id="tabqrcode">
                                @csrf
                                <div class="d-flex justify-content-center">
                                    <div class="text-center">
                                        <div id="qr-reader" style="width:300px"></div>
                                    </div>

                                </div>
                                <div class="input-group input-group-button">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Scan Qrcode</button>
                                    </div>
                                    <input type="text" class="form-control" name="barcode" id="barcode"
                                        placeholder="Scan Qrcode" autofocus>
                                    <input type="hidden" name="event_id" id="event_id" value="{{$dataEvent->id}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @if(session('success'))

    <script type="text/javascript">
        var timerInterval;

        Swal.fire({
            title: 'Peserta Dipersilahakan masuk',
            html: "",
            timer: 5000,
            didOpen: () => {
                const content = Swal.getHtmlContainer()
                const $ = content.querySelector.bind(content)

                const stop = $('#stop')
                const resume = $('#resume')
                const toggle = $('#toggle')
                const increase = $('#increase')

                Swal.showLoading()

                function toggleButtons() {
                    stop.disabled = !Swal.isTimerRunning()
                    resume.disabled = Swal.isTimerRunning()
                }

                stop.addEventListener('click', () => {
                    Swal.stopTimer()
                    toggleButtons()
                })

                resume.addEventListener('click', () => {
                    Swal.resumeTimer()
                    toggleButtons()
                })

                toggle.addEventListener('click', () => {
                    Swal.toggleTimer()
                    toggleButtons()
                })

                increase.addEventListener('click', () => {
                    Swal.increaseTimer(5000)
                })

                timerInterval = setInterval(() => {
                    Swal.getHtmlContainer().querySelector('strong')
                        .textContent = (Swal.getTimerLeft() / 1000)
                        .toFixed(0)
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        })
    </script>
    @endif
    @if(session('message'))

    {{-- <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script> --}}
    <script type="text/javascript">
        var timerInterval;

        Swal.fire({
            title: "{{session('message')}}",
            html: "",
            timer: 5000,
            didOpen: () => {
                const content = Swal.getHtmlContainer()
                const $ = content.querySelector.bind(content)

                const stop = $('#stop')
                const resume = $('#resume')
                const toggle = $('#toggle')
                const increase = $('#increase')

                Swal.showLoading()

                function toggleButtons() {
                    stop.disabled = !Swal.isTimerRunning()
                    resume.disabled = Swal.isTimerRunning()
                }

                stop.addEventListener('click', () => {
                    Swal.stopTimer()
                    toggleButtons()
                })

                resume.addEventListener('click', () => {
                    Swal.resumeTimer()
                    toggleButtons()
                })

                toggle.addEventListener('click', () => {
                    Swal.toggleTimer()
                    toggleButtons()
                })

                increase.addEventListener('click', () => {
                    Swal.increaseTimer(5000)
                })

                timerInterval = setInterval(() => {
                    Swal.getHtmlContainer().querySelector('strong')
                        .textContent = (Swal.getTimerLeft() / 1000)
                        .toFixed(0)
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        })
    </script>
    @endif

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;

        function onScanSuccess(decodedText, decodedResult) {

            console.log(decodedResult);
            let event_id = $('#event_id').val();


            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;

                // Handle on success condition with the decoded message.
                // var $tes = 'https://192.168.1.19/absensi-qr/public/absen/' + decodedText + '/hadir';
                // var $tes = decodedText;
                $.ajax({
                    type: 'post',
                    url: "{{ route('monitor.tab') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "barcode":lastResult,
                        "event_id":event_id
                    },
                    success: function(data) {
                        console.log(data);
                        swall2a(data)
                        // $("#no_ticket").val(data.data);
                    }, error: function(data) {
                        swall2a(data.responseJSON)
                        // $("#no_ticket").val(data.data);
                    },
                });
            }
            if (lastResult != '') {


            }
        }

        function swall2a(data) {
        var timerInterval;

        console.log(data.code);
            let title = data.code == 200 ? "Absensi Sukses" : "Absensi gagal";
            let type = data.code == 200 ? "success" : "error";
           swal({
           title: title,
           text: data.message,
           type: type,
           timer:3000
       });
        }

        // Html5Qrcode.getCameras().then(devices => {
        //     console.log(devices);
        //     if (devices && devices.length) {
        //         var cameraId;
        //         var cameraLabel;
        //         if (devices.length === 1) {
        //             cameraId = devices[0].id;
        //         } else {
        //             cameraId = devices[1].id;
        //             if (cameraLabel.includes("front")) {
        //                 cameraId = devices[2].id;
        //             }
        //         }

        //         const html5QrCode = new Html5Qrcode("qr-reader");
        //         html5QrCode.start(
        //                 cameraId, {
        //                     fps: 10,
        //                     qrbox: 250
        //                 },
        //                 qrCodeMessage => {
        //                     //Things you want to do when you match a QR Code

        //                     if (qrCodeMessage) {
        //                         $('#barcode').val(qrCodeMessage);
        //                         $('#tabqrcode').first().trigger("submit");
        //                     }
        //                 },
        //                 errorMessage => {
        //                     // parse error, ignore it.
        //                 })
        //             .catch(err => {
        //                 // Start failed, handle it.
        //             });

        //         }
        //          html5QrCode.render(onScanSuccess);
        // }).catch(err => {

        // });
        var html5QrcodeScanner = new Html5QrcodeScanner(
        "qr-reader", {
            fps: 10,
            qrbox: 250
        });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</body>

</html>

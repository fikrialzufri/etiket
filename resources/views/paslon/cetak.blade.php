<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} | Borneo Corner</title>
    <meta name="description" content="">
    <meta name="keywords" content="Borneo Corner">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" />


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <style>
        @page {
            size: legal;
            margin: 1cm;
        }

        @media print {
            html,
            body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

            page {
                display: block;
                page-break-after: always;
                margin: 0;
                padding: 10px;
            }

            page:last-child {
                page-break-after: avoid;
            }

            .contentStriker {
                page-break-inside: avoid;
                page-break-after: always;
            }

            .row {
                page-break-inside: avoid;
            }
        }

        .col-md-3point5 {
            width: 5.5cm;
            height: 5.8cm;
            margin-bottom: 0.5cm;
            page-break-inside: avoid;
        }

        #contentStriker {
            padding: 10px;
        }

        .row.pt-15 {
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
            gap: 10px;
            margin-bottom: 1cm;
        }

        #text {
            white-space: nowrap;
            width: 80%;
            font-size: 20px;
            padding-left: 25px;
        }

        .child {
            display: inline-block;
            vertical-align: top;
            white-space: normal;
        }

        .child2 {
            width: 100%;
        }

        @media print {

            body,
            page[size="a4"] {
                /* background: #680101; */
                width: 21cm;
                padding: 10px;
                height: 29.7cm;
                display: block;
                margin: 0 auto;
                font-family: "Times New Roman", serif;
                font-size: 20px;
                margin-bottom: 0.5cm;
                box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            }
            .contentStriker{
                page-break-inside:avoid; page-break-after:auto;
            }
        }

    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="">
        <div class="container-fluid h-100">
            <div class="">
                <h1>{{ $title }}</h1>
            </div>
            <page id="contentStriker">
                @php $counter = 0; @endphp
                @forelse ($cetak as $item)
                    @if($counter % 20 == 0 && $counter != 0)
                        </div>
                        </page>
                        <page class="contentStriker">
                        <div class="row pt-15">
                    @endif

                    @if($counter % 24 == 0)
                        <div class="row pt-15">
                    @endif
                        <div class="col-md-3point5 text-center" style="border: 1pt solid; ">
                            <div class="">
                                <span style="width: 14rem;  font-size: 12pt; ">{{ $item->kode }}</span>
                            </div>


                            <div class="d-inline-flex">
                                <div width="50%" style="background-color: #ffff; padding:8px;">
                                    {{ QrCode::size(170)->generate($item->kode) }}<br>

                                </div>
                            </div>
                            <br>
                        </div>
                    @php $counter++; @endphp
                @empty
                @endforelse
                </div>
            </page>
        </div>
    </div>

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/screenfull/dist/screenfull.js') }}"></script>
    {{-- Firebase --}}
    <script>
        $(function() {
            $('.image').on('click', function() {
                let image = $(this).attr('data-image');
                $('#imagepreview').attr('src', image);
                $('#imagemodal').modal('show');
            });
        });

        function createPdf() {
            var printContents = document.getElementById('contentStriker').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

        $('#cetakStiker').click(function() {
            createPdf()
        });

        window.onafterprint = function() {
            window.location.reload(true);
        };
        // $('#example').DataTable({
        //   "paging": true,
        //   "lengthChange": true,
        //   "searching": true,
        //   "ordering": true,
        //   "info": true,
        //   "autoWidth": true,
        //   "pageLength": 20,
        // });
    </script>
    <script type="text/javascript">
        window.print();

    </script>

</body>

</html>

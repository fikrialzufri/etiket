@extends('template.app')
@section('title', ucwords(str_replace([':', '_', '-', '*'], ' ', $title)))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- page statustic chart start -->
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered nowrap  ">
                            <thead>
                                <th >No.</th>
                                <th >KPU</th>
                                @foreach ($dataEvent as $event)
                                <th width="15%" class="text-center">
                                    {{$event->nama}}
                                </th>
                                    @endforeach
                            </thead>
                            <tbody>
                                @forelse ($dataBidang as $index => $bidang)
                                <tr>
                                    <td>{{$index + 1}} </td>
                                    <td>{{$bidang->nama}} </td>
                                     @foreach ($dataEvent as $event)

                                    <td class="text-center">{{$bidang->hasEntranceById($event->id)->count()}} </td>

                                    @endforeach
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
@stop

@push('chart')
@endpush
@push('style')
    <style>
        .logox {
            height: 10px;
            top: 0;
        }

        @media (max-width: 500px) {
            #perda {
                height: 52px;
            }
        }

        .modal {
            text-align: center;
        }

        @media screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                position: absolute;
                height: 100%;

            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
            top: 50%;
        }
    </style>
    <link rel="stylesheet" href="http://radmin.test/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="http://radmin.test/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
@endpush
@push('script')
    <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>

    <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
    <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>


    <script src="{{ asset('js/widget-statistic.js') }}"></script>
    <script src="{{ asset('js/widget-data.js') }}"></script>
    <script src="{{ asset('js/dashboard-charts.js') }}"></script>
    <script>
        let grafikGroup = @json($grafikGroup);
    </script>
@endpush

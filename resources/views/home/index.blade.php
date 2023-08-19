@extends('template.app')
@section('title', ucwords(str_replace([':', '_', '-', '*'], ' ', $title)))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- page statustic chart start -->
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a class="btn btn-sm btn-warning float-right text-light mr-5" href="{{route('peserta.excelpeserta')}}">
                            <i class="fa fa-file"></i> Download Peserta
                        </a>
                        @php
                            $number = 1;
                        @endphp
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered nowrap  " id="tablePeserta">
                            <thead>
                                <th >No.</th>
                                <th >KPU</th>
                                <th class="text-center">Jumlah Peserta</th>
                                @foreach ($dataEvent as $event)
                                <th width="15%" class="text-center">
                                    {{$event->nama}}
                                </th>
                                    @endforeach
                            </thead>
                            <tbody>
                                @forelse ($dataBidang as $index => $bidang)
                                <tr>
                                    <td>{{$number ++}} </td>
                                    <td>{{$bidang->nama}} </td>
                                    <td class="text-center">{{$bidang->hasPeserta()->count()}} </td>
                                     @foreach ($dataEvent as $event)

                                    <td class="text-center">
                                        {{$bidang->hasEntranceById($event->id)->count()}}
                                    </td>

                                    @endforeach
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td  class="text-right" colspan="2">Total Peserta</td>
                                    <td class="text-center">{{$pesertaCount}}</td>
                                     @foreach ($dataEvent as $event)

                                    <td class="text-center">{{$event->hasEntrance()->count()}} </td>

                                    @endforeach

                                </tr>
                            </tfoot>
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
    <script>
        setTimeout(function(){
            $( "#tablePeserta" ).load( "#tablePeserta" );
            console.log("refresh ");
        }, 5000);
    </script>
@endpush

@extends('template.app')
@section('title', ucwords(str_replace([':', '_', '-', '*'], ' ', $title)))

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- page statustic chart start -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{-- <a class="btn btn-sm btn-warning float-right text-light mr-5" href="{{route('peserta.excelpeserta')}}">
                    <i class="fa fa-file"></i> Download Peserta
                    </a> --}}
                     <form action="" id="form"  enctype="multipart/form-data">
                        <div class="col-lg-12">

                            <div class="form-group ">
                                <label >Filter KPU </label>
                                <select name="bidang_id" class="selected2 form-control" id="cmbFilter" required>
                                    <option value="">--Pilih KPU--</option>
                                    @foreach ($dataFilterbidang as $bd)
                                    <option value="{{ $bd->id }}" {{ $bidang_id== $bd->id ? 'selected' : '' }}>
                                        {{ $bd->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                     </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered nowrap  " id="tablePeserta">
                        <thead>
                            <th>No.</th>
                            <th>KPU</th>
                            <th class="text-center">Jumlah Peserta</th>
                            <th>Nama Peserta</th>
                            <th>No Hp Peserta</th>
                            <th width="25%">Jabatan </th>
                            <th>Kehadiran</th>
                            @foreach ($dataEvent as $event)
                            <th width="15%" class="text-center" rowspan="3">
                                {{$event->nama}}
                            </th>
                            @endforeach
                        </thead>
                        <tbody>
                            @php
                                $totalPesertaAll = 0;
                                $totalPesertaProvinsi = 0;
                                $totalPesertaKota = 0;
                                $totalPesertaHadirProvinsi = 0;
                                $totalPesertaTidakHadirProvinsi = 0;
                                $totalPesertaHadirKota = 0;
                                $totalPesertaTidakHadirKota = 0;
                            @endphp
                            @forelse ($dataBidang as $index => $bidang)
                            @php
                                $totalPesertaAll += $bidang->hasPeserta()->count();
                                if ($bidang->jumlah_min == 2) {
                                    // Provinsi
                                    $totalPesertaProvinsi += $bidang->hasPeserta()->count();
                                    $totalPesertaHadirProvinsi += $bidang->hasPeserta()->where('hadir','Hadir')->count();
                                    $totalPesertaTidakHadirProvinsi += $bidang->hasPeserta()->where('hadir','Tidak Hadir')->count();
                                }else{
                                    //
                                    $totalPesertaKota += $bidang->hasPeserta()->count();
                                     $totalPesertaHadirKota += $bidang->hasPeserta()->where('hadir','Hadir')->count();
                                     $totalPesertaTidakHadirKota += $bidang->hasPeserta()->where('hadir','Tidak Hadir')->count();
                                }
                            @endphp
                            <tr>
                                <td rowspan="{{$bidang->hasPeserta()->count() + 1}}">{{$index +1}} </td>
                                <td rowspan="{{$bidang->hasPeserta()->count() + 1}}">{{$bidang->nama}} </td>
                                <td class="text-center" rowspan="{{$bidang->hasPeserta()->count() + 1}} ">
                                    {{$bidang->hasPeserta()->count()}} </td>

                                @forelse ($bidang->hasPeserta()->get()->sortBy(function($value){
                                return $value->jabatan_no_urut;
                                }) as $peserta)
                            <tr>

                                <td>{{$peserta->nama}}</td>
                                <td>{{$peserta->no_hp}}</td>
                                <td>{{$peserta->jabatan}}</td>
                                <td>{{$peserta->hadir}}</td>
                                @foreach ($dataEvent as $index => $event)

                                <td class="text-center {{$bidang->hasEntranceByIdPeserta([$event->id, $peserta->id])->count() == 0 ? "bg-danger" : ""}}"
                                    >
                                    {{$bidang->hasEntranceByIdPeserta([$event->id, $peserta->id])->count() > 0 ? "Absen" : "Tidak Absen"}}</td>
                                @endforeach

                                {{-- <td>{{$peserta->jabatan_no_urut}}</td> --}}
                            </tr>
                            @empty
                            {{-- <td rowspan="3"></td> --}}
                            @endforelse

                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-right" colspan="2">Total Peserta</td>
                                <td class="text-center">{{$totalPesertaAll}}</td>
                                <td colspan="4" class="text-right">Total Peserta Absen</td>
                                @foreach ($dataEvent as $event)
                                @if ($bidang_id != '')

                                <td class="text-center">{{$event->hasEntrance()->where('bidang_id',$bidang_id)->count()}} </td>
                                @else
                                 <td class="text-center">{{$event->hasEntrance()->count()}}</td>
                                @endif

                                @endforeach

                            </tr>
                            <tr>
                                <td  colspan="3">Total Peserta Provinsi</td>
                                <td>:</td>
                                <td>{{$totalPesertaProvinsi}}</td>
                                <td colspan="2" class="text-right">Total Belum Absen/Scan</td>
                                 @foreach ($dataEvent as $event)
                                @if ($bidang_id != '')

                                <td class="text-center">{{ $totalPesertaAll - $event->hasEntrance()->where('bidang_id',$bidang_id)->count()}} </td>
                                @else
                                 <td class="text-center">{{$totalPesertaAll - $event->hasEntrance()->count()}}</td>
                                @endif

                                @endforeach
                            </tr>
                            <tr>
                                <td  colspan="3">Total Peserta Kabupaten / Kota</td>
                                <td>:</td>
                                <td>{{$totalPesertaKota}}</td>

                            </tr>
                           <tr>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td  colspan="3">Total Peserta Hadir Provinsi</td>
                                <td>:</td>
                                <td>{{$totalPesertaHadirProvinsi}}</td>
                            </tr>
                            <tr>
                                <td  colspan="3">Total Peserta Tidak Hadir Provinsi</td>
                                <td>:</td>
                                <td>{{$totalPesertaTidakHadirProvinsi}}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td  colspan="3">Total Peserta Hadir Kabupaten / Kota</td>
                                <td>:</td>
                                <td>{{$totalPesertaHadirKota}}</td>
                            </tr>
                            <tr>
                                <td  colspan="3">Total Peserta Tidak Hadir Kabupaten / Kota</td>
                                <td>:</td>
                                <td>{{$totalPesertaTidakHadirKota}}</td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- <div class="">
                      {{ $dataBidang->links()}}
                    </div> --}}
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


@endpush
@push('script')
    <script script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"> </script>
    <script>
         $('#cmbFilter').select2({
                // placeholder: '--- Pilih KPU ---',
                width: '100%'
            });
         $('#cmbFilter').change(function(){
            $('#form').submit();
        });
        setInterval(() => {

            // console.log("refresh 2");
            $("#tablePeserta").load(location.href + " #tablePeserta");
        }, 5000);


    </script>
@endpush



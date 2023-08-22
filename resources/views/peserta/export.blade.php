<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>Document</title>
    <style>
        tr td {
        background-color: #ffffff;
        }

        tr > td {
        border-bottom: 1px solid #000000;
        }
    </style>
</head>
<body>
    <table  id="tablePeserta">
    @php
        $totalPesertaAll = 0;
        $totalPesertaKouta = 0;
        $totalPesertaProvinsi = 0;
        $totalPesertaKota = 0;
        $totalPesertaHadirProvinsi = 0;
        $totalPesertaTidakHadirProvinsi = 0;
        $totalPesertaHadirKota = 0;
        $totalPesertaTidakHadirKota = 0;
        $pesertaBelumDaftar = 0;
        $totalkoutapeserta = 0;
        $totalkoutapesertaProvinsi = 0;
        $totalkoutapesertaKota = 0;
    @endphp
    <tbody>
        <tr>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="50px">No.</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">KPU</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt; text-align: center; font-size:14pt;" width="110px">Jumlah Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt; text-align: center; font-size:14pt;" width="110px">Jumlah Peserta Daftar</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Nama Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">No Hp Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Jabatan </td>
            @foreach ($dataEvent as $event)
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="300px">{{$event->nama}} </td>
            @endforeach

        </tr>
        @forelse ($dataBidang as $index => $bidang)

        @php
            $totalPesertaAll += $bidang->hasPeserta()->count();
            $totalkoutapeserta += $bidang->jumlah_max;
            if ($bidang->jumlah_min == 2) {
                // Provinsi
                $totalkoutapesertaProvinsi += $bidang->jumlah_max;
                $totalPesertaProvinsi += $bidang->hasPeserta()->count();
                $totalPesertaHadirProvinsi += $bidang->hasPeserta()->where('hadir','Hadir')->count();
                $totalPesertaTidakHadirProvinsi += $bidang->hasPeserta()->where('hadir','Tidak Hadir')->count();
            }else{
                //
                $totalPesertaKota += $bidang->hasPeserta()->count();
                    $totalPesertaHadirKota += $bidang->hasPeserta()->where('hadir','Hadir')->count();
                    $totalPesertaTidakHadirKota += $bidang->hasPeserta()->where('hadir','Tidak Hadir')->count();
                    $totalkoutapesertaKota += $bidang->jumlah_max;
            }

        @endphp
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #191818;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;" rowspan="{{$bidang->hasPeserta()->count() + 1  }}">{{$index + 1}} </td>
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;"  rowspan="{{$bidang->hasPeserta()->count() + 1  }}">{{$bidang->nama}} </td>
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;"  rowspan="{{$bidang->hasPeserta()->count() + 1  }}">{{ $bidang->jumlah_max }} </td>
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;"  rowspan="{{$bidang->hasPeserta()->count() + 1  }}">{{$bidang->hasPeserta()->count()}} </td>
        </tr>
        @forelse ($bidang->hasPeserta()->get()->sortBy(function($value){
                                return $value->jabatan_no_urut;
                                }) as $peserta)
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->nama}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->no_hp}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->jabatan}}</td>
            @foreach ($dataEvent as $event)

            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; "
                >
                {{$bidang->hasEntranceByIdPeserta([$event->id, $peserta->id])->count() > 0 ? "Absen" : "Tidak Absen"}}</td>
            @endforeach

        </tr>
        @empty
            <tr style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">
                <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;"></td>
                <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;"></td>
                <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;"></td>
                @foreach ($dataEvent as $event)

            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; "
                ></td>
            @endforeach
            </tr>
        @endforelse
        @empty

        @endforelse
        {{-- @if ($pesertaBelumDaftar > 0)
           <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;" rowspan="6"></td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;" rowspan="6"></td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;" rowspan="6"></td>

        </tr> --}}
        {{-- @endif --}}
        <tr>
            <td></td>
            <td></td>
        </tr>
         <tr style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;"></td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;"></td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt; text-align: center; font-size:14pt;" width="110px">Total Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt; text-align: center; font-size:14pt;" width="150px">Total Peserta Daftar</td>
            <td  colspan="3" style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; "></td>

                 @foreach ($dataEvent as $event)

                <td  style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{$event->nama}}</td>

            @endforeach
        </tr>
         <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; " colspan="2">Total Peserta</td>
            <td  style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{$totalkoutapeserta}}</td>
            <td  style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{$totalPesertaAll}}</td>
            <td colspan="3"  style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Absen</td>
            @foreach ($dataEvent as $event)
            @if ($bidang_id != '')

            <td  style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{$event->hasEntrance()->where('bidang_id',$bidang_id)->count()}} </td>
            @else
                <td  style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{$event->hasEntrance()->count()}}</td>
            @endif

            @endforeach

        </tr>


        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; "></td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; "></td>
            <td colspan="4" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Belum Absen/Scan</td>
                @foreach ($dataEvent as $event)
            @if ($bidang_id != '')

            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaAll - $event->hasEntrance()->where('bidang_id',$bidang_id)->count()}} </td>
            @else
                <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{$totalPesertaAll - $event->hasEntrance()->count()}}</td>
            @endif

            @endforeach
        </tr>

        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>

        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalkoutapeserta }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Belum Daftar</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalkoutapeserta - $totalPesertaAll }}</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>

        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Provinsi</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalkoutapesertaProvinsi }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Provinsi Belum Daftar</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalkoutapesertaProvinsi - $totalPesertaProvinsi }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Provinsi Daftar</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaProvinsi }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Provinsi Daftar Hadir</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaHadirProvinsi }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Provinsi Daftar Tidak Hadir</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaTidakHadirProvinsi }}</td>
        </tr>
        {{-- <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Grandtotal Peserta Provinsi Daftar</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaProvinsi - ($totalkoutapesertaProvinsi - $totalPesertaProvinsi) }}</td>
        </tr> --}}

        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>

        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Kota</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalkoutapesertaKota }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Kota Belum Daftar</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalkoutapesertaKota - $totalPesertaKota }}</td>
        </tr>
         <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Kota Daftar</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaKota }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Kota Daftar Hadir</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaHadirKota }}</td>
        </tr>
        <tr style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">
            <td  colspan="2" style="border: 3px solid #000000; text-align: right; font-size:14pt;  vertical-align: middle; font-size:14pt; ">Total Peserta Kota Daftar Tidak Hadir</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; ">{{ $totalPesertaTidakHadirKota }}</td>
        </tr>

    </tbody>
</table>
</body>
</html>



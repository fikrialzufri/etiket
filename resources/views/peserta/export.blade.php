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

    <tbody>
        @php
            $totalPesertaAll = 0;
            $totalPesertaKouta = 0;
            $totalPesertaProvinsi = 0;
            $totalPesertaKota = 0;
            $totalPesertaHadirProvinsi = 0;
            $totalPesertaTidakHadirProvinsi = 0;
            $totalPesertaHadirKota = 0;
            $totalPesertaTidakHadirKota = 0;
        @endphp
        <tr>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="50px">No.</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">KPU</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt; text-align: center; font-size:14pt;" width="100px">Jumlah Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Nama Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">No Hp Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Jabatan </td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Tanda Terima </td>

        </tr>
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
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;" rowspan="{{$bidang->hasPeserta()->count() + 1 }}">{{$index + 1}} </td>
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;"  rowspan="{{$bidang->hasPeserta()->count() + 1 }}">{{$bidang->nama}} </td>
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;"  rowspan="{{$bidang->hasPeserta()->count() + 1 }}"> {{$bidang->hasPeserta()->count()}} </td>
        </tr>
        @foreach ($bidang->hasPeserta()->get()->sortBy(function($value){
                                return $value->jabatan_no_urut;
                                }) as $peserta)
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->nama}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->no_hp}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->jabatan}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; "> </td>
            @foreach ($dataEvent as $index => $event)

            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;""
                >
                {{$bidang->hasEntranceByIdPeserta([$event->id, $peserta->id])->count() > 0 ? "Absen" : "Tidak Absen"}}
            </td>
            @endforeach
        </tr>
        @endforeach
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
</body>
</html>



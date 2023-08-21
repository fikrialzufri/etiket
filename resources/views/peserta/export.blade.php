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
        <tr>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="50px">No.</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">KPU</td>
            {{-- <td style="border: 3px solid #000000;  text-align: center; font-size:14pt; text-align: center; font-size:14pt;" width="100px">Jumlah Peserta</td> --}}
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Nama Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">No Hp Peserta</td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Jabatan </td>
            <td style="border: 3px solid #000000;  text-align: center; font-size:14pt;" width="400px">Tanda Terima </td>

        </tr>
        @forelse ($dataBidang as $index => $bidang)
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;" rowspan="{{$bidang->hasPeserta()->count() + 1 }}">{{$index + 1}} </td>
            <td style="border: 3px solid #000000;  font-size:14pt;  vertical-align: middle;text-align: center; font-size:14pt;"  rowspan="{{$bidang->hasPeserta()->count() + 1 }}">{{$bidang->nama}} </td>
        </tr>
        @foreach ($bidang->hasPeserta()->get()->sortBy(function($value){
                                return $value->jabatan_no_urut;
                                }) as $peserta)
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->nama}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->no_hp}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt;">{{$peserta->jabatan}}</td>
            <td style="border: 3px solid #000000; text-align: center; font-size:14pt;  vertical-align: middle; font-size:14pt; height:100px; "> </td>
        </tr>
        @endforeach
        @empty

        @endforelse
    </tbody>
</table>
</body>
</html>



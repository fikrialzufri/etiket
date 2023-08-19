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

        tr>td {
            border-bottom: 1px solid #000000;
        }
    </style>
</head>

<body>
    <table id="tablePeserta">

        <tbody>
            <tr>
                <td style="border: 3px solid #000000; text-align: center;" width="50px">No.</td>
                <td style="border: 3px solid #000000;" width="150px">Kode</td>
                <td style="border: 3px solid #000000;" width="400px">Nama</td>
                <td style="border: 3px solid #000000;" width="150px">No HP</td>
                <td style="border: 3px solid #000000;" width="300px">Email</td>
                <td style="border: 3px solid #000000;" width="400px">KPU</td>
                <td style="border: 3px solid #000000;" width="300px">Jabatan</td>
                <td style="border: 3px solid #000000;" width="100px">Kehadiran</td>
                <td style="border: 3px solid #000000;" width="150px">Catatan Tidak Hadir</td>
            </tr>
            @forelse ($dataPeserta as $index => $peserta)
            <tr style="border: 3px solid #000000;">
                <td style="border: 3px solid #000000; text-align: center;">{{$index + 1}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->kode}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->nama}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->no_hp}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->email}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->bidang}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->jabatan}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->hadir}} </td>
                <td style="border: 3px solid #000000;">{{$peserta->catatan}} </td>
            </tr>
            @empty

            @endforelse
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr style="border: 3px solid #000000;">
                <td colspan="3" style="border: 3px solid #000000;">Peserta Hadir</td>
                <td style="border: 3px solid #000000;">:</td>
                <td style="border: 3px solid #000000;">{{$pesertaHadir}}</td>
            </tr>
            <tr style="border: 3px solid #000000;">
                <td colspan="3" style="border: 3px solid #000000;">Peserta Tidak Hadir</td>
                <td style="border: 3px solid #000000;">:</td>
                <td style="border: 3px solid #000000;">{{$pesertaTidakHadir}}</td>
            </tr>
        </tbody>

    </table>
</body>

</html>

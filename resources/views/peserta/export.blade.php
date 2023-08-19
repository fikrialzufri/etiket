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
            <td style="border: 3px solid #000000;" width="50px">No.</td>
            <td style="border: 3px solid #000000;" width="400px">KPU</td>
            <td style="border: 3px solid #000000; text-align: center;" width="100px">Jumlah Peserta</td>
             @foreach ($dataEvent as $event)
            <td  width="350px"  style="text-align: center; border: 3px solid #000000;">
                {{$event->nama}}
            </td>
            @endforeach
        </tr>
        @forelse ($dataBidang as $index => $bidang)
        <tr style="border: 3px solid #000000;">
            <td style="border: 3px solid #000000; text-align: center;">{{$index + 1}} </td>
            <td style="border: 3px solid #000000;" >{{$bidang->nama}} </td>
              @if ($bidang->hasPeserta()->count() > 0)
            <td style="border: 3px solid #000000; text-align: center; background:#590404; color:	#FFFFFF;" >{{$bidang->hasPeserta()->count()}} </td>
            @else
           <td style="border: 3px solid #000000; text-align: center;" >{{$bidang->hasPeserta()->count()}} </td>
            @endif

            @foreach ($dataEvent as $event)
            @if ($bidang->hasEntranceById($event->id)->count() > 0)
            <td  style="text-align: center; border: 3px solid #000000; background:#590404; color:	#FFFFFF;">
                {{$bidang->hasEntranceById($event->id)->count()}}
            </td>
            @else
            <td  style="text-align: center; border: 3px solid #000000;">
                {{$bidang->hasEntranceById($event->id)->count()}}
            </td>
            @endif


            @endforeach
        </tr>
        @empty

        @endforelse
    </tbody>
    <tfoot>
        <tr style="border: 3px solid #000000;">
            <td style="text-align: center; border: 3px solid #000000;" colspan="2">
              <b>Total Peserta</b>
            </td>
            <td style="text-align: center;border: 3px solid #000000;">
              <b> {{$pesertaCount}} </b>
            </td>
            @foreach ($dataEvent as $event)

            <td style="text-align: center;border: 3px solid #000000;">
              <b> {{$event->hasEntrance()->count()}} </b>
            </td>

            @endforeach

        </tr>
    </tfoot>
</table>
</body>
</html>



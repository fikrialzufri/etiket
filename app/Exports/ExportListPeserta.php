<?php

namespace App\Exports;

use App\Models\Peserta;
use App\Models\Event;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportListPeserta implements FromView
{

    public function view(): View
    {

        $dataPeserta = Peserta::all();
        $pesertaHadir = Peserta::where('hadir','Hadir')->count();
        $pesertaTidakHadir = Peserta::where('hadir','Tidak Hadir')->count();
        return view('peserta.listpeserta', compact(
            'dataPeserta',
            'pesertaHadir',
            'pesertaTidakHadir',
        ));
    }
}

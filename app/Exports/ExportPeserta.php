<?php

namespace App\Exports;

use App\Models\Bidang;
use App\Models\Event;
use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportPeserta implements FromView
{

    public function view(): View
    {
        $dataEvent =Event::orderBy('nama')->get();

        $dataBidang =Bidang::with('hasEntrance')->get()->sortBy(function($value){
                 return (int) str_replace("BDG","",$value->kode);;
        });

        $pesertaCount = Peserta::where('hadir','Hadir')->count();

        return view('peserta.export', compact(
            'dataBidang',
            'pesertaCount',
            'dataEvent',
        ));
    }
}

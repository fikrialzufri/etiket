<?php

namespace App\Exports;

use App\Models\Bidang;
use App\Models\Event;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportPeserta implements FromView
{

    public function view(): View
    {
        $dataEvent =Event::get();

        $dataBidang =Bidang::with('hasEntrance')->withCount('hasEntrance')->orderBy('kode')->get();
        return view('peserta.export', compact(
            'dataBidang',
            'dataEvent',
        ));
    }
}

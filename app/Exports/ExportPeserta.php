<?php

namespace App\Exports;

use App\Models\Bidang;
use App\Models\Event;
use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportPeserta implements FromView
{

    protected $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $dataEvent =Event::orderBy('nama')->get();
        $id = $this->id;
        $dataBidang =Bidang::query();
        if ($id) {
            $dataBidang->where('id', $id);
            $DaTabidangId = Bidang::where('parent_id',$id)->get();
            $bidang_id_pluck = $DaTabidangId->pluck('id');
            $dataBidang->orWhere(function($subquery)  use ($bidang_id_pluck){

                    $subquery->whereIn('id',$bidang_id_pluck);
            });
            // $dataBidang->where('parent_id',$bidang_id) ;
        }
        $dataBidang = $dataBidang->orderBy('no_urut')->get();

        $pesertaCount = Peserta::where('hadir','Hadir')->count();

        return view('peserta.export', compact(
            'dataBidang',
            'pesertaCount',
            'dataEvent',
        ));
    }
}

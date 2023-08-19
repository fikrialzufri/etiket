<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Element;
use App\Models\Event;
use App\Models\Group;
use App\Models\JenisUnit;
use App\Models\Peserta;
use App\Models\SubElement;
use App\Models\Unit;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title =  "Dashboard";

        $anggota = 0;
        $pegawai = 0;
        $rapat = 0;
        $jenisRapat = 0;

        $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
        $tahun = Carbon::now()->formatLocalized("%Y");

        $grafikGroup = [];

        $dataJenisUnit = [];

        $dataUnit = [];


        $aduanCount = 0;
        $pekerjaanCount = 0;
        $rekananCount = 0;

        $dataEvent =Event::orderBy('nama')->get();
        $dataBidang =Bidang::with('hasEntrance')->get()->sortBy(function($value){
                 return (int) str_replace("BDG","",$value->kode);;
        });

        $pesertaCount = Peserta::where('hadir','Hadir')->count();

        return view('home.index', compact(
            'title',
            'pegawai',
            'pesertaCount',
            'pekerjaanCount',
            'grafikGroup',
            'rekananCount',
            'dataUnit',
            'dataJenisUnit',
            'anggota',
            'dataEvent',
            'dataBidang',
            'aduanCount',
            'rapat',
            'jenisRapat'
        ));
    }
}

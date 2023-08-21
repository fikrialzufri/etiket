<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Element;
use App\Models\Event;
use App\Models\Group;
use App\Models\Jabatan;
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

         $bidang_id = request()->bidang_id;

        $dataEvent =Event::orderBy('nama')->get();
        $dataFilterbidang = Bidang::orderBy('no_urut')->get();
        $dataBidang =Bidang::query();
        if ($bidang_id) {
            $dataBidang->where('id', $bidang_id);
            $DaTabidangId = Bidang::where('parent_id',$bidang_id)->get();
            $bidang_id_pluck = $DaTabidangId->pluck('id');
            $dataBidang->orWhere(function($subquery)  use ($bidang_id_pluck){

                    $subquery->whereIn('id',$bidang_id_pluck);
            });
            // $dataBidang->where('parent_id',$bidang_id) ;
        }
        $dataBidang = $dataBidang->orderBy('no_urut')->get();

        $pesertaCount = Peserta::where('hadir','Hadir')->count();

        $dataJabatan = Jabatan::orderBy('no_urut', 'asc')->get();

        return view('home.index', compact(
            'title',
            'bidang_id',
            'pegawai',
            'dataFilterbidang',
            'pesertaCount',
            'pekerjaanCount',
            'grafikGroup',
            'rekananCount',
            'dataJabatan',
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

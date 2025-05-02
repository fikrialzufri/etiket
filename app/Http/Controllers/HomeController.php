<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Element;
use App\Models\Entrance;
use App\Models\Event;
use App\Models\Group;
use App\Models\Jabatan;
use App\Models\JenisUnit;
use App\Models\Paslon;
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

        $paslon = Paslon::orderBy('kode')->get();

        $entrance = Entrance::all();

        return view('home.index', compact(
            'title',
            'paslon',
            'entrance',
        ));
    }
}

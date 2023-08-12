<?php

namespace App\Http\Controllers;

use App\Models\Entrance;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class EntranceController extends Controller
{
    use CrudTrait;

    public function __construct()
    {
        $this->route = 'entrance';
        $this->middleware('permission:view-' . $this->route, ['only' => ['index', 'show']]);
        $this->middleware('permission:create-' . $this->route, ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-' . $this->route, ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-' . $this->route, ['only' => ['delete']]);
    }

    public function configHeaders()
    {
        return [
            [
                'name' => 'peserta',
                'alias' => 'Peserta',
            ],
            [
                'name' => 'bidang',
                'alias' => 'KPU',
            ],
            [
                'name' => 'jabatan',
                'alias' => 'Jabatan',
            ],
            [
                'name' => 'created_at',
                'alias' => 'Tanggal Masuk',
            ],
        ];
    }
    public function configSearch()
    {
        return [
            [
                'name' => 'created_at',
                'input' => 'daterange',
                'alias' => 'Tanggal',
            ],
        ];
    }
    public function configForm()
    {

        return [
            [
                'name' => 'event_id',
                'input' => 'combo',
                'alias' => 'Event',
                'value' => $this->combobox('Event', null, null, null, 'nama'),
                'validasi' => ['required']
            ],
            [
                'name' => 'peserta_id',
                'input' => 'combo',
                'alias' => 'Peserta',
                'value' => $this->combobox('Peserta', null, null, null, 'nama'),
                'validasi' => ['required']
            ],
        ];
    }

    public function model()
    {
        return new Entrance();
    }
}

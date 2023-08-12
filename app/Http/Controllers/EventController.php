<?php

namespace App\Http\Controllers;

use App\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    use CrudTrait;

    public function __construct()
    {
        $this->route = 'event';
        $this->middleware('permission:view-' . $this->route, ['only' => ['index', 'show']]);
        $this->middleware('permission:create-' . $this->route, ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-' . $this->route, ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-' . $this->route, ['only' => ['delete']]);
    }

    public function configHeaders()
    {
        return [
            [
                'name' => 'kode',
                'alias' => 'Kode event',
            ],
            [
                'name' => 'nama',
                'alias' => 'Nama event',
            ],
            [
                'name' => 'start',
                'alias' => 'Tanggal Mulai',
            ],
            [
                'name' => 'end',
                'alias' => 'Tanggal Selesai',
            ],
        ];
    }
    public function configSearch()
    {
        return [
            [
                'name' => 'kode',
                'input' => 'text',
                'alias' => 'Kode event',
                'value' => null
            ],
            [
                'name' => 'nama',
                'input' => 'text',
                'alias' => 'Nama event',
                'value' => null
            ],
        ];
    }
    public function configForm()
    {

        return [
            [
                'name' => 'nama',
                'input' => 'text',
                'alias' => 'Nama Event',
                'validasi' => ['required', 'unique', 'min:1'],
            ],

            [
                'name' => 'jumlah_max',
                'input' => 'nominal',
                'alias' => 'Jumlah Maksimal Perserta',
                'validasi' => ['required'],
            ],
            [
                'name' => 'tanggal_mulai',
                'input' => 'datetime',
                'alias' => 'Tanggal & Jam Mulai Event',
                'validasi' => ['required'],
            ],
            [
                'name' => 'tanggal_selesai',
                'input' => 'datetime',
                'alias' => 'Tanggal & Jam Selesai Event',
                'validasi' => ['required'],
            ],
            [
                'name'    => 'kota_id',
                'input'    => 'combo',
                'alias'    => 'Kota',
                'value' => $this->combobox(
                    'Kota'
                ),
                'validasi'    => ['required'],
            ],
        ];
    }

    public function model()
    {
        return new Event();
    }
}

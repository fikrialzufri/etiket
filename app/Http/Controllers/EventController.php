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
                'alias' => 'Nama event',
                'validasi' => ['required', 'unique', 'min:1'],
            ],
            [
                'name' => 'jumlah_min',
                'input' => 'nominal',
                'alias' => 'Jumlah Minimal Perserta',
                'validasi' => ['required'],
            ],
            [
                'name' => 'jumlah_max',
                'input' => 'nominal',
                'alias' => 'Jumlah Maksimal Perserta',
                'validasi' => ['required'],
            ],
        ];
    }

    public function model()
    {
        return new Event();
    }
}
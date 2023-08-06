<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Traits\CrudTrait;

class BidangController extends Controller
{
    use CrudTrait;

    public function __construct()
    {
        $this->route = 'bidang';
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
                'alias' => 'Kode Bidang',
            ],
            [
                'name' => 'nama',
                'alias' => 'Nama Bidang',
            ],
            [
                'name' => 'jumlah_max',
                'alias' => 'Jumlah Maksimal Peserta',
            ],
        ];
    }
    public function configSearch()
    {
        return [
            [
                'name' => 'kode',
                'input' => 'text',
                'alias' => 'Kode Bidang',
                'value' => null
            ],
            [
                'name' => 'nama',
                'input' => 'text',
                'alias' => 'Nama Bidang',
                'value' => null
            ],
        ];
    }
    public function configForm()
    {

        return [
            [
                'name' => 'kode',
                'input' => 'text',
                'alias' => 'Kode Bidang',
                'validasi' => ['required', 'unique'],
            ],
            [
                'name' => 'nama',
                'input' => 'text',
                'alias' => 'Nama Bidang',
                'validasi' => ['required', 'unique'],
            ],
            [
                'name' => 'jumlah_max',
                'input' => 'nominal',
                'alias' => 'Jumlah Maksimal Perserta',
                'validasi' => ['required'],
            ],
            [
                'name' => 'status',
                'input' => 'radio',
                'alias' => 'Status',
                'value' => ['0', '1'],
                'default' => '0',
                'multiple' => true,
            ],
        ];
    }

    public function model()
    {
        return new Bidang();
    }
}
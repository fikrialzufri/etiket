<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Jabatan;
use App\Models\Peserta;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    use CrudTrait;

    public function __construct()
    {
        $this->route = 'peserta';
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
                'alias' => 'Kode Peserta',
            ],
            [
                'name' => 'nama',
                'alias' => 'Nama Peserta',
            ],
        ];
    }
    public function configSearch()
    {
        return [
            [
                'name' => 'kode',
                'input' => 'text',
                'alias' => 'Kode Peserta',
                'value' => null
            ],
            [
                'name' => 'nama',
                'input' => 'text',
                'alias' => 'Nama Peserta',
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
                'alias' => 'Nama Peserta',
                'validasi' => ['required', 'unique', 'min:1'],
            ],
            [
                'name' => 'no_hp',
                'input' => 'text',
                'alias' => 'Nomor HP Peserta',
                'validasi' => ['required', 'unique', 'min:1'],
            ],
            [
                'name' => 'email',
                'input' => 'email',
                'alias' => 'Email Peserta',
                'validasi' => ['required', 'unique', 'min:1'],
            ],
            [
                'name' => 'tanggal_lahir',
                'input' => 'date',
                'alias' => 'Tanggal Lahir Peserta',
                'validasi' => null,
            ],
            [
                'name' => 'alamat',
                'input' => 'textarea',
                'alias' => 'Alamat Peserta',
                'validasi' => null,
            ],
        ];
    }

    function pendaftaran()
    {
        $dataBidang = Bidang::orderBy('nama')->get();
        $dataJabatan = Jabatan::orderBy('nama')->get();
        return view('peserta.pendafataran', compact('dataBidang', 'dataJabatan'));
    }

    public function model()
    {
        return new Peserta();
    }
}
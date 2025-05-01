<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use App\Models\Peserta;
use App\Traits\CrudTrait;

class PaslonController extends Controller
{
    use CrudTrait;

    public function __construct()
    {
        $this->route = 'paslon';
        $this->middleware('permission:view-' . $this->route, ['only' => ['index', 'show']]);
        $this->middleware('permission:create-' . $this->route, ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-' . $this->route, ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-' . $this->route, ['only' => ['delete']]);
        $this->sort = 'nama';
        $this->index = 'paslon';
    }

    public function configHeaders()
    {
        return [
            [
                'name'    => 'kode',
                'alias'    => 'Kode Paslon',
            ],
            [
                'name'    => 'nama',
                'alias'    => 'Nama Paslon',
            ],

        ];
    }
    public function configSearch()
    {
        return [
            [
                'name'    => 'nama',
                'input'    => 'text',
                'alias'    => 'Nama paslon',
                'value'    => null
            ],
        ];
    }
    public function configForm()
    {

        return [
            [
                'name'    => 'nama',
                'input'    => 'text',
                'alias'    => 'Nama paslon',
                'validasi'    => ['required', 'min:1'],
            ],
        ];
    }

    public function model()
    {
        return new Paslon();
    }
    public function cetakpeserta($slug)
    {
        $paslon = $this->model()->where('slug', $slug)->first();
        if (!$paslon) {
            // 404
            abort(404);
        }
        $cetak = Peserta::where('paslon_id', $paslon->id)->where('hadir', 'Hadir')->orderBy('kode')->get();
        $title = 'Cetak Peserta - ' . $paslon->nama;
        return view(
            'paslon.cetak',
            compact(
                "title",
                "cetak",
            )
        );
    }
}

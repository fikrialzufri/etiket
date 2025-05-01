<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
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
}

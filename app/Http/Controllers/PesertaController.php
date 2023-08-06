<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Jabatan;
use App\Models\Peserta;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;
use DB;

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
        $dataBidang = Bidang::orderBy('kode')->get();
        $dataJabatan = Jabatan::orderBy('created_at', 'desc')->get();
        $dataJabatanOld = [];
        if (old('bidang_id')) {
            $bidang_id = old('bidang_id');
            $bidang = Bidang::find($bidang_id);
            if ($bidang) {
                $dataJabatanOld = Jabatan::where('jumlah_min', '>=', $bidang->jumlah_min)->orderBy('created_at', 'desc')->get();
            }
        }

        return view('peserta.pendafataran', compact('dataBidang', 'dataJabatan', 'dataJabatanOld'));
    }
    function simpanpendaftaran(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute tidak boleh sama',
        ];

        // return $request;

        $this->validate(request(), [
            'nama' => 'required|unique:peserta',
            'email' => 'required|unique:peserta',
            'no_hp' => 'required|unique:peserta',
            'bidang_id' => 'required',
            'jabatan_id' => 'required',
            'captcha' => 'required|captcha',
        ], $messages);

        $checkBidang = Bidang::find($request->bidang_id);

        $countBidangPeserta = Peserta::where('bidang_id', $request->bidang_id)->count();

        if ($checkBidang->jumlah_max == $countBidangPeserta) {
            return redirect()->route("peserta.pendaftaran")->with('message', ucwords(str_replace(str_split('\\/:*?"<>|_-'), ' ', $this->route)) . ' Bidang ' . $checkBidang->nama . ' sudah melebihi limit')->with('Class', 'danger');
        }
        DB::beginTransaction();
        try {
            $data = $this->model();
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->no_hp = $request->no_hp;
            $data->bidang_id = $request->bidang_id;
            $data->jabatan_id = $request->jabatan_id;
            $data->save();

            // kirim ke email
            DB::commit();
            return redirect()->route("peserta.pendaftaran")->with('message', "Peserta Berhasil Mendaftar silahkan check email atau hubungi admin acara")->with('Class', 'success');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route("peserta.pendaftaran")->with('message', "Jaringan Bermasalah hubungi admin acara")->with('Class', 'warning');
        }





    }

    public function model()
    {
        return new Peserta();
    }
}
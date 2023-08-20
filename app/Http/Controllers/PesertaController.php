<?php

namespace App\Http\Controllers;

use App\Exports\ExportPeserta;
use App\Exports\ExportListPeserta;
use App\Mail\SendTiket;
use App\Models\Bidang;
use App\Models\Jabatan;
use App\Models\Peserta;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Excel;

class PesertaController extends Controller
{
    use CrudTrait;

    public function __construct()
    {
        $this->route = 'peserta';
        $this->index = 'peserta';
        $this->paginate = 20;
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
            [
                'name' => 'no_hp',
                'alias' => 'No HP Peserta',
            ],
            [
                'name' => 'email',
                'alias' => 'Email Peserta',
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
                'name' => 'hadir',
                'alias' => 'Kehadiran',
            ],
            [
                'name' => 'catatan',
                'alias' => 'Catatan Tidak Hadir',
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
            [
                'name' => 'bidang_id',
                'input' => 'combo',
                'alias' => 'KPU',
                'value' => $this->combobox('Bidang', null, null, null, 'nama'),
                'validasi' => ['required']
            ],
            [
                'name' => 'jabatan_id',
                'input' => 'combo',
                'alias' => 'Jabatan',
                'value' => $this->combobox('Jabatan', null, null, null, 'nama'),
                'validasi' => ['required']
            ],
             [
                'name' => 'hadir',
                'input' => 'radio',
                'alias' => 'Kehadiran',
                'value' => [ 'Hadir', 'Tidak Hadir'],
                'default' => null,
            ],
        ];
    }
    public function configForm()
    {

        return [
             [
                'name' => 'kode',
                'input' => 'text',
                'alias' => 'Kode Peserta',
            ],
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
            // [
            //     'name' => 'tanggal_lahir',
            //     'input' => 'date',
            //     'alias' => 'Tanggal Lahir Peserta',
            //     'validasi' => null,
            // ],
            [
                'name' => 'bidang_id',
                'input' => 'combo',
                'alias' => 'KPU',
                'value' => $this->combobox('Bidang', null, null, null, 'nama'),
                'validasi' => ['required']
            ],
            [
                'name' => 'jabatan_id',
                'input' => 'combo',
                'alias' => 'Jabatan',
                'value' => $this->combobox('Jabatan', null, null, null, 'nama'),
                'validasi' => ['required']
            ],
            [
                'name' => 'alamat',
                'input' => 'textarea',
                'alias' => 'Alamat Peserta',
                'validasi' => null,
            ],
            [
                'name' => 'status',
                'input' => 'radio',
                'alias' => 'Status',
                'value' => ['0', '1'],
                'default' => '1',
                'multiple' => true,
            ],
             [
                'name' => 'hadir',
                'input' => 'radio',
                'alias' => 'Kehadiran',
                'value' => ['Tidak Hadir ', 'Hadir'],
                'default' => 'Hadir',
            ],
        ];
    }

    public function index()
    {
        //nama title
        if (!isset($this->title)) {
            $title = ucwords($this->route);
        } else {
            $title = ucwords($this->title);
        }

        //nama route
        $route = $this->route;

        //nama relation
        $relations = $this->relations;

        //nama jumlah pagination
        $paginate = $this->paginate;

        //declare nilai serch pertama
        $search = null;

        //memanggil configHeaders
        $configHeaders = $this->configHeaders();

        //memangil model peratama
        $query = $this->model()::query();

        //button
        $button = null;

        //tambah data
        $tambah = $this->tambah;
        $edit = $this->edit;
        $hapus = $this->hapus;

        //tambah data
        $upload = $this->upload;

        $export = null;

        if ($this->configButton()) {
            $button = $this->configButton();
        }
        //mulai pencarian --------------------------------
        $searches = $this->configSearch();
        $searchValues = [];
        $n = 0;
        $countAll = 0;
        $queryArray = [];
        $queryRaw = '';
        foreach ($searches as $key => $val) {
            $search[$key] = request()->input($val['name']);
            $hasilSearch[$val['name']] = $search[$key];
            if ($val['input'] === "rupiah" || $val['input'] === "nominal") {
                $search[$key] = str_replace(".", "", request()->input($val['name']));
            }

            // return $search[$key];
            if ($search[$key]) {

                if ($val['input'] != 'daterange') {

                    $searchValues[$key] = preg_split('/\s+/', $search[$key], -1, PREG_SPLIT_NO_EMPTY);

                    if (count($searchValues[$key]) == 1) {
                        foreach ($searchValues[$key] as $index => $value) {
                            $query->where($val['name'], 'like', "%{$value}%");
                            $countAll = $countAll + 1;
                        }
                    } else {
                        $lastquery = '';

                        foreach ($searchValues[$key] as $index => $word) {
                            if (preg_match("/^[a-zA-Z0-9]+$/", $word) == 1) {

                                if ($queryRaw) {
                                    $count = $this->model()->whereRaw(rtrim($queryRaw, " and"))->count();
                                    if ($count > 0) {
                                        $countAll = $countAll + 1;
                                        $lastquery = $queryRaw;

                                        $queryRaw .= $val['name'] . ' LIKE "%' . $word . '%" and ';
                                        if ($this->model()->whereRaw(rtrim($queryRaw, " and"))->count() == 0) {
                                            $queryRaw = $lastquery;
                                        }
                                    }
                                } else {
                                    $count = $this->model()->where($val['name'], 'like', "%{$word}%")->count();
                                    if ($count > 0) {
                                        $countAll = $countAll + 1;

                                        $queryRaw .= $val['name'] . ' LIKE "%' . $word . '%" and ';
                                        continue;
                                    }
                                }
                            }
                        }
                    }

                    if ($queryRaw) {
                        $query->whereRaw(rtrim($queryRaw, " and "));
                    }
                    if (count($queryArray) > 0) {
                        $query->where($queryArray);
                    }
                } else {
                    $date = explode(' - ', request()->input($val['name']));
                    $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
                    $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';
                    // $query = $query->whereBetween(DB::raw('DATE(' . $val['name'] . ')'), array($start, $end));
                    $query = $query->whereRaw(
                        "(" . $val['name'] . " >= ? AND " . $val['name'] . " <= ?)",
                        [
                            $start . " 00:00:00",
                            $end . " 23:59:59"
                        ]
                    );

                    $export .= 'from=' . $start . '&to=' . $end;
                    $countAll = $countAll + 1;
                }

                if ($countAll == 0) {
                    $query->where('id', "");
                }
            }
            $export .= $val['name'] . '=' . $search[$key] . '&';
        }

        //akhir pencarian --------------------------------
        // relatio
        // sort by
        if ($this->user) {
            if (!Auth::user()->hasRole('superadmin') && !Auth::user()->hasRole('admin')) {
                $query->where('user_id', Auth::user()->id);
            }
        }

        if ($this->queryScope() != null) {

            // return $this->queryScope();
            foreach ($this->queryScope() as $key => $value) {

                if (isset($value['field']) && isset($value['value']) && isset($value['operator'])) {
                    $field = $value['field'];

                    $value = $value['value'];
                    $query->$field($value);
                } elseif (isset($value['field']) && isset($value['field'])) {
                    $field = $value['field'];

                    $value = $value['value'];
                    $query->$field($value);
                } else {
                    $field = $value['field'];

                    $query->$field();
                    // $query->$queryScope();
                }
            }
        }


        if ($this->sort) {
            if ($this->desc) {
                $data = $query->orderBy($this->sort, $this->desc);
            } else {
                $data = $query->orderBy($this->sort);
            }
        }
        $cetak = $this->model()::where('hadir','Hadir')->paginate(20);
        $pesertaHadir = $this->model()::where('hadir','Hadir')->count();
        $pesertaTidakHadir = $this->model()::where('hadir','Tidak Hadir')->count();
        //mendapilkan data model setelah query pencarian
        if ($paginate) {
            $data = $query->paginate($paginate);
        } else {
            $data = $query->get();
        }

        // return $button;
        $template = 'template.index';
        if ($this->index) {
            $template = $this->index . '.index';
        }

        // return $hasilSearch;

        return view(
            $template,
            compact(
                "title",
                "data",
                "cetak",
                'searches',
                'hasilSearch',
                'button',
                'pesertaHadir',
                'pesertaTidakHadir',
                'tambah',
                'edit',
                'hapus',
                'upload',
                'search',
                'export',
                'configHeaders',
                'route'
            )
        );
    }
    function pendaftaran()
    {
        $dataBidang = Bidang::whereStatus(1)->orderBy('kode')->get();
        $dataJabatan = Jabatan::orderBy('no_urut', 'asc')->get();
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
            'nama' => 'required|unique:peserta,nama,NULL,id,deleted_at,NULL',
            'email' => 'required|unique:peserta,email,NULL,id,deleted_at,NULL',
            'no_hp' => 'required|unique:peserta,no_hp,NULL,id,deleted_at,NULL',
            'bidang_id' => 'required',
            'jabatan_id' => 'required',
            'captcha' => 'required|captcha',
        ], $messages);

        $checkBidang = Bidang::find($request->bidang_id);

        $countBidangPeserta = Peserta::where('bidang_id', $request->bidang_id)->count();

        $countBidangJabatanPeserta = Peserta::where('bidang_id', $request->bidang_id)->where('jabatan_id', $request->jabatan_id)->count();

        $dataJabatan = Jabatan::find($request->jabatan_id);

        if ($checkBidang->jumlah_max == $countBidangPeserta) {
            return redirect()->route("peserta.pendaftaran")->with('message', ucwords(str_replace(str_split('\\/:*?"<>|_-'), ' ', $this->route)) . ' Bidang ' . $checkBidang->nama . ' sudah melebihi limit')->with('Class', 'danger');
        }
        if ($countBidangJabatanPeserta > 1) {
            return redirect()->route("peserta.pendaftaran")->with('message', ucwords(str_replace(str_split('\\/:*?"<>|_-'), ' ', $this->route)) . ' Bidang ' . $checkBidang->nama . ' Jabatan '.$dataJabatan->nama.' sudah di isi')->with('Class', 'danger');
        }
        DB::beginTransaction();
        try {
            $data = $this->model();
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->no_hp = $request->no_hp;
            $data->hadir = $request->hadir;
            $data->catatan = $request->catatan;
            $data->bidang_id = $request->bidang_id;
            $data->jabatan_id = $request->jabatan_id;
            $data->save();

            // kirim ke email



            Mail::to($data->email)
                ->send(new SendTiket($data));

            // return $request;
            DB::commit();

            return redirect()->route("peserta.pendaftaran")->with('message', "Peserta Berhasil Mendaftar silahkan check email (spam email) atau hubungi admin acara")->with('Class', 'success');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route("peserta.pendaftaran")->with('message', "Email anda tidak valid / Jaringan Bermasalah silahkan hubungi admin acara")->with('Class', 'danger');
        }
    }


    function kirimemail(Peserta $peserta)
    {
        try {
            Mail::to($peserta->email)
                ->send(new SendTiket($peserta));
            return redirect()->route("peserta.index")->with('message', "Berhasil kirim ulang email")->with('Class', 'success');
        } catch (\Throwable $th) {
            return redirect()->route("peserta.pendaftaran")->with('message', "Email / Jaringan Bermasalah hubungi support Borneo Corner")->with('Class', 'danger');
        }
    }

    public function model()
    {
        return new Peserta();
    }

    public function excelpeserta()
    {
        $now = Carbon::now();
        return Excel::download(new ExportPeserta(), 'Export Kehadiran Peserta '.$now.'.xlsx');
    }
    public function excellistpeserta()
    {
        $now = Carbon::now();
        return Excel::download(new ExportListPeserta(), 'Export Daftar Peserta '.$now.'.xlsx');
    }
}

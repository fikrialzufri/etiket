@extends('template.app')
@section('title', ucwords(str_replace([':', '_', '-', '*'], ' ', $title)))
@push('head')
<style>
    @page {
        size: legal;
        margin: 0;
    }

    @media print {

        html,
        body {
            width: 215mm;
            max-width: 215mm;
            height: 355mm;
            margin: 5px;
        }
    }

    #text {
        white-space: nowrap;
        width: 80%;
        font-size: 20px;
        padding-left: 25px;
    }

    .child {
        display: inline-block;
        vertical-align: top;
        white-space: normal;
    }

    .child2 {
        width: 100%;
    }

    @media print {

        body,
        page[size="legal"] {
            background: white;
            width: 21cm;
            padding: 40px;
            height: 29.7cm;
            display: block;
            margin: 0 auto;
            font-family: "Times New Roman", serif;
            font-size: 20px;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }
    }
</style>
@endpush
@section('content')

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Daftar {{ ucwords(str_replace([':', '_', '-', '*'], ' ', $title)) }}
                    </h3>
                    {{ $data->appends(request()->input())->links() }}
                    <div class="">
                        @if ($upload == 'true')
                        @canany(['import-' . str_replace('_', '-', $route)])
                        <a href="{{ route($route . '.upload') }}"
                            class="btn btn-sm btn-warning float-right text-light mr-5">
                            <i class="fa fa-file"></i> Import
                        </a>
                        @endcan
                        @endif
                        @if ($tambah == 'true')
                        @canany(['create-' . str_replace('_', '-', $route)])
                        <a href="{{ route($route . '.create') }}" class="btn btn-sm btn-primary float-right text-light">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>
                        @endcan
                        @endif
                        <span class="btn btn-sm btn-warning float-right text-light mr-5" id="cetakStiker">
                            <i class="fa fa-file"></i> Cetak Qrcode
                        </span>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="" role="form" id="form" enctype="multipart/form-data">
                        <div class="row">

                            @foreach ($searches as $key => $item)
                            <div class="col-lg-2">

                                <label for="{{ $item['name'] }}">{{ ucfirst($item['alias']) }}</label>
                                @include('template.formsearch')
                            </div>
                            @endforeach

                            <div class="col-lg-3">
                                <label for="">Aksi</label>
                                <div class="input-group">


                                    <button type="submit" class="btn btn-warning">
                                        <span class="fa fa-search"></span>
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <table class="table table-bordered table-responsive " id="example">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">No</th>
                                @foreach ($configHeaders as $key => $header)
                                    @if (isset($header['alias']))
                                        @if (isset($header['input']))
                                            <th {{ $header['input'] != 'nominal' ?: 'class=text-center' }}>{{ ucfirst($header['alias']) }}</th>
                                        @else
                                            <th >{{ ucfirst($header['alias']) }}</th>
                                        @endif
                                    @else
                                        <th>{{ ucfirst($header['name']) }}</th>
                                    @endif
                                    @endforeach
                                    @if ($edit != 'false'|| $hapus != 'false')
                                    @canany(['edit-' . $route, 'delete-' . $route])
                                    <th class="text-center">Aksi</th>
                                    @endcan
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $item)

                            <tr>
                                <td class="text-center">{{ $index + 1 + ($data->CurrentPage() - 1) * $data->PerPage() }}</td>
                                @foreach ($configHeaders as $key => $header)
                                    @if (isset($header['input']))
                                        @if ($header['input'] == 'rupiah')
                                            <td>Rp. {{ format_uang($item[$header['name']]) }}</td>
                                        @elseif ($header['input'] == 'nominal')
                                            <td class="text-center">{{ format_uang($item[$header['name']]) }}</td>
                                        @elseif ($header['input'] == 'date')
                                            <td>
                                                @if ($item[$header['name']] != null || $item[$header['name']] != '')
                                                {{ tanggal_indonesia($item[$header['name']]) }}
                                                @endif
                                            </td>
                                        @elseif ($header['input'] == 'image')
                                            <td width="10%">
                                                @if ($item[$header['name']] != null || $item[$header['name']] != '')
                                                <img class=" img-responsive image" width="50%"
                                                    src="{{ asset('storage/' . $route . '/thumbnail/' . $item[$header['name']]) }}"
                                                    data-image={{ asset('storage/' . $route . '/' . $item[$header['name']]) }}>
                                                @endif

                                            </td>
                                        @endif
                                    @else
                                        <td>{{ $item[$header['name']] }}</td>
                                    @endif
                                @endforeach
                                <td class="text-center">
                                    @if ($edit != 'false'|| $hapus != 'false')
                                        @canany(['edit-' . $route, 'delete-' . $route])
                                        @if (isset($button))
                                        @foreach ($button as $key => $val)
                                        @include('template.button')
                                        @endforeach
                                        @endif
                                        @if ($edit != 'false')

                                        @can('edit-' . $route)
                                        <a href="{{ route($route . '.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning text-light" data-toggle="tooltip"
                                            data-placement="top" title="Edit">
                                            <i class="nav-icon fas fa-edit"></i> Ubah</a>
                                        @endcan
                                        @endif
                                        @if ($hapus != 'false')

                                        @can('delete-' . $route)
                                        <form id="form-{{ $item->id }}" action="{{ route($route . '.destroy', $item->id) }}"
                                            method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>

                                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                                            title="Hapus" onclick=deleteconf("{{ $item->id }}")>
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                        @endcan
                                        @endif

                                        @endcan
                                        @endif
                                        <a href="{{ route('peserta.kirimemail', $item->id) }}" class="btn btn-sm btn-primary text-light" data-toggle="tooltip"
                                            data-placement="top" title="Kirim Email">
                                            <i class="nav-icon fas fa-envelope"></i> Kirim Email</a>
                                    </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10">Data
                                    {{ ucwords(str_replace([':', '_', '-', '*'], ' ', $title)) }} tidak ada</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7" class="text-right">
                                   <b>Total Peserta Hadir</b>
                                </td>
                                <td>:</td>
                                <td>
                                    <b>{{$pesertaHadir}}</b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-right">
                                  <b>Total Peserta Tidak Hadir</b>
                                </td>
                                <td>:</td>
                                <td>
                                    <b>  {{$pesertaTidakHadir}}</b>

                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $data->appends(request()->input())->links('template.pagination') }}
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</div>
<page id="contentStriker" style="display: none">
    <div class="row">
        @forelse ($cetak as $item)
        <div class="col-6 col-md-6 col-lg-6 text-center">
            <div >

                <span style="width: 14rem;  font-size: 12pt">{{ $item->nama }}</span>

            </div>
            <div >

                <span style="width: 14rem;  font-size: 12pt">{{ $item->jabatan }}</span>

            </div>
            <div style="display: flex;justify-content: center;">


                <p class="" style="width: 14rem; font-size: 12pt">{{ $item->bidang }}</p>
            </div>
            <div class="">

                {{ QrCode::size(100)->generate($item->kode) }}<br>
            </div>
            <br>
        </div>

        @empty
        @endforelse

    </div>

</page>
@endsection

@push('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/DataTables/css/datatables.css') }}">
@endpush
@push('script')

<!-- DataTables -->
<script src="{{ asset('plugins/DataTables/datatables.js') }}"></script>
<script>
    $(function() {
        $('.image').on('click', function() {
            let image = $(this).attr('data-image');
            $('#imagepreview').attr('src', image);
            $('#imagemodal').modal('show');
        });
    });
    function createPdf() {
        var printContents = document.getElementById('contentStriker').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

    $('#cetakStiker').click(function() {
        createPdf()
    });

    window.onafterprint = function() {
        window.location.reload(true);
    };
    // $('#example').DataTable({
        //   "paging": true,
        //   "lengthChange": true,
        //   "searching": true,
        //   "ordering": true,
        //   "info": true,
        //   "autoWidth": true,
        //   "pageLength": 20,
        // });
</script>

@endpush

@extends('template.app')
@section('title', ucwords(str_replace([':', '_', '-', '*'], ' ', $title)))
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
                                @if ($edit != 'false'|| $hapus != 'false')
                                    @canany(['edit-' . $route, 'delete-' . $route])
                                    <td class="text-center">
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
                                        {{-- button cetak --}}
                                        <a class="btn btn-primary btn-sm text-white" data-toggle="tooltip"
                                        data-placement="top"
                                        href="{{ route($route . '.cetak', $item->slug) }}"
                                            title="Cetak">
                                            <i class="fa fa-print"></i> Cetak
                                        </a>
                                    </td>
                                    @endcan
                                @endif
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10">Data
                                    {{ ucwords(str_replace([':', '_', '-', '*'], ' ', $title)) }} tidak ada</td>
                            </tr>
                            @endforelse
                        </tbody>
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
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" data-dismiss="modal">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <img src="" id="imagepreview" style="width: 100%;">
            </div>
        </div>
    </div>
</div>
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

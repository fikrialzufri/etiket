@extends('template.app')
@section('title', ucwords(str_replace([':', '_', '-', '*'], ' ', $title)))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- page statustic chart start -->
            <div class="col-lg-12 col-md-12">
                <div class="row">

                    @foreach ($paslon as $item)
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="text-center" style="font-size: 40px; font-weight: bold;">{{ $item->nama }}
                                    </h5>
                                    {{-- Jumlah Peserta Masuk --}}
                                    <p class="card-text text-center" style="font-size: 20px; font-weight: bold;">Jumlah
                                        Peserta Masuk</p>
                                    <h1 class="text-center" style="font-size: 200px; font-weight: bold;">
                                        {{ $item->hasEntrance ? $item->hasEntrance->count() : 0 }}
                                    </h1>
                                    {{-- Jumlah Peserta Belum Masuk --}}
                                    <p class="card-text">Jumlah Peserta Belum Masuk:
                                        {{ $item->hasPeserta ? $item->hasPeserta->count() - ($item->hasEntrance ? $item->hasEntrance->count() : 0) : 0 }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- log peserta --}}
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Log Peserta</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jumlah Peserta Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($entrance as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->hasPeserta->kode }}</td>
                                        <td>{{ tanggal_indonesia_waktu($value->created_at, false) }}</td>
                                    </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('chart')
@endpush
@push('style')
    <style>
        .logox {
            height: 10px;
            top: 0;
        }

        @media (max-width: 500px) {
            #perda {
                height: 52px;
            }
        }

        .modal {
            text-align: center;
        }

        @media screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                position: absolute;
                height: 100%;

            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
            top: 50%;
        }
    </style>
@endpush
@push('script')
    <script script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $('#cmbFilter').select2({
            // placeholder: '--- Pilih KPU ---',
            width: '100%'
        });
        $('#cmbFilter').change(function() {
            $('#form').submit();
        });
        setInterval(() => {

            // console.log("refresh 2");
            $("#tablePeserta").load(location.href + " #tablePeserta");
        }, 5000);
    </script>
@endpush

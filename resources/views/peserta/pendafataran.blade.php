<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pendaftaraan | Borneo Corner</title>
    <meta name="description" content="">
    <meta name="keywords" content="Borneo Corner">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        body,
        html {
            height: 100%;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100">
                <div class="col-xl-6 col-lg-6 col-md-6 m-auto">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="#"><img width="20%" src="{{ asset('KPU_Logo.png') }}" alt="Borneo Corner"></a>
                            <h6>Rapat Kordinasi <br> Pemetaan Potensi Permaslahan Hukum</h6>
                            <h6>Banjarbaru <br> 21 - 23 Agustus 2023</h6>
                        </div>
                        @if (session('message'))
                        <div class="row pt-10" id="#success-alert">
                            <div class="container-fluid alert alert-{{ session('Class') }} alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        {{-- <form method="POST" action="{{ route('simpan.pendaftaran') }}">
                            @csrf
                            <div>
                                <span style="font-size: 9pt" for="nama">Nama Peserta</span>
                            </div>
                            <div class="form-group">
                                <input id="nama" type="text" placeholder="Nama Peserta"
                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    value="{{ old('nama') }}" required autocomplete="nama"
                                    oninvalid="this.setCustomValidity('Silahkan Isi Nama Peserta, Nama Peserta Tidak Boleh Kosong')" oninput="this.setCustomValidity('')" autofocus>
                                <i class="ik ik-user"></i>
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <span style="font-size: 9pt" for="email">Email Peserta</span>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="etiket@gmail.com"
                                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" oninvalid="this.setCustomValidity('Silahkan Isi Email Peserta Dengan Menggunkan @, Email Peserta Tidak Boleh Kosong')" oninput="this.setCustomValidity('')" required
                                    autocomplete="email" >
                                <i class="ik ik-mail"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <span for="no_hp" style="font-size: 9pt">No Hp Peserta</span>
                            </div>
                            <div class="form-group">
                                <input id="no_hp" type="text" placeholder="0813 1313 1313"
                                    class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                    value="{{ old('no_hp') }}" oninvalid="this.setCustomValidity('Silahkan Isi No Hp Peserta, No Hp Peserta Tidak Boleh Kosong')" oninput="this.setCustomValidity('')" required autocomplete="no_hp" >
                                <i class="ik ik-phone"></i>
                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <span style="font-size: 9pt" for="bidang_id">Pilih KPU Provinsi / Kota / Kabupaten </span>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="bidang_id" name="bidang_id" required oninvalid="this.setCustomValidity('Pilih Kantor KPU Anda, Kantor KPU Anda harus dipilih')" oninput="this.setCustomValidity('')">
                                    <option value="">Pilih KPU</option>
                                    @foreach ($dataBidang as $bidang)

                                    <option value="{{ $bidang->id }}" id="bidang_{{ $bidang->id }}" data-max="{{ $bidang->jumlah_max }}" data-min="{{ $bidang->jumlah_min }}" {{ old('bidang_id') == $bidang->id ? "selected" : '' }}>{{ $bidang->nama}}</option>
                                    @endforeach
                                </select>
                                @error('bidang_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <span style="font-size: 9pt" for="jabatan_id">Pilih Jabatan </span>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="jabatan_id" name="jabatan_id" required oninvalid="this.setCustomValidity('Pilih Jabatan, Jabatan harus dipilih')">
                                    <option value=""> --- Pilih Jabatan ---</option>
                                    @foreach ($dataJabatanOld as $bidang)

                                    <option value="{{ $bidang->id }}" id="bidang_{{ $bidang->id }}" data-max="{{ $bidang->jumlah_max }}"
                                        data-min="{{ $bidang->jumlah_min }}" {{$bidang_id== $bidang->id ? "selected" : '' }}>{{ $bidang->nama }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                             <div class="form-radio">

                                    <div class="radio radiofill radio-inline">
                                        <label>
                                            <input type="radio" class="checkbox" name="hadir" value="Hadir" checked="checked">
                                            <i class="helper"></i>Akan Hadir
                                        </label>
                                    </div>
                                    <div class="radio radiofill radio-inline">
                                        <label>
                                            <input type="radio"  class="checkbox"  name="hadir"  value="Tidak Hadir">
                                            <i class="helper"></i>Tidak Dapat Hadir
                                        </label>
                                    </div>

                            </div>
                            <div class="catatan_kehadiran" style="display: none">

                                <div>
                                    <span style="font-size: 9pt" for="catatan">Alasan Tidak Hadir </span>
                                </div>
                                 <div class="form-group">
                                    <textarea name="catatan" id="catatan" cols="30" rows="40"  class="form-control "></textarea>

                                    <i class="ik ik-pencil"></i>
                                    @error('catatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group text-center ">
                                <span style="font-size: 9pt" for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</span>
                                <div class="col-md-12 captcha">
                                    <span>{!! captcha_img() !!}</span>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger" class="reload" id="reload" style="font-size: 9pt">
                                    &#x21bb; Reload Captcha
                                </button>
                            </div>
                            <div>
                                <span for="captcha" style="font-size: 9pt">Masukan Captcha</span>
                            </div>
                            <div class="form-group">
                                <input id="captcha" type="text" placeholder="" class="form-control @error('captcha') is-invalid @enderror"
                                    name="captcha" value=""
                                    oninvalid="this.setCustomValidity('Captcha tidak Boleh kosong')"
                                    oninput="this.setCustomValidity('')" required autocomplete="captcha">
                                <i class="ik ik-paperclip"></i>
                                @error('captcha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Captcha Salah</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="sign-btn text-center">
                                <button class="btn btn-custom">Daftar</button>
                            </div>

                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>

    <script>
        const dataJabatan = @json($dataJabatan);
        // console.log(dataJabatan);

        $("#bidang_id").select2({
            placeholder: '--- Pilih KPU ---',
        });
        $("#bidang_id").on("change", function(e) {
            let id = $(this).val();
            let max = $('#bidang_'+ id).attr('data-max');
            let min = $('#bidang_'+ id).attr('data-min');
            // jika min2 maka jabatan 3
            const filterJabatan = Object.entries(dataJabatan).filter(([key, value])=> value.jumlah_min >= min);
            let listJabatan = [];
            let listJabatanArray = '';

            listJabatan = Object.fromEntries(filterJabatan);
            listJabatanArray += `<option value=""> ---- Pilih Jabatan ---</option>`;

            $.each( listJabatan, function( key, value ) {
                listJabatanArray += `
                <option value="${value.id}" id="jabatan_${value.id}">
                    ${value.nama}
                </option>
                `;
            });
            $("#jabatan_id").html(listJabatanArray);
            $('#jabatan_id').select2();
        });
        $('#bidang_id').on("select2:select", function(e) {
            $("#bidang_id").select2('close');
        });
        $('#jabatan_id').on("select2:select", function(e) {
            $("#jabatan_id").select2('close');
        });

        $("#jabatan_id").select2();

        // $(".checkbox").change(function() {
        //     console.log($("input[type='checkbox']").val());

        // });
    $(document).on('change', 'input[class="checkbox"]', function (e) {
        let kehadrian  = $(this).val();
        if (kehadrian == 'Tidak Hadir') {
            $(".catatan_kehadiran").css("display","");
        }else{
            $('#catatan').val('')
            $(".catatan_kehadiran").css("display","none");
        }
    });

    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script>
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>

</body>

</html>

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
                            <a href="#"><img width="50%" src="{{ asset('KPU_Logo.png') }}" alt="Borneo Corner"></a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="nama">Nama Peserta</label>
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
                                <label for="email">Email Peserta</label>
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
                                <label for="no_hp">No Hp Peserta</label>
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
                                <label for="bidang_id">Pilih KPU Provinsi / Kabupaten</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="bidang_id" required oninvalid="this.setCustomValidity('Pilih Kantor KPU Anda, Kantor KPU Anda harus dipilih')" oninput="this.setCustomValidity('')">
                                    <option value="">Pilih KPU</option>
                                    @foreach ($dataBidang as $bidang)

                                    <option value="{{ $bidang->id }}" id="bidang_{{ $bidang->id }}" data-max="{{ $bidang->jumlah_max }}" data-min="{{ $bidang->jumlah_min }}">{{ $bidang->nama}}</option>
                                    @endforeach
                                </select>
                                @error('bidang_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <label for="jabatan_id">Pilih Jabatan</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="jabatan_id" required oninvalid="this.setCustomValidity('Pilih Jabatan, Jabatan harus dipilih')" oninput="this.setCustomValidity('')">
                                    {{-- <option value="">Pilih Jabtan</option> --}}
                                </select>
                                @error('jabatan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="sign-btn text-center">
                                <button class="btn btn-custom">Daftar</button>
                            </div>

                        </form>
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
        console.log(dataJabatan);
        $("#bidang_id").select2({
            placeholder: '--- Pilih KPU ---',
        });
        $("#bidang_id").on("change", function(e) {
            let id = $(this).val();
            let max = $('#bidang_'+ id).attr('data-max');
            let min = $('#bidang_'+ id).attr('data-min');
            const filterJabatan = Object.entries(dataJabatan).filter(([key, value])=> value.jumlah_min >= min);
            let listJabatan = [];
            let listJabatanArray = '';

            listJabatan = Object.fromEntries(filterJabatan);
            listJabatanArray += `<option value="">Pilih Jenis Pembayaran</option>`;

            $.each( listJabatan, function( key, value ) {
                listJabatanArray += `
                <option value="${value.id}" id="jabatan_${value.id}">
                    ${value.nama}
                </option>
                `;
            });
            $("#jabatan_id").html(listJabatanArray);
            $('#jabatan_id').select2({});
        });
        $('#bidang_id').on("select2:select", function(e) {
            $("#bidang_id").select2('close');
        });
        $('#jabatan_id').on("select2:select", function(e) {
            $("#jabatan_id").select2('close');
        });
        $("#jabatan_id").select2();
        $("#jabatan_id").on("change", function(e) {
        });
    </script>
    {{-- Firebase --}}
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-app.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {

        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
    </script>
</body>

</html>

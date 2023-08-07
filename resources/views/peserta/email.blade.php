<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>{{$mailMessage->title}}</title>
</head>

<body>
    <p>Terimakasih, Anda sudah terdaftar menjadi peserta Rakor pemetaan potensi permasalahan hukum di Kalimantan Selatan
    Gelombang ke I <br>
    Banjarmasin 21-23 Agustus 2023</p>
    {{-- <p>{{ QrCode::size(100)->generate($mailMessage->kode) }}<br></p> --}}

    <br />
    <br />
    {{ $mailMessage->sender }}
    <br />
    {{ $mailMessage->senderCompany}}
</body>

</html>

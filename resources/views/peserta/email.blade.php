<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>E-Tiket Rakor</title>
</head>

<body>

    <p>Terimakasih, Anda sudah terdaftar menjadi peserta Rakor pemetaan potensi permasalahan hukum di Kalimantan Selatan
    Gelombang ke I <br>
    Banjarmasin 21-23 Agustus 2023</p>
    <br>
    <img width="640px" src="{{ asset('img/headeremailtiket.png') }}" alt="Borneo Corner" />
    <br>

    <p>{{ $mailInfo->nama }}</p>
    <p>{{ $mailInfo->jabatan }}</p>
    <p>{{ $mailInfo->bidang }}</p>
    <br>
    @php
    $qrCodeAsPng = QrCode::format('png')->size(200)->generate($mailInfo->kode);
    @endphp
    <img src="{{ $message->embedData($qrCodeAsPng, $mailInfo->kode .'.png') }}" />


</body>

</html>

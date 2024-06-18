<?php
use Carbon\Carbon;
$currentTime = Carbon::now();
$indoDateFormat = 'd F Y';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Times New Roman';
        }
    </style>
</head>

<body>
    <div class="m-16">
        <div id='kop-surat' class="pb-4">
            <p style="text-align:center;">PEMERINTAH KABUPATEN JOMBANG</p>
            <p style="text-align:center;">KECAMATAN TEMBELANG</p>
            <p style="text-align:center;">DESA JATIWATES</p>
        </div>

        {{ $slot }}
        <div class="mt-4 text-justify">
            <div class="pt-4">
                <p>Adapun {{ $title }} ini dibuat untuk dipergunakan sebagaimana mestinya dan bagi instansi
                    yang
                    berkepentingan menjadi bahan periksa adanya.</p>
                <table>
                    <tr>
                        <td>Dikeluarkan di&nbsp;</td>
                        <td>:</td>
                        <td>Desa Jatiwates, Kecamatan Tembelang</td>
                    </tr>
                    <tr>
                        <td>Pada Tanggal&nbsp;</td>
                        <td>:</td>
                        <td><span id="tanggal">{{ $currentTime->format($indoDateFormat) }}</span></td>
                    </tr>
                </table>
                <p style="text-align:right;">Kepala Desa Jatiwates</p>
                <div id='ttd' style="height: 7rem; display: flex; justify-content:flex-end;">
                    <img style="height: 7rem; float: right;" src="{{ asset('images/ttd.png') }}" alt="">
                </div>
                <div style="text-align:right;">A. Yudin Karimin</div>
            </div>
        </div>
    </div>
</body>

</html>

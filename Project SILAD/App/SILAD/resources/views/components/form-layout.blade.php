<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
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
        <div class="judul-surat">
            <p style="text-align:center;">SURAT KETERANGAN USAHA</p>
            <p style="text-align:center;">Nomor : <span id="nomor-surat"></span></p>
        </div>
        <div class="pt-4">
            <p>Yang bertandatangan dibawah ini selaku Kepala Desa Jatiwates, Kecamatan Tembelang, Kabupaten Jatiwates,
                dengan ini menerangkan bahwa:</p>
        </div>
        <div class="mt-4 text-justify">
            {{ $slot }}
            <div class="pt-4">
                <p>Adapun Surat Keterangan Usaha ini dibuat untuk dipergunakan sebagaimana mestinya dan bagi instansi
                    yang
                    berkepentingan menjadi bahan periksa adanya.</p>
                <p>Dikeluarkan di: Desa Jatiwates, Kecamatan Tembelang</p>
                <p>Pada Tanggal:&nbsp; <span id="tanggal"></span></p>
                <p style="text-align:right;">Kepala Desa Jatiwates</p>
                <div style="text-align:right;">A. Yudin Karimin</div>
            </div>
        </div>
    </div>
</body>

</html>

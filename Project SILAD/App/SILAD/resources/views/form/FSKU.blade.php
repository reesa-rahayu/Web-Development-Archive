<x-form-layout>
    <x-slot:title>Surat Keterangan Usaha</x-slot:title>
    <div class="judul-surat">
        <p style="text-align:center;">SURAT KETERANGAN USAHA</p>
        <p style="text-align:center;">Nomor : {{ $no_surat }}<span id="nomor-surat"></span></p>
    </div>
    <div class="pt-4">
        <p>Yang bertandatangan dibawah ini selaku Kepala Desa Jatiwates, Kecamatan Tembelang, Kabupaten Jatiwates,
            dengan ini menerangkan bahwa:</p>
    </div>
    <div>
        <table>
            <tr>
                <td class="pr-6">Nama</td>
                <td>:</td>
                <td>{{ json_decode($ajuan->deskripsi)->nama_lengkap }}<span id="nama-lengkap"></span></td>
            </tr>
            <tr>
                <td class="pr-6">Tempat/Tanggal Lahir </td>
                <td>:</td>
                <td><span id="ttl">{{ json_decode($ajuan->deskripsi)->tempat_lahir }}/
                        {{ json_decode($ajuan->deskripsi)->tanggal_lahir }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">NIK </td>
                <td>:</td>
                <td><span id="nik">{{ json_decode($ajuan->deskripsi)->no_ktp }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Agama</td>
                <td>:</td>
                <td><span id="agama">{{ json_decode($ajuan->deskripsi)->agama }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Pekerjaan</td>
                <td>:</td>
                <td><span id="pekerjaan">{{ json_decode($ajuan->deskripsi)->pekerjaan }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Alamat</td>
                <td>:</td>
                <td><span id="alamat">{{ json_decode($ajuan->deskripsi)->alamat_lengkap }}</span></td>
            </tr>
        </table>
    </div>
    <div class="pt-4">
        <p>Dengan ini menerangkan dengan sebenarnya bahwa yang bersangkutan betul memiliki usaha
            <span id="usaha"><strong>{{ json_decode($ajuan->deskripsi)->nama_usaha }}</strong></span>.
        </p>
    </div>
</x-form-layout>

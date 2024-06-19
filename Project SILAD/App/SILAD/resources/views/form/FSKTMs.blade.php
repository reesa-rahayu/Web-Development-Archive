<x-form-layout>
    <x-slot:title>Surat Keterangan Tidak Mampu</x-slot:title>
    <div class="judul-surat">
        <p style="text-align:center;">SURAT KETERANGAN TIDAK MAMPU</p>
        <p style="text-align:center;">Nomor : {{ $no_surat }}<span id="nomor-surat"></span></p>
    </div>
    <div class="pt-4">
        <p>Yang bertandatangan dibawah ini selaku Kepala Desa Jatiwates, Kecamatan Tembelang, Kabupaten Jatiwates,
            dengan ini menerangkan bahwa:</p>
    </div>
    <div>
        <table>
            <tr>
                <td class="pr-6">Nama Lengkap</td>
                <td>:</td>
                <td>{{ json_decode($ajuan->deskripsi)->nama_ortu }}<span id="nama_ortu"></span></td>
            </tr>
            <tr>
                <td class="pr-6">NIK </td>
                <td>:</td>
                <td><span id="nik_ortu">{{ json_decode($ajuan->deskripsi)->nik_ortu }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Tempat/Tanggal Lahir </td>
                <td>:</td>
                <td><span id="ttl_ortu">{{ json_decode($ajuan->deskripsi)->tempat_lahir_ortu }}/
                        {{ json_decode($ajuan->deskripsi)->tanggal_lahir_ortu }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Jenis Kelamin </td>
                <td>:</td>
                <td><span id="jenis_kelamin_ortu">{{ json_decode($ajuan->deskripsi)->jenis_kelamin_ortu }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Pekerjaan</td>
                <td>:</td>
                <td><span id="pekerjaan">{{ json_decode($ajuan->deskripsi)->pekerjaan }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Jumlah Saudara</td>
                <td>:</td>
                <td><span id="">{{ json_decode($ajuan->deskripsi)->jumlah_saudara }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Agama</td>
                <td>:</td>
                <td><span id="agama_ortu">{{ json_decode($ajuan->deskripsi)->agama_ortu }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Alamat Lengkap</td>
                <td>:</td>
                <td><span id="alamat_lengkap">{{ json_decode($ajuan->deskripsi)->alamat_lengkap }}</span></td>
            </tr>
        </table>
        <div class="pt-4">
            <p>Orang tersebut adalah orang tua dari anak yang bernama :</p>
        </div>
        <table>
            <tr>
                <td class="pr-6">Nama Lengkap</td>
                <td>:</td>
                <td>{{ json_decode($ajuan->deskripsi)->nama_anak }}<span id="nama_anak"></span></td>
            </tr>
            <tr>
                <td class="pr-6">NIK </td>
                <td>:</td>
                <td><span id="nik_anak">{{ json_decode($ajuan->deskripsi)->nik_anak }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Tempat/Tanggal Lahir </td>
                <td>:</td>
                <td><span id="ttl_anak">{{ json_decode($ajuan->deskripsi)->tempat_lahir_anak }}/
                        {{ json_decode($ajuan->deskripsi)->tanggal_lahir_anak }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Jenis Kelamin </td>
                <td>:</td>
                <td><span id="jenis_kelamin_anak">{{ json_decode($ajuan->deskripsi)->jenis_kelamin_anak }}</span></td>
            </tr>
            <tr>
                <td class="pr-6">Agama</td>
                <td>:</td>
                <td><span id="agama_anak">{{ json_decode($ajuan->deskripsi)->agama_anak }}</span></td>
            </tr>
        </table>
    </div>
    <div class="pt-4">
        <p>Adalah benar orang tersebut di atas dan berdasarkan keterangan dari RT dan RW
            bahwa ekonominya tidak mampu dan patut menerima bantuan dari Pemerintah. Surat Keterangan ini dipergunakan
            untuk persyaratan pengajuan mendapat Bantuan Siswa Miskin (BSM).
        </p>

    </div>
</x-form-layout>

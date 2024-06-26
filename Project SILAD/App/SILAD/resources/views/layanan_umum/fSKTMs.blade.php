<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Tidak Mampu (Sekolah)</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">

    <style>
        .gradient {
            background: linear-gradient(90deg, #DBD6FF 0%, #5887FF 100%);
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <form method="POST" action="{{ route('submit-fsktms') }}" class="max-w-sm mx-auto m-4">
        @csrf
        <div class="mx-auto max-w-2xl text-center">
            <p class="mt-2 text-lg leading-10 text-gray-800">Data Orang Tua/Wali</p>
        </div>
        <div class="mb-5">
            <label for="nama_ortu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Orang
                Tua/Wali</label>
            <input type="text" id="nama_ortu" name="nama_ortu"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="no_ktp_ortu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK</label>
            <input type="text" id="no_ktp_ortu" name="no_ktp_ortu"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="tempat_lahir_ortu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tempat
                Lahir</label>
            <input type="text" id="tempat_lahir_ortu" name="tempat_lahir_ortu"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="tgl_lahir_ortu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal
                Lahir</label>
            <input type="date" id="tgl_lahir_ortu" name="tgl_lahir_ortu"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="gender_ortu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Kelamin</label>
            <select id="gender_ortu" name="gender_ortu"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="job" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pekerjaan</label>
            <input type="text" id="job" name="job"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="jumlah_saudara" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Jumlah
                saudara</label>
            <input type="number" id="jumlah_saudara" name="jumlah_saudara"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="religion_ortu"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
            <select id="religion_ortu" name="religion_ortu"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <option>Islam</option>
                <option>Katolik</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="alamat_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat
                Lengkap</label>
            <input type="text" id="alamat_lengkap" name="alamat_lengkap"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>

        <div class="mx-auto max-w-2xl text-center">
            <p class="mt-2 text-lg leading-8 text-gray-600">Data Anak</p>
        </div>
        <div class="mb-5">
            <label for="nama_anak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                Anak</label>
            <input type="text" id="nama_anak" name="nama_anak"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="no_ktp_anak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK</label>
            <input type="text" id="no_ktp_anak" name="no_ktp_anak"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="tempat_lahir_anak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tempat
                Lahir</label>
            <input type="text" id="tempat_lahir_anak" name="tempat_lahir_anak"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="tgl_lahir_anak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal
                Lahir</label>
            <input type="date" id="tgl_lahir_anak" name="tgl_lahir_anak"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="gender_anak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Kelamin</label>
            <select id="gender_anak" name="gender_anak"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="religion_anak"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
            <select id="religion_anak" name="religion_anak"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <option>Islam</option>
                <option>Katolik</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
            </select>
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input id="terms" type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                    required />
            </div>
            <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informasi yang
                saya berikan benar adanya dan tidak dibuat-buat</a></label>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
    </form>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">
    <!-- Include your CSS files here -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="p-6 m-4 bg-white flex justify-center shadow-lg rounded">
        <form method="POST" action="{{ route('submit-fsku') }}" class="max-w-sm mx-auto m-4">
            @csrf
            <div class="mb-5">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                    Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="" value="{{ auth()->user()->name }}" required />
            </div>
            <div class="mb-5">
                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tempat
                    Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    value="{{ auth()->user()->tempat_lahir }}" required />
            </div>
            <div class="mb-5">
                <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal
                    Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    value="{{ auth()->user()->tanggal_lahir }}" required />
            </div>
            <div class="mb-5">
                <label for="nama_usaha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                    Tempat Usaha</label>
                <input type="text" id="nama_usaha" name="nama_usaha"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="" required />
            </div>
            <div class="mb-5">
                <label for="alamat_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat
                    Lengkap</label>
                <input type="text" id="alamat_lengkap" name="alamat_lengkap"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="" required />
            </div>
            <div class="mb-5">
                <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                <select id="religion" name="agama" value="{{ auth()->user()->agama }}"
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
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                    Kelamin</label>
                <select id="gender" name="jenis_kelamin" value="{{ auth()->user()->kelamin }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="pekerjaan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="" required />
            </div>
            <div class="mb-5">
                <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK (Nomor
                    KTP)</label>
                <input type="text" id="no_ktp" name="no_ktp" value="{{ auth()->user()->NIK }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="" required />
            </div>
            <div class="mb-5">
                <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor
                    HP/WhatsApp</label>
                <input type="text" id="no_wa" name="no_wa"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="" required />
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" name="terms" value="1"
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                        required />
                </div>
                <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informasi yang
                    saya
                    berikan benar adanya dan tidak dibuat-buat</label>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajukan</button>
        </form>
    </div>

</body>

</html>

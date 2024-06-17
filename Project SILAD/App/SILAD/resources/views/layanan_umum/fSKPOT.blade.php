<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Penghasilan Orang Tua</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">

    <style>
      .gradient {
        background: linear-gradient(90deg, #DBD6FF 0%, #5887FF 100%);
      }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
<div class="mx-auto max-w-2xl text-center">
    <p class="mt-2 text-lg leading-10 text-gray-800">Data Orang Tua/Wali</p>
  </div>
  <div class="mb-5">
    <label for="nama_ortu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Orang Tua/Wali</label>
    <input type="text" id="nama_ortu" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK</label>
    <input type="text" id="no_ktp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tempat Lahir</label>
    <input type="text" id="tempat_lahir" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Lahir</label>
    <input type="date" id="tgl" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
  <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
  <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option>Laki-laki</option>
    <option>Perempuan</option>
  </select>
</div>
  <div class="mb-5">
  <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
  <select id="religion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <option>Islam</option>
    <option>Katolik</option>
    <option>Kristen</option>
    <option>Hindu</option>
    <option>Buddha</option>
    <option>Konghucu</option>
  </select>
</div>
  <div class="mb-5">
    <label for="alamat_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat Lengkap</label>
    <input type="text" id="alamat_lengkap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="penghasilan_perbulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Penghasilan Per bulan</label>
    <input type="text" id="penghasilan_perbulan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>

  <div class="mx-auto max-w-2xl text-center">
    <p class="mt-2 text-lg leading-8 text-gray-600">Data Anak</p>
  </div>
  <div class="mb-5">
    <label for="nama_anak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Anak</label>
    <input type="text" id="nama_anak" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIM/NPM</label>
    <input type="text" id="no_ktp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tempat Lahir</label>
    <input type="text" id="tempat_lahir" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Lahir</label>
    <input type="date" id="tgl" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
  <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
  <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option>Laki-laki</option>
    <option>Perempuan</option>
  </select>
</div>
<div class="mb-5">
  <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
  <select id="religion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <option>Islam</option>
    <option>Katolik</option>
    <option>Kristen</option>
    <option>Hindu</option>
    <option>Buddha</option>
    <option>Konghucu</option>
  </select>
</div>
<div class="mb-5">
    <label for="alamat_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat Lengkap</label>
    <input type="text" id="alamat_lengkap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
      <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
    </div>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Benar yang namanya tersebut di atas adalah warga Desa Jatiwates, menurut pengamatan kami benar yang bersangkutan mempunyai penghasilan orang tua rata-rata per bulan sesuai dengan data yang tertera di atas. </a></label>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
</body>
</html>
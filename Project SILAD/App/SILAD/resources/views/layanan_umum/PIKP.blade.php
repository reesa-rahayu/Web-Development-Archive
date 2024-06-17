<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Permohonan Izin Keramaian Pesta</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">

    <style>
      .gradient {
        background: linear-gradient(90deg, #DBD6FF 0%, #5887FF 100%);
      }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
<div class="mb-5">
    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Lengkap</label>
    <input type="text" id="nama_lengkap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Umur</label>
    <input type="number" id="umur" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pekerjaan</label>
    <input type="text" id="pekerjaan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="alamat_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat Lengkap</label>
    <input type="text" id="alamat_lengkap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Hari</label>
    <input type="day" id="hari" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="tempat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tempat</label>
    <input type="text" id="tempat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <div class="mb-5">
    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Pelaksanaan</label>
    <input type="date" id="tgl" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
  </div>
  <label for="acara" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Acara</label>
  <select id="acara" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option>Haul</option>
    <option>Pesta Panen</option>
    <option>Grebeg</option>
    <option>Festival Budaya Desa</option>
    <option>Ritual Desa</option>
    <option>Pertandingan Olahraga antar desa</option>
    <option>Pentas Seni</option>
    </select>
</div>
<div class="flex items-start mb-5">
    <div class="flex items-center h-5">
      <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
    </div>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pada waktu dilaksanakan rame-rame disertai dengan ketentraman dan ketertibandalamlingkungan baik tetangga, mengahargai waktu ibadah untuk menciptakan kerukunanumat beragama maupun kebersihan lingkungan setelah rame-rame.</a></label>
  </div>
  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
      <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
    </div>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pada waktu dilaksanakan rame-rame tidak dibenarkan/dilarang melakukan hal-hal /yang bertentangan dengan ketentuan /ysang berlaku dan adat istiadat bangsa </a></label>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Surat Keterangan Kehilangan KK</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3b5d50; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #f9bf29; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #f9bf29; }
        .nav-item:hover { background: #f9bf29; }
        .account-link:hover { background: #3d68ff; }
        </style>
          @vite('resources/css/app.css')
    </head>
<body class="bg-gray-100 font-family-karla flex overflow-y-scroll">
    <div class="bg-white border border-4 rounded-lg shadow relative m-5 w-3/4">
    <h2 class="text-2xl text-black py-4 px-4 pb-2 center">Formulir Surat Keterangan Kehilangan KK</h2>
      <div class="p-6 space-y-6">
        <form action="https://formbold.com/s/FORM_ID" method="POST">
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
              Nama Kepala Keluarga
            </label>
            <input type="text" name="fName" id="fName" placeholder="Sesuai KK"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
              NIK
            </label>
            <input type="text" name="lnik" id="lnik" placeholder="NIK"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <div class="-mx-3 flex flex-wrap">
      <div class="w-full px-3 sm:w-1/2">
      <div class="mb-5">
        <label for="guest"
          class="mb-3 block text-base font-medium text-[#07074D]">
          Tempat Lahir
        </label>
        <input type="text" name="tempatlahir" id="tempatlahir" 
        placeholder="Tempat Lahir" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
        </div>
        </div>
    <div class="w-full px-3 sm:w-1/2">
      <div class="mb-5">
        <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Tanggal lahir
        </label>
        <input type="date" name="tanggallahir" id="tanggallahir" 
        placeholder="" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
        </div>
        </div>
        <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
                <label class="mb-3 block text-base font-medium text-[#07074D]">
                Jenis Kelamin
                </label>
                <div class="flex space-x-2">
                <div class="flex">
                    <input type="radio" name="lk" id="radioButton1" class="h-5 w-5"/>
                    <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                    Laki-laki
                    </label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" name="pr" id="radioButton2" class="h-5 w-5"/>
                    <label for="radioButton2"cclass="pl-3 text-base font-medium text-[#07074D]">
                    Perempuan
                    </label>
                </div>   
            </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
            <label for="pekerjaan"  class="mb-2 block text-base font-medium text-[#07074D]">Pekerjaan</label>
            <select id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

              <option>Wiraswasta</option>
              <option>Wirausaha</option>
              <option>PNS</option>
              <option>Karyawan</option>
              <option>Lainnya</option>
            </select>
          </div>
          </div>
    <div class="-mx-3 flex px-3 flex-wrap w-full">
        <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
            <label for="fwork" class="mb-3 block text-base font-medium text-[#07074D]">
              Nomor Kartu Keluarga
            </label>
            <input type="text" name="fnokk" id="fwork" placeholder="Nomor Kartu Keluarga yang Hilang"
              class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        
        <div class="w-full px-3 sm:w-1/2 -mx-3" >
        <div class="mb-5 px-6">
            <label for="fwork" class="mb-3 block text-base font-medium text-[#07074D]">
              Keterangan
            </label>
            <input type="text" name="fnokk" id="fwork" placeholder="Tanggal/Tempat/Penyebab Kehilangan"
              class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        </div>
        <div class="-mx-3 flex flex-wrap px-3">
            <div class="w-full px-3 sm:w-full">
            <div class="mb-5 pt-0">
                <label class="mb-3 block text-base font-medium text-[#07074D]">
                    Alamat Lengkap
                </label>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="desa" id="desa" placeholder="Desa"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="kec" id="kec" placeholder="Kecamatan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="dusun" id="dusun" placeholder="Dusun"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="rtrw" id="rtrw" placeholder="RT/RW"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
              </div>
            </div>
      <div>
        <button
          class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
        >
          Simpan
        </button>
      </div>
    </form>
        </div>
    </div>
    </body>
    </head>
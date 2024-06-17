<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengajuan Surat</title>

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
    <h2 class="text-2xl text-black py-4 px-4 pb-2 center">Formulir Surat Pengantar Pindah Antar Desa</h2>
      <div class="p-6 space-y-6">
        <form action="https://formbold.com/s/FORM_ID" method="POST">
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label for="fNik" class="mb-3 block text-base font-medium text-[#07074D]">
              NIK
            </label>
            <input type="text" name="fNik" id="fNik" placeholder="NIK"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
              Nama Lengkap
            </label>
            <input type="text" name="lName" id="lName" placeholder="Nama Lengkap"
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
          Nomor Kartu Keluarga
        </label>
        <input type="text" name="nokk" id="nokk" 
        placeholder="Nomor KK" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
        </div>
        </div>
    <div class="w-full px-3 sm:w-1/2">
      <div class="mb-5">
        <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Kepala Keluarga
        </label>
        <input type="text" name="namakepkel" id="namakepkel" 
        placeholder="Sesuai KK" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
        </div>
        </div>
        <div class="-mx-3 flex flex-wrap px-3">
            <div class="w-full sm:w-full">
            <div class="mb-3 pt-0">
                <label class="mb-3 block text-base font-medium text-[#07074D]">
                    Alamat Sekarang
                </label>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="desa" id="desa" placeholder="Desa"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="dusun" id="dusun" placeholder="Dusun"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="rtrw" id="rtrw" placeholder="RT/RW"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
            </div>
            <div class="-mx-3 flex flex-wrap px-3">
            <div class="w-full sm:w-full">
            <div class="mb-3 pt-0">
                <label class="mb-3 block text-base font-medium text-[#07074D]">
                    Alamat Tujuan Pindah
                </label>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="desa" id="desa" placeholder="Desa"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="dusun" id="dusun" placeholder="Dusun"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="rtrw" id="rtrw" placeholder="RT/RW"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
          <div class="w-full px-3 -mx-3" >
        <div class="mb-5 px-3">
            <label for="fjkpindah" class="mb-3 block text-base font-medium text-[#07074D]">
              Jumlah Keluarga Yang Pindah
            </label>
            <input type="number" name="jkpindah" id="jkpindah" placeholder="Contoh : 4"
              class="w-1/2 appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
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
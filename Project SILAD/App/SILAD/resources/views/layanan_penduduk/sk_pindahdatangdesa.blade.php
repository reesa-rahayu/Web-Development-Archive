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
    <h2 class="text-3xl text-black py-4 px-4 pb-2 center">Formulir Surat Keterangan Pindah Datang Antar Desa</h2>
      <div class="p-6 space-y-6">
        <form action="https://formbold.com/s/FORM_ID" method="POST">
            <div class="-mx-3 flex flex-wrap px-3">
            <div class="w-full sm:w-full">
            <div class="mb-3 pt-0">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="prov" id="prov" placeholder="Provinsi"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="kabkot" id="kabkot" placeholder="Kabupaten/Kota"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="kec" id="kec" placeholder="Kecamatan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
            </div>
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
                    </div>
                </div>
            </div>
        <h3 class="text-2xl text-black pb-2">Data Daerah Asal</h3>
        <div class="w-full sm:w-full">
        <div class="-mx-3 flex flex-wrap pt-3">
        <div class="w-full px-3 sm:w-1/3">
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
        <div class="w-full px-3 sm:w-1/3">
        <div class="mb-5">
            <label for="lkepkel" class="mb-3 block text-base font-medium text-[#07074D]">
              Nama Kepala Keluarga
            </label>
            <input type="text" name="lkepkel" id="lkepkel" placeholder="Sesuai KK"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/3">
        <div class="mb-5">
            <label for="nikkepkel" class="mb-3 block text-base font-medium text-[#07074D]">
              NIK Kepala Keluarga
            </label>
            <input type="text" name="nikkepkel" id="nikkepkel" placeholder="Sesuai KK"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <div class="w-full sm:w-full">
        <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
            <label for="guest"
            class="mb-3 block text-base font-medium text-[#07074D]">
            Alamat
            </label>
            <input type="text" name="alamat1" id="alamat1" 
            placeholder="Alamat Asal" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            </div>
        </div>
        </div>
            <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-full">
            <div class="mb-5 pt-0">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="rtrwasal" id="rtrwasal" placeholder="RT/RW Asal"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="dusunasal" id="dusunasal" placeholder="Dusun Asal"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="desaasal" id="desa" placeholder="Desa Asal"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
            <div class="mb-5 pt-0">
                <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="kecasal" id="kecasal" placeholder="Kecamatan Asal"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="kabkotasal" id="kabkotasal" placeholder="Kab/Kota Asal"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="provasal" id="provasal" placeholder="Provinsi Asal"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
        <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
            <label for="guest"
            class="mb-3 block text-base font-medium text-[#07074D]">
            NIK Pemohon
            </label>
            <input type="text" name="nikpemohon" id="nikpemohon" 
            placeholder="Sesuai KTP" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
            <label for="lnamapemohon" class="mb-3 block text-base font-medium text-[#07074D]">
              Nama Lengkap
            </label>
            <input type="text" name="namapemohon" id="namapemohon" placeholder="Sesuai KTP"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        </div>
        </div>
        <h3 class="text-2xl text-black pb-2">Data Daerah Tujuan</h3>
        <div class="w-full sm:w-full">
        <div class="w-full sm:w-1/2">
        <div class="mb-5">
        <div class="mb-3 pt-3">
            <label class="mb-3 block text-base font-medium text-[#07074D]">
                Status Nomor KK Bagi Yang Pindah 
                </label>
                <div class="flex space-x-2">
                <div class="flex">
                    <input type="radio" name="numpang" id="numpang" class="h-5 w-5"/>
                    <label for="lnumpang" class="pl-3 text-base font-medium text-[#07074D]">
                    Numpang
                    </label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" name="baru" id="baru" class="h-5 w-5"/>
                    <label for="lbaru"cclass="pl-3 text-base font-medium text-[#07074D]">
                    Membuat KK Baru
                    </label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" name="tetap" id="tetap" class="h-5 w-5"/>
                    <label for="ltetap"cclass="pl-3 text-base font-medium text-[#07074D]">
                    Nomor KK Tetap
                    </label>
                </div>
        </div>  
        </div>
        </div>
        </div> 
        <div class="-mx-3 flex flex-wrap pt-3">
        <div class="w-full px-3 sm:w-1/3">
        <div class="mb-5">
            <label for="guest"
            class="mb-3 block text-base font-medium text-[#07074D]">
            Nomor Kartu Keluarga
            </label>
            <input type="text" name="nokk2" id="nokk2" 
            placeholder="Nomor KK" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            </div>
        </div>
        <div class="w-full px-3 sm:w-1/3">
        <div class="mb-5">
            <label for="lkepkel2" class="mb-3 block text-base font-medium text-[#07074D]">
              Nama Kepala Keluarga
            </label>
            <input type="text" name="lkepkel" id="lkepkel2" placeholder="Sesuai KK"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/3">
        <div class="mb-5">
            <label for="lnikkepkel2" class="mb-3 block text-base font-medium text-[#07074D]">
              NIK Kepala Keluarga
            </label>
            <input type="text" name="nikkepkel2" id="nikkepkel2" placeholder="Sesuai KK"
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
            Tanggal Kedatangan
            </label>
            <input type="date" name="tanggaldatang" id="tanggaldatang" 
            placeholder="dd-mm-yyyy" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            </div>
        </div>
        </div>

        <div class="w-full sm:w-full">
        <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
            <label for="guest"
            class="mb-3 block text-base font-medium text-[#07074D]">
            Alamat
            </label>
            <input type="text" name="alamat2" id="alamat2" 
            placeholder="Alamat Tujuan" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            </div>
        </div>
        </div>
            <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-full">
            <div class="mb-5 pt-0">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="rtrwtujuan" id="rtrwtujuan" placeholder="RT/RW Tujuan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="dusuntujuan" id="dusuntujuan" placeholder="Dusun Tujuan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="desatujuan" id="desatujuan" placeholder="Desa Tujuan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
        <div class="w-full px-0 sm:w-full">
            <div class="mb-5 pt-0">
                <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="kectujuan" id="kectujuan" placeholder="Kecamatan Tujuan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="kabkottujuan" id="kabkottujuan" placeholder="Kab/Kota Tujuan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <input type="text" name="provtujuan" id="provtujuan" placeholder="Provinsi Tujuan"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
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
              class="w-1/3 appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        </div>
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
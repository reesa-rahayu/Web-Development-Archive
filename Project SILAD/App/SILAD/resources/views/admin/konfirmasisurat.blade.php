<x-admin-layout>

    <h1 class="text-3xl text-black pb-6 relative">Konfirmasi Ajuan Surat</h1>
    <div class="bg-white border-4 rounded-lg shadow relative m-5">
        <div class="p-6 space-y-6">
            <form action="#">
                <h2 class="text-2xl text-black pb-6 relative">Informasi Ajuan</h1>
                    <div class="grid grid-cols-10 gap-3">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Id
                                Ajuan</label>
                            <input type="text" name="product-name" id="id-surat"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                readonly>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="product-name"
                                class="text-sm font-medium text-gray-900 block mb-2">Kategori</label>
                            <input type="text" name="product-name" id="kategori-surat"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                readonly>
                        </div>
                    </div>
            </form>
        </div>

        <div class="p-6 space-y-6">
            <form action="#">
                <h2 class="text-2xl text-black pb-6 relative">Informasi Penduduk</h1>
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">NIK
                                Penduduk</label>
                            <input type="text" name="product-name" id="id-surat"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                readonly>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Jenis
                                Kelamin</label>
                            <input type="text" name="product-name" id="kategori-surat"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                readonly>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Tanggal
                                Lahir</label>
                            <input type="text" name="category" id="category"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                readonly>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Agama</label>
                            <input type="text" name="category" id="category"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                readonly>
                        </div>
                    </div>
            </form>
        </div>

        <div class="p-6 border-t border-gray-200 rounded-b">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="text-sm font-medium text-gray-900 block mb-2">No. Surat</label>
                    <input type="text" name="category" id="category"
                        class="shadow-sm bg-green-50 border border-green-300 text-green-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Tanda
                        Tangan</label>
                    <input type="text" name="category" id="category"
                        class="shadow-sm bg-green-50 border border-green-300 text-green-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5"
                        required="">
                </div>
            </div>
            <a href="{{ url('/suratselesai') }}" class="inline-block p-6">
                <button
                    class="text-white bg-green-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Konfirmasi</button>
            </a>
            <a href="menolak" class="inline-block p-6">
                <button
                    class="text-white bg-red-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Tolak</button>
            </a>
        </div>
    </div>
</x-admin-layout>

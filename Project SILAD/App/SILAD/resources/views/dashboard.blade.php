<x-profil-layout>
    <div class="px-6 py-6 lg:col-span-5">
        <h2 class="text-2xl text-black pb-6 relative">Informasi Penduduk</h2>
        <div class="grid grid-cols-1 gap-3">
            <form id="profil-form" method="POST" action="{{ route('update-data') }}">
                @csrf
                <div class="col-span-6 sm:col-span-2">
                    <label for="nik_penduduk" class="text-sm font-medium text-gray-900 block mb-2">NIK Penduduk</label>
                    <input type="text" name="nik_penduduk" id="nik_penduduk" value="{{ auth()->user()->NIK }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-1/2 p-2.5">
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="nama_lengkap" class="text-sm font-medium text-gray-900 block mb-2">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ auth()->user()->name }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-1/2 p-2.5">
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="jenis_kelamin" class="text-sm font-medium text-gray-900 block mb-2">Jenis
                        Kelamin</label>
                    <select id="gender" name="jenis_kelamin" value="{{ auth()->user()->kelamin }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-1/2 p-2.5">
                        <option value="0">Laki-laki</option>
                        <option value="1">Perempuan</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="tempat_lahir" class="text-sm font-medium text-gray-900 block mb-2">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir"
                        value="{{ auth()->user()->tempat_lahir }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-1/2 p-2.5">
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="tanggal_lahir" class="text-sm font-medium text-gray-900 block mb-2">Tanggal
                        Lahir</label>
                    <input type="date" name="tanggal-lahir" id="tanggal_lahir"
                        value="{{ auth()->user()->tanggal_lahir }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-1/2 p-2.5">
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="agama" class="text-sm font-medium text-gray-900 block mb-2">Agama</label>
                    <select name="agama" id="agama" value="{{ auth()->user()->agama }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-1/2 p-2.5">
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <button type="submit"
                        class="w-1/2 bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 mt-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</x-profil-layout>

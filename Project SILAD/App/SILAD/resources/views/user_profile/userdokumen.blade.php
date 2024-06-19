<x-profil-layout>
    <div class="px-6 py-6 lg:col-span-3">
        <div class="grid grid-cols-1 gap-3">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                            Ajuan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                            Waktu Pengajuan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($ajuans as $ajuan)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ajuan->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ajuan->waktu_pengajuan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $ajuan->category->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php
                                if($ajuan->status == 0){ 
                                    ?>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">Diajukan</span>
                                <?php
                                } else if($ajuan->status == 2){ ?>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-red-800">Ditolak</span>
                                <?php
                                }
                                else{
                                    ?>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-gray-500">Selesai</span>
                                <?php
                                } ?>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php
                                if($ajuan->status == 1){ ?>
                                <a href="{{ route('cetak-surat-user', $ajuan->id) }}" class="inline-block">
                                    <button
                                        class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Cetak</button>
                                </a>
                                <a href="{{ route('lihat-surat-user', $ajuan->id) }}" target="_blank"
                                    class="inline-block">
                                    <button
                                        class="px-4 py-2 font-medium text-white bg-gray-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Lihat</button>
                                </a>
                                <?php
                                } 
                                else{
                                    ?>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">-</span>
                                <?php
                                } ?>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-profil-layout>

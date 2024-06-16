<x-admin-layout>

    <div class="w-full mt-12">
        <div class="bg-white overflow-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Id Ajuan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            NIK Penduduk</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama Penduduk</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Masuk</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">AJ001</td>
                        <td class="px-6 py-4 whitespace-nowrap">1275xxxxxxxxxxx2</td>
                        <td class="px-6 py-4 whitespace-nowrap">Viviana</td>
                        <td class="px-6 py-4 whitespace-nowrap">09-06-2024</td>
                        <td class="px-6 py-4 whitespace-nowrap">Keterangan Penghasilan</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">Diajukan</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ url('/konfirmasisurat') }}" class="inline-block">
                                <button
                                    class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Konfirmasi</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">AJ001</td>
                        <td class="px-6 py-4 whitespace-nowrap">1275xxxxxxxxxxx2</td>
                        <td class="px-6 py-4 whitespace-nowrap">Viviana</td>
                        <td class="px-6 py-4 whitespace-nowrap">09-06-2024</td>
                        <td class="px-6 py-4 whitespace-nowrap">Keterangan Penghasilan</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">Diajukan</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ url('/konfirmasisurat') }}" class="inline-block">
                                <button
                                    class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Konfirmasi</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>

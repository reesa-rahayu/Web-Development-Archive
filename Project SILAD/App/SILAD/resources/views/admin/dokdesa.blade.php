<x-admin-layout>
    <a href="{{ url('/tambahdokdesa') }}" class="inline-block p-6">
        <button
            class="text-white bg-green-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="submit">Tambahkan Dokumen</button>
    </a>
    <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Id Dokumen
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ringkasan
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Terbit
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Kedaluarsa
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tindakan
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap">
                        DD001
                    </td>
                    <td class="px-9 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Dokumen Anggaran Desa 2024</div>
                        <div class="text-sm text-gray-500">Anggaran Desa adalah...</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        09-06-2024
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        09-06-2025
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Dipublish
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Unpublish</a>
                        <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap">
                        DD002
                    </td>
                    <td class="px-9 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Daftar Ketua RT 2024</div>
                        <div class="text-sm text-gray-500">Ketua RT terpilih tahun 2024...</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        09-06-2024
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        09-06-2025
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Disembunyikan
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-green-900">Publish</a>
                        <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                    </td>
                </tr>
                <!-- More rows... -->

            </tbody>
        </table>
    </div>
</x-admin-layout>

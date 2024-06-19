<x-admin-layout>
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
                @foreach ($docs as $doc)
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $doc->id }}
                        </td>
                        <td class="px-9 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $doc->nama }}</div>
                            <div class="text-sm text-gray-500">{{ $doc->deskirpsi }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $doc->tanggal_berlaku }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $doc->tanggal_kadaluarsa }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 {{ $doc->status == 'dipublish' ? 'text-green-800' : 'text-red-800' }} ">
                                {{ $doc->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Unpublish</a>
                            <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</x-admin-layout>

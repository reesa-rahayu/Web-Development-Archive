<?php
use App\Models\Pengajuan;
$ajuans = Pengajuan::where('status', 0)->get();
$ajuan_total = count(Pengajuan::all());
$ajuan_selesai = count(Pengajuan::where('status', 1)->get());
?>
<x-admin-layout>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-1">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
            <!-- Card Item Start -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="mt-4">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">Total Ajuan Masuk</h4>
                </div>
                <div class="mt-4 flex items-center text-sm text-red-500">
                    <span class="text-5xl mr-1">{{ $ajuan_total }}</span>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4.707v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L6 11.293V4.707a.5.5 0 00-1 0zm5 10.586V4a.5.5 0 00-1 0v11.293L7.146 13.854a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L10 15.293zm5-10.586v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L15 11.293V4.707a.5.5 0 00-1 0z" />
                    </svg>
                </div>
            </div>

            <!-- Card Item Start -->
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="mt-4">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">Total Ajuan Selesai</h4>
                </div>
                <div class="mt-4 flex items-center text-sm text-green-500">
                    <span class="text-5xl mr-1">{{ $ajuan_selesai }}</span>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4.707v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L6 11.293V4.707a.5.5 0 00-1 0zm5 10.586V4a.5.5 0 00-1 0v11.293L7.146 13.854a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L10 15.293zm5-10.586v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L15 11.293V4.707a.5.5 0 00-1 0z" />
                    </svg>
                </div>
            </div>
            <!-- Card Item End -->

        </div>
    </div>

    <div class="flex flex-wrap mt-6">
        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-plus mr-3"></i> Statistik Harian Ajuan Masuk
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartOne" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-check mr-3"></i> Statistik Harian Ajuan Selesai
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartTwo" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Ajuan Terbaru
        </p>
        <div class="bg-white overflow-auto">
            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Id Ajuan</th>
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
                        @foreach ($ajuans as $ajuan)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $ajuan->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $ajuan->waktu_pengajuan }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $ajuan->category->nama }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php
                                        if($ajuan->status == 0){ ?>
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">Diajukan</span>
                                    <?php
                                        }
                                        else{
                                            ?>
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-gray-500">Selesai</span>
                                    <?php
                                        } ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="/admin/surat/ajuan/{{ $ajuan['id'] }}" class="inline-block">
                                        <button
                                            class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Lihat</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>

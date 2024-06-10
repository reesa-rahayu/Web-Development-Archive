<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beranda</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3b5d50; }
        .bg-header { background: #f9bf29; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #f9bf29; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #f9bf29; }
        .nav-item:hover { background: #f9bf29; }
        .account-link:hover { background: #3d68ff; }
        </style>
          @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="{{ url('/') }}" class="text-white text-5xl font-semibold uppercase hover:text-gray-300">SILAD</a>
            <h1 class="text-3xl text-white pb-6">Admin</h1>
        </div>
        <nav class="text-white text-base font-semibold pt-0">
            <a href="{{ url('/') }}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <div class="nav-item">
            <a href="javascript:void(0)" onclick="toggleDropdown('surat-dropdown')" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-sticky-note mr-3"></i>
                Surat
            </a>
            <div id="surat-dropdown" class="hidden pl-12">
                <a href="{{ url('/ajuansurat') }}" class="block py-2 text-white opacity-75 hover:opacity-100">Permintaan Surat</a>
                <a href="{{ url('/suratselesai') }}" class="block py-2 text-white opacity-75 hover:opacity-100">Surat Selesai</a>
            </div>
            </div>
            <a href="{{ url('/dokdesa') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Dokumen Desa
            </a>
            <a href="{{ url('/dokpenduduk') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Dokumen Penduduk
            </a>
            <a href="{{ url('/faq') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                FAQ
            </a>
            <a href="{{ url('/kelolauser') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Kelola User
            </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-header py-2 px-6 hidden sm:flex">
        <h1 class="text-3xl text-black pb-2 py-4">Dashboard</h1>
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-1">
            <div
              class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5"
            >
              <!-- Card Item Start -->
              <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
            <div class="mt-4">
                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Total Ajuan Masuk</h4>
            </div>
            <div class="mt-4 flex items-center text-sm text-red-500">
                <span class="text-5xl mr-1">12</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 4.707v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L6 11.293V4.707a.5.5 0 00-1 0zm5 10.586V4a.5.5 0 00-1 0v11.293L7.146 13.854a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L10 15.293zm5-10.586v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L15 11.293V4.707a.5.5 0 00-1 0z"/>
                </svg>
            </div>
        </div>

        <!-- Card Item Start -->
        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
            <div class="mt-4">
                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Total Ajuan Selesai</h4>
            </div>
            <div class="mt-4 flex items-center text-sm text-green-500">
                <span class="text-5xl mr-1">7</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 4.707v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L6 11.293V4.707a.5.5 0 00-1 0zm5 10.586V4a.5.5 0 00-1 0v11.293L7.146 13.854a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L10 15.293zm5-10.586v6.586l-1.146-1.146a.5.5 0 00-.707.707l2 2a.5.5 0 00.707 0l2-2a.5.5 0 00-.707-.707L15 11.293V4.707a.5.5 0 00-1 0z"/>
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
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id Ajuan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK Penduduk</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Penduduk</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Masuk</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
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
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">Diajukan</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
            <a href="{{ url('/konfirmasisurat') }}" class="inline-block">
            <button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Konfirmasi</button>
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
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">Diajukan</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
            <a href="{{ url('/konfirmasisurat') }}" class="inline-block">
            <button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Konfirmasi</button>
            </a>
            </td>
        </tr>
    </tbody>
</table>
</div>
                    </div>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
    function toggleDropdown(dropdownId) {
        var dropdown = document.getElementById(dropdownId);
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.add('hidden');
        }
    }
</script>
</body>
</html>

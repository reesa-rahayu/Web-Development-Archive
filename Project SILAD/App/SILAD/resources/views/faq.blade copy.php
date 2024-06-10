<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FAQ</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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
            <a href="{{ url('/') }}" class="flex items-center text-white py-4 pl-6 nav-item">
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
            <a href="{{ url('/faq') }}" class="flex items-center active-nav-link text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
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
        <h1 class="text-3xl text-black pb-2 py-4">FAQ</h1>
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

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col items-center justify-center">
        <main class="w-1/2 flex-grow p-6">
            <!-- Additional questions can be added similarly -->
            <div class="mb-6">
                <p class="text-xl">Pertanyaan: Apa persyaratan untuk mengajukan KTP?</p>
                <div class="mt-2">
                    <label for="answer2" class="block text-sm text-gray-700">Jawaban:</label>
                    <textarea id="answer2" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Masukkan jawaban Anda di sini"></textarea>
                    <button class="w-full mt-3 p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Kirim Jawaban</button>
                </div>
            </div>

            <div class="mb-6">
                <p class="text-xl">Pertanyaan: Bagaimana cara memperbarui Kartu Keluarga?</p>
                <div class="mt-2">
                    <label for="answer3" class="block text-sm text-gray-700">Jawaban:</label>
                    <textarea id="answer3" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Masukkan jawaban Anda di sini"></textarea>
                    <button class="w-full mt-3 p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Kirim Jawaban</button>
                </div>
            </div>

            <div class="mb-6">
                <p class="text-xl">Pertanyaan: Apa prosedur untuk membuat akta kelahiran?</p>
                <div class="mt-2">
                    <label for="answer4" class="block text-sm text-gray-700">Jawaban:</label>
                    <textarea id="answer4" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Masukkan jawaban Anda di sini"></textarea>
                    <button class="w-full mt-3 p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Kirim Jawaban</button>
                </div>
            </div>

            <div class="mb-6">
                <p class="text-xl">Pertanyaan: Bagaimana cara mendapatkan surat pindah?</p>
                <div class="mt-2">
                    <label for="answer5" class="block text-sm text-gray-700">Jawaban:</label>
                    <textarea id="answer5" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="Masukkan jawaban Anda di sini"></textarea>
                    <button class="w-full mt-3 p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Kirim Jawaban</button>
                </div>
            </div>
            <div class="bg-white overflow-auto"> 
        </main>
    </div>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
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

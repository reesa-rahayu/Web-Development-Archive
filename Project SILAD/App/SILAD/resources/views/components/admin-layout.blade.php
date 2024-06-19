<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3b5d50;
        }

        .bg-header {
            background: #f9bf29;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #f9bf29;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #f9bf29;
        }

        .nav-item:hover {
            background: #f9bf29;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-family-karla flex">
    <x-admin-aside></x-admin-aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <x-admin-header></x-admin-header>

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                {{ $slot }}
            </main>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <?php
    use App\Models\Pengajuan;
    $count_sku = count(Pengajuan::where('category_id', 1)->get());
    $count_sktu = count(Pengajuan::where('category_id', 2)->get());
    $count_sktms = count(Pengajuan::where('category_id', 3)->get());
    $count_sktmu = count(Pengajuan::where('category_id', 4)->get());
    $count_pktp = count(Pengajuan::where('category_id', 10)->get());
    $count_skd = count(Pengajuan::where('category_id', 11)->get());
    ?>
    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['SKU', 'SKTU', 'SKTMs', 'SKTMu', 'PKTP', 'SKD'],
                datasets: [{
                    label: 'Jumlah Pengajuan',
                    data: [<?php echo $count_sku; ?>, <?php echo $count_sktu; ?>, <?php echo $count_sktms; ?>,
                        <?php echo $count_sktmu; ?>, <?php echo $count_pktp; ?>, <?php echo $count_skd; ?>
                    ],
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
    <?php
    $sku_selesai = count(Pengajuan::where('category_id', 1)->where('status', 1)->get());
    $sktu_selesai = count(Pengajuan::where('category_id', 2)->where('status', 1)->get());
    $sktms_selesai = count(Pengajuan::where('category_id', 3)->where('status', 1)->get());
    $sktmu_selesai = count(Pengajuan::where('category_id', 4)->where('status', 1)->get());
    $pktp_selesai = count(Pengajuan::where('category_id', 10)->where('status', 1)->get());
    $skd_selesai = count(Pengajuan::where('category_id', 11)->where('status', 1)->get());
    
    ?>
    <script>
        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['SKU', 'SKTU', 'SKTMs', 'SKTMu', 'PKTP', 'SKD'],
                datasets: [{
                    label: 'Jumlah Pengajuan',
                    data: [<?php echo $sku_selesai; ?>, <?php echo $sktu_selesai; ?>, <?php echo $sktms_selesai; ?>,
                        <?php echo $sktmu_selesai; ?>, <?php echo $pktp_selesai; ?>, <?php echo $skd_selesai; ?>
                    ],
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
    {{-- <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }
    </script> --}}
</body>

</html>

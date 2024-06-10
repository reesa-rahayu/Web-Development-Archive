<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILAD</title>
    <style>
      .gradient {
        background: linear-gradient(90deg, #1c1645 0%, #5887FF 100%);
      }
    </style>
    @vite('resources/css/app.css')
</head>
<body class = "gradient">
<div
    class="relative w-full bg-white px-6 pt-10 pb-8 mt-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10">
    <div class="mx-auto px-5">
        <div class="flex flex-col items-center">
            <h2 class="mt-5 text-center text-3xl font-bold tracking-tight md:text-5xl">FAQ</h2>
            <p class="mt-3 text-lg text-neutral-500 md:text-xl">Frequenty asked questions

            </p>
        </div>
        <div class="mx-auto mt-8 grid max-w-xl divide-y divide-neutral-200">
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Bagaimana cara saya mendaftar untuk menggunakan aplikasi ini?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Untuk mendaftar, Anda dapat mengikuti langkah-langkah pendaftaran yang tersedia di aplikasi atau menghubungi pihak terkait untuk bantuan lebih lanjut.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Apa saja fitur utama yang tersedia dalam aplikasi ini?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Fitur utama aplikasi ini meliputi pengajuan layanan administrasi desa, pembaruan informasi pribadi, dan kontak dukungan.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Bagaimana cara mengajukan permohonan layanan administrasi desa melalui aplikasi ini?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Anda dapat mengajukan permohonan layanan melalui fitur yang tersedia di dalam aplikasi dengan mengisi formulir yang diperlukan.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Apakah aplikasi ini aman digunakan untuk mengirimkan informasi sensitif?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Aplikasi ini dirancang dengan standar keamanan tinggi untuk melindungi informasi pribadi pengguna.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Apakah ada biaya yang terkait dengan penggunaan aplikasi ini?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Penggunaan aplikasi ini gratis, jadi tidak diperlukan biaya untuk menggunakannya.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Apakah aplikasi ini memiliki dukungan untuk berbagai bahasa atau hanya dalam satu bahasa?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Aplikasi ini mungkin mendukung berbagai bahasa untuk meningkatkan aksesibilitas pengguna dari berbagai latar belakang.
                    </p>
                </details>
            </div>
            <p class="text-center list-none items-center justify-between font-medium">
      <a href="/" class="font-semibold leading-6 text-navy-300 hover:text-indigo-500">Kembali</a>
    </p>
    <p class="text-center list-none items-center justify-between font-medium">
      <a href="/aju" class="font-semibold leading-6 text-navy-300 hover:text-indigo-500">Ajukan pertanyaan</a>
    </p>
        </div>
    </div>
</div>
<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</body>
</html>
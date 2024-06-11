<header x-data="{ isOpen: false }">
    <nav class ="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <x-application-logo></x-application-logo>
            </a>

            {{-- main nav link --}}
            <div class="justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <div class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">

                    <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>

                    <div>
                        <div class="relative">
                            <button type="button" @click="isOpen = !isOpen"
                                class="w-full flex items-center justify-between rounded font-semibold"
                                data-dropdown-toggle="dropdown-menu">
                                <span
                                    class="flex py-2 pr-4 pl-3 text-gray-700 border-b hover:underline border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                                    Layanan</span>
                                <svg class="h-5 w-5 flex-none text-gray-700 dark:text-gray-100" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                class="hidden lg:block absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl text-gray-700 bg-white dark:bg-gray-700 dark:text-white shadow-lg ring-1 ring-gray-900/5">
                                <div class="p-4">
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-200  dark:hover:bg-gray-900">
                                        <div class="flex-auto">
                                            <a href="/layanan/umum"
                                                class="block font-semibold text-gray-900 dark:text-white hover:text-blue-700">
                                                Layanan Umum
                                                <span class="absolute inset-0"></span>
                                                <p class="mt-1 text-gray-600 dark:text-gray-400">Surat Keterangan
                                                    Usaha , Surat Keterangan Tempat Usaha, Surat Keterangan Tidak
                                                    Mampu, Surat Keterangan Penghasilan Orang Tua, Permohonan Izin
                                                    Keramaian Pesta, Surat Pengantar SKCK, Surat Keterangan Ahli
                                                    Waris, Surat Keterangan Beda Identitas
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-200  dark:hover:bg-gray-900">
                                        <div class="flex-auto">
                                            <a href="/layanan/kependudukan"
                                                class="block font-semibold text-gray-900 dark:text-white hover:text-blue-700">
                                                Layanan Kependudukan
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600 dark:text-gray-400">Formulir Kartu
                                                Keluarga (Pengganti F-1.01), Surat Pernyataan Perubahan Data
                                                Kependudukan (F-1.05), Formulir Permohonan KK Baru WNI(F-1.15),
                                                Formulir Permohonan Perubahan KK Baru WNI (F-1.16), Formulir
                                                Permohonan KTP (F-1.21), Surat Keterangan Domisili, Surat Keterangan
                                                Pindah, dsb.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:hidden hidden dropdown-menu absolute top-0 left-0 w-full overflow-hidden z-10"
                                id="dropdown-menu">
                                <ul class="text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-white">
                                    <li class="py-2 px-4 block hover:bg-gray-200 dark:hover:bg-gray-600">
                                        <a href="/layanan">Pelayanan Umum</a>
                                    </li>
                                    <li class="py-2 px-4 block hover:bg-gray-200 dark:hover:bg-gray-600">
                                        <a href="/layananpend">Pelayanan Penduduk</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <x-nav-link href="/FAQ" :active="request()->is('FAQ')">FAQ</x-nav-link>
                </div>
            </div>

            {{-- user button --}}
            <div class="flex justify-end items-center lg:flex lg:w-auto lg:order-2 lg:flex-row lg:space-x-8 lg:mt-0"
                id="mobile-menu-2">
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </div>

        </div>
    </nav>
</header>

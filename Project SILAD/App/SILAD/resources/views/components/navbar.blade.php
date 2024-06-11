<header x-data="{ isOpen: false }">
    <nav class ="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <img src="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg" class="mr-3 h-6 sm:h-9"
                    alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">SILAD</span>
            </a>
            <div
                class="flex items-center lg:order-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"">
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </div>
            <div class="-mr-2 flex lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <div class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">

                    <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>

                    <div>
                        <div class="relative">
                            <button type="button" @click="isOpen = !isOpen"
                                class="w-full flex items-center justify-between rounded font-semibold"
                                data-dropdown-toggle="dropdown-menu">
                                <span
                                    class="flex py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
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
        </div>
    </nav>
</header>

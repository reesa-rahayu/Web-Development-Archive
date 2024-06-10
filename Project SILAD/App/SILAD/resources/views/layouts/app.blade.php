<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SILAD') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0"
            src="https://plus.unsplash.com/premium_photo-1674019234994-eceabbdd091d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <div class="relative min-h-screen selection:bg-[#2067ff] selection:text-white">
            <header class="bg-white dark:bg-[#074C5A] w-full" x-data="{ isOpen: false }">
                <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <div class="-m-1.5 p-1.5">
                            <a href="/">
                                <span class="sr-only"></span>
                                <img class="h-8 w-auto" src="images/logo.svg" alt="logo"></img>
                            </a>
                        </div>
                        <div
                            class="text-xl font-semibold leading-6 text-[#074C5A] dark:text-gray-100 flex items-center p-1.5">
                            <a href="/">SILAD</a>
                        </div>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-12">
                        <div class="relative">
                            <button type="button" @click="isOpen = !isOpen"
                                class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 dark:text-gray-100"
                                aria-expanded="false">
                                Layanan
                                <svg class="h-5 w-5 flex-none text-gray-100" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
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
                                class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                                <div class="p-4">
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-yellow-200">
                                        <div class="flex-auto">
                                            <a href="/layanan/umum">
                                                <p class="block font-semibold text-gray-900">Layanan Umum</p>
                                                <span class="absolute inset-0"></span>
                                                <p class="mt-1 text-gray-600">Surat x, surat Y, dkk.</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-yellow-200">
                                        <div class="flex-auto">
                                            <a href="/layanan/kependudukan" class="block font-semibold text-gray-900">
                                                Layanan Kependudukan
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Surat pindah, surat keterangan tinggal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-100">FAQ</a>
                        <a href="#"
                            class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-100">About</a>
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div class="lg:hidden" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0 z-10"></div>
                    <div
                        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="">
                            </a>
                            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <div class="-mx-3">
                                        <button type="button"
                                            class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                            aria-controls="disclosure-1" aria-expanded="false">
                                            Product
                                            <!--
                                Expand/collapse icon, toggle classes based on menu open state.
              
                                Open: "rotate-180", Closed: ""
                              -->
                                            <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                        <div class="mt-2 space-y-2" id="disclosure-1">
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                                demo</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                                sales</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                                </div>
                                <div class="py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                        in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <!-- Page Content -->
                <main class="mt-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>

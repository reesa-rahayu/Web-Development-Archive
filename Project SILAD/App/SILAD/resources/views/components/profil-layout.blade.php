<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- component -->
    <div class="bg-white-100 w-full">
        <div class="bg-gray-100 font-family-karla flex overflow-y-scroll">
            <div class="bg-white border-4 rounded-lg shadow relative w-full">
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-6 lg:divide-y-0 lg:divide-x">
                        <div class="py-6 lg:col-span-1">
                            <x-profil-aside></x-profil-aside>
                        </div>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        <script src="//unpkg.com/alpinejs"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</x-app-layout>

<x-app-layout>
    <div class = "gradient">
        <!-- ====== FAQ Section Start -->
        <section x-data="{
            openFaq1: false,
            openFaq2: false,
            openFaq3: false,
            openFaq4: false,
            openFaq5: false,
            openFaq6: false
        }" class="relative overflow-hidden pb-12 lg:pt-[20px] lg:pb-[90px]">
            <div class="container mx-auto">
                <div class="flex flex-wrap mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                            <span class="block mb-2 text-3xl font-semibold text-white">
                                FAQ
                            </span>
                            <h2 class="text-dark dark:text-white mb-4 text-3xl font-bold sm:text-[40px]/[48px]">
                                Punya pertanyaan? Cari jawabannya disini yaa..
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mx-4">
                    <div class="w-full px-4 grid grid-cols-2 gap-4">
                        @foreach ($faqs as $faq)
                            <div
                                class="w-full p-4 mb-8 bg-slate-50 dark:bg-gray-900 rounded-lg shadow-lg sm:p-8 lg:px-6 xl:px-8">
                                <details class="group">
                                    <summary
                                        class="flex cursor-pointer list-none items-center justify-between font-medium">
                                        <span class="text-black dark:text-white">{{ $faq->pertanyaan }}</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" viewBox="0 0 24 24" width="24"
                                                class="text-black dark:text-white">
                                                <path d="M6 9l6 6 6-6"></path>
                                            </svg>
                                        </span>
                                    </summary>
                                    <p class="group-open:animate-fadeIn mt-3 text-gray-800 dark:text-gray-300">
                                        {{ $faq->jawaban }}
                                    </p>
                                </details>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <div class="fixed inset-x-0 lg:inset-x-auto bottom-6 lg:right-8 xl:right-10 xl:bottom-8">
            <div class="lg:w-72 px-5 lg:px-0 flex justify-end align-bottom">
                <a href="/"
                    class="bg-blue-600 m-1 border-primary rounded-md inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-white hover:bg-[#1B44C8] hover:border-[#1B44C8] disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5 active:bg-[#1B44C8] active:border-[#1B44C8]">
                    Kembali
                </a>

            </div>
        </div>
        <!-- ====== FAQ Section End -->
        <!-- from cdn -->
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    </div>
</x-app-layout>

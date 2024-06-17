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
                    <div class="w-full px-4 lg:w-1/2">
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
                <a href="/FAQ/ajukan"
                    class="bg-blue-600 m-1 border-primary rounded-md inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-white hover:bg-[#1B44C8] hover:border-[#1B44C8] disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5 active:bg-[#1B44C8] active:border-[#1B44C8]">
                    <div>

                    </div>
                    <span class="pr-[10px]">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                            <g clip-path="url(#clip0_906_8052)">
                                <path
                                    d="M13.1875 9.28125H10.6875V6.8125C10.6875 6.4375 10.375 6.125 9.96875 6.125C9.59375 6.125 9.28125 6.4375 9.28125 6.84375V9.3125H6.8125C6.4375 9.3125 6.125 9.625 6.125 10.0312C6.125 10.4062 6.4375 10.7187 6.84375 10.7187H9.3125V13.1875C9.3125 13.5625 9.625 13.875 10.0312 13.875C10.4062 13.875 10.7187 13.5625 10.7187 13.1562V10.6875H13.1875C13.5625 10.6875 13.875 10.375 13.875 9.96875C13.875 9.59375 13.5625 9.28125 13.1875 9.28125Z" />
                                <path
                                    d="M10 0.5625C4.78125 0.5625 0.5625 4.78125 0.5625 10C0.5625 15.2188 4.8125 19.4688 10.0312 19.4688C15.25 19.4688 19.5 15.2188 19.5 10C19.4688 4.78125 15.2188 0.5625 10 0.5625ZM10 18.0625C5.5625 18.0625 1.96875 14.4375 1.96875 10C1.96875 5.5625 5.5625 1.96875 10 1.96875C14.4375 1.96875 18.0625 5.5625 18.0625 10C18.0625 14.4375 14.4375 18.0625 10 18.0625Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_906_8052">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    Ajukan Pertanyaan
                </a>
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

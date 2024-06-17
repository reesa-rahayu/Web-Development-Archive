<x-admin-layout>
    <main class="w-full grid columns-1 p-6">
        <!-- Additional questions can be added similarly -->
        @foreach ($faqs as $faq)
            <div class="mb-6">
                <p class="text-xl">{{ $faq->pertanyaan }}</p>
                <div class="mt-2">
                    <label for="answer2" class="block text-sm text-gray-700">Jawaban:</label>
                    <textarea id="answer2" class="w-full mt-1 p-2 border border-gray-300 rounded-md" placeholder="{{ $faq->jawaban }}"></textarea>
                    <button class="w-full mt-3 p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit
                        Jawaban</button>
                </div>
            </div>
        @endforeach
        <div class="bg-white overflow-auto">
    </main>
</x-admin-layout>

<x-admin-layout>

    <div class=zmax-w-2xl mx-auto p-4>
        <form action="/submit-post" method="POST">
            <div class="mb-6">
                <label for="title" class="block text-lg font-medium text-gray-800 mb-1">ID Dokumen</label>
                <input type="text" id="title" name="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    required>
            </div>

            <div class="mb-6">
                <label for="title" class="block text-lg font-medium text-gray-800 mb-1">Judul</label>
                <input type="text" id="title" name="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    required>
            </div>

            <div class="mb-6">
                <label for="title" class="block text-lg font-medium text-gray-800 mb-1">Deskripsi</label>
                <input type="text" id="title" name="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    required>
            </div>

            <div class="mb-6">
                <label for="pdf" class="block text-lg font-medium text-gray-800 mb-1">Dokumen</label>
                <input type="file" id="pdf" name="pdf" accept="/pdf" class="w-full">
            </div>

            <div class="flex justify-end">
                <a href="{{ url('/dokdesa') }}" class="inline-block">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600 focus:outline-none">Simpan</button>
                </a>
            </div>
        </form>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-admin-layout>

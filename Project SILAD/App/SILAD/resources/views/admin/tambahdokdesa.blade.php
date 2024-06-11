<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3b5d50; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #f9bf29; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #f9bf29; }
        .nav-item:hover { background: #f9bf29; }
        .account-link:hover { background: #3d68ff; }
        </style>
          @vite('resources/css/app.css')
    </head>
<title>Dokumen Desa</title>
    <div class=zmax-w-2xl mx-auto p-4>
    <form action="/submit-post" method="POST">
        <div class="mb-6">
            <label for="title" class="block text-lg font-medium text-gray-800 mb-1">ID Dokumen</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
        </div>

        <div class="mb-6">
            <label for="title" class="block text-lg font-medium text-gray-800 mb-1">Judul</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
        </div>

        <div class="mb-6">
            <label for="title" class="block text-lg font-medium text-gray-800 mb-1">Deskripsi</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
        </div>

        <div class="mb-6">
            <label for="pdf" class="block text-lg font-medium text-gray-800 mb-1">Dokumen</label>
            <input type="file" id="pdf" name="pdf" accept="/pdf" class="w-full">
        </div>
    
        <div class="flex justify-end">
        <a href="{{ url('/dokdesa') }}" class="inline-block">
        <button type="submit" class="px-6 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600 focus:outline-none">Simpan</button>
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
</head>
<body>
    
</body>
</html>
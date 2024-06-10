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
<body>
    <div class="flex justify-center mt-20 px-8">
        <form class="max-w-2xl">
            <div class="flex flex-wrap border shadow rounded-lg p-3 dark:bg-gray-600">
                <div class="flex flex-col gap-2 w-full border-gray-400">
                    <div>
                        <label class="text-gray-600 dark:text-gray-400">Alasan Penolakan
                        </label>
                        <input
                            class="w-full py-10 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                            type="text">
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700"
                            type="submit">Kirim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
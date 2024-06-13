<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/af/f2/8a/aff28acbd67bef1684bc93010f962db9.jpg">

    <style>
        .gradient {
            background: linear-gradient(90deg, #DBD6FF 0%, #5887FF 100%);
        }
    </style>
    @vite('resources/css/app.css')

</head>

<body class = "gradient">
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Registrasi disini!</h2>
                <p class="text-gray-500 mb-6">Isi data dengan benar!</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Data Pribadi</p>
                            <p>Mohon isi semua pertanyaan.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="full_name">Nama Lengkap</label>
                                    <input type="text" name="full_name" id="full_name"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="idp">NIK</label>
                                    <input type="text" name="idp" id="idp"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="email@domain.com" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address">Alamat</label>
                                    <input type="text" name="address" id="address"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">Nomor HP</label>
                                    <input type="text" name="city" id="city"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>


                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>
                                <div class="md:col-span-5 text-right">
                                    <li>
                                        <a href="/"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Kembali</a>
                                    </li>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

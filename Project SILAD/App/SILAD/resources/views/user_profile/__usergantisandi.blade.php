<x-profil-layout>
    <div class="px-6 py-6 lg:col-span-5">
        <div class="grid grid-cols-1 gap-3">
            <div class="bg-white rounded-lg shadow-lg p-8 max-w w-full">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Ganti Kata Sandi</h2>
                <form id="registrationForm" novalidate>
                    <div class="mb-2">
                        <label for="nik" class="block text-gray-700 font-semibold mb-2">NIK</label>
                        <input type="text" id="nik"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your username" required>
                        <p class="text-red-500 text-sm mt-2 hidden" id="nikError">NIK is required.</p>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your email" required>
                        <p class="text-red-500 text-sm mt-2 hidden" id="emailError">Please enter a valid email.</p>
                    </div>
                    <div class="mb-2">
                        <label for="passwordlama" class="block text-gray-700 font-semibold mb-2">Password Lama</label>
                        <input type="passwordlama" id="passwordlama"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your password" required>
                        <p class="text-red-500 text-sm mt-2 hidden" id="passwordlamaError">Password is required.</p>
                    </div>
                    <div class="mb-2">
                        <label for="new-password" class="block text-gray-700 font-semibold mb-2">Password Baru</label>
                        <input type="password" id="new-password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Confirm your password" required>
                        <p class="text-red-500 text-sm mt-2 hidden" id="newPasswordError">Passwords do not match.</p>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">Simpan</button>
                </form>
            </div>
            <script>
                document.getElementById('registrationForm').addEventListener('submit', function(event) {
                    event.preventDefault();

                    // Clear previous error messages
                    document.querySelectorAll('.text-red-500').forEach(function(element) {
                        element.classList.add('hidden');
                    });

                    let isValid = true;

                    // Validate username
                    const username = document.getElementById('username').value;
                    if (!username) {
                        document.getElementById('usernameError').classList.remove('hidden');
                        isValid = false;
                    }

                    // Validate email
                    const email = document.getElementById('email').value;
                    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    if (!email || !emailPattern.test(email)) {
                        document.getElementById('emailError').classList.remove('hidden');
                        isValid = false;
                    }

                    // Validate password
                    const password = document.getElementById('password').value;
                    if (!password) {
                        document.getElementById('passwordError').classList.remove('hidden');
                        isValid = false;
                    }

                    // Validate confirm password
                    const confirmPassword = document.getElementById('confirm-password').value;
                    if (password !== confirmPassword) {
                        document.getElementById('confirmPasswordError').classList.remove('hidden');
                        isValid = false;
                    }

                    if (isValid) {
                        // Submit the form if all validations pass
                        // You can handle the form submission here, e.g., send data to the server
                        alert('Form submitted successfully!');
                    }
                });
            </script>

</x-profil-layout>

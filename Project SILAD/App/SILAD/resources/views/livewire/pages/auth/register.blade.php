<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered(($user = User::create($validated))));

    Auth::login($user);

    $this->redirect(route('dashboard', absolute: false), navigate: true);
};

?>

<div class="container max-w-screen-lg mx-auto">
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600 pr-24">
                <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                    Registrasi disini!</h2>
                <p class="text-gray-500 mb-6">Isi data dengan benar!</p>
            </div>

            <div class="lg:col-span-2">
                <form wire:submit="register" class="grid gap-4 gap-y-2 text-sm grid-cols-2">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input wire:model="name" id="name" class="mt-1 w-full" type="text" name="name"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- NIK -->
                    <div>
                        <x-input-label for="nik" :value="__('NIK')" />
                        <x-text-input wire:model="nik" id="nik" class="block mt-1 w-full" type="text"
                            name="nik" required autofocus autocomplete="nik" />
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email"
                            name="email" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <x-input-label for="phone" :value="__('Nomor Telepon')" />
                        <x-text-input wire:model="phone" id="phone" class="block mt-1 w-full" type="text"
                            name="phone" required autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Address -->
                    <div class="col-span-2">
                        <x-input-label for="address" :value="__('Alamat')" />
                        <x-text-input wire:model="address" id="address" class="block mt-1 w-full" type="text"
                            name="address" required autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input wire:model="password_confirmation" id="password_confirmation"
                            class="block mt-1 w-full" type="password" name="password_confirmation" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="text-right flex items-center justify-end mt-4 col-span-2">
                        <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}" wire:navigate>
                            {{ __('Sudah punya akun?') }}
                            <span class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">
                                Masuk</span>
                        </a>

                        <x-primary-button class=" text-right ms-4">
                            {{ __('Ajukan Pendaftaran') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

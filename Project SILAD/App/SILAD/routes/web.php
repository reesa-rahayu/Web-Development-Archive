<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('layanan/umum', 'layanan_umum.dashboard');
Route::view('layanan/kependudukan', 'layanan_penduduk.dashboard');

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reg', function () {
    return view('register');
});

Route::get('/aju', function () {
    return view('ajukan');
});

Route::get('/layanan', function () {
    return view('layananumum');
});

Route::get('/layananpend', function () {
    return view('layananpend');
});

Route::get('/fSKU', function () {
    return view('fSKU');
});

Route::get('/fSKTU', function () {
    return view('fSKTU');
});

Route::get('/fSKTMs', function () {
    return view('fSKTMs');
});

Route::get('/fSKTMu', function () {
    return view('fSKTMu');
});

Route::get('/PIKP', function () {
    return view('PIKP');
});

Route::get('/fAW', function () {
    return view('fAW');
});

Route::get('/fRTMS', function () {
    return view('fRTMS');
});

Route::get('/fSKPOT', function () {
    return view('fSKPOT');
});

Route::get('/fSKBI', function () {
    return view('fSKBI');
});

Route::get('/fBio', function () {
    return view('fBio');
});

Route::get('/fKK', function () {
    return view('fKK');
});

Route::get('/fPPDK', function () {
    return view('fPPDK');
});

Route::get('/fPKK', function () {
    return view('fPKK');
});

Route::get('/fPKTP', function () {
    return view('fPKTP');
});

Route::get('/fSKD', function () {
    return view('fSKD');
});

Route::get('/fSKPD', function () {
    return view('fSKPD');
});


Route::get('/fPindah', function () {
    return view('fPindah');
});

Route::get('/fPPPP', function () {
    return view('fPPPP');
});

Route::get('/fPP', function () {
    return view('fPP');
});

Route::get('/fPPW', function () {
    return view('fPPW');
});

Route::get('/admin', function () {
    return view('beranda');
});

Route::get('/ajuansurat', function () {
    return view('ajuansurat');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/dokpenduduk', function () {
    return view('dokpenduduk');
});

Route::get('/dokdesa', function () {
    return view('dokdesa');
});
Route::get('/kelolauser', function () {
    return view('kelolauser');
});
Route::get('/suratselesai', function () {
    return view('suratselesai');
});
Route::get('/konfirmasisurat', function () {
    return view('konfirmasisurat');
});
Route::get('/menolak', function () {
    return view('menolak');
});
Route::get('/tambahdokdesa', function () {
    return view('tambahdokdesa');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';

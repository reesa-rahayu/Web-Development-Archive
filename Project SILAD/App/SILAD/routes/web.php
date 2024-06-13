<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/re', 'welcome');

//layanan umum
Route::view('layanan/umum', 'layanan_umum.dashboard');

Route::view('/fSKBI', 'layanan_umum.fSKBI')
    ->middleware(['auth', 'verified'])
    ->name('fSKBI');

Route::get('/fSKU', function (User $user) {
    return view('layanan_umum.fSKU', ['title' => 'Formulir SKU', 'user_info' => $user]);
})->middleware(['auth', 'verified'])->name('SKU');

Route::get('/fSKBI', function (User $user) {
    return view('layanan_umum.fSKBI', ['title' => 'Formulir SKBI', 'user_info' => $user]);
})->middleware(['auth', 'verified'])->name('SKBI');

Route::view('/fSKD', 'layanan_umum.fSKD')
    ->middleware(['auth', 'verified'])
    ->name('fSKD');

Route::view('/fSKPD', 'layanan_umum.fSKPD')
    ->middleware(['auth', 'verified'])
    ->name('fSKPD');

Route::view('/fSKCK', 'layanan_umum.fSKCK')
    ->middleware(['auth', 'verified'])
    ->name('fSKPD');

Route::view('/fSKPOT', 'layanan_umum.fSKPOT')
    ->middleware(['auth', 'verified'])
    ->name('fSKPOT');

Route::view('/fSKTMs', 'layanan_umum.fSKTMs')
    ->middleware(['auth', 'verified'])
    ->name('fSKTMs');

Route::view('/fSKTMu', 'layanan_umum.fSKTMu')
    ->middleware(['auth', 'verified'])
    ->name('fSKTMu');

Route::view('/fSKTU', 'layanan_umum.fSKTU')
    ->middleware(['auth', 'verified'])
    ->name('fSKTU');

Route::view('/PIKP', 'layanan_umum.PIKP')
    ->middleware(['auth', 'verified'])
    ->name('PIKP');

//layanan umum
Route::view('layanan/kependudukan', 'layanan_penduduk.dashboard');

Route::view('/fAW', 'layanan_penduduk.fAW')
    ->middleware(['auth', 'verified'])
    ->name('fAW');

Route::view('/fAW', 'layanan_penduduk.fAW')
    ->middleware(['auth', 'verified'])
    ->name('fAW');

Route::view('/fKK', 'layanan_penduduk.fKK')
    ->middleware(['auth', 'verified'])
    ->name('fKK');

Route::view('/fPindah', 'layanan_penduduk.fPindah')
    ->middleware(['auth', 'verified'])
    ->name('fPindah');

Route::view('/fPKK', 'layanan_penduduk.fPKK')
    ->middleware(['auth', 'verified'])
    ->name('fPKK');

Route::view('/fPKTP', 'layanan_penduduk.fPKTP')
    ->middleware(['auth', 'verified'])
    ->name('fPKTP');

Route::view('/fPP', 'layanan_penduduk.fPP')
    ->middleware(['auth', 'verified'])
    ->name('fPP');

Route::view('/fPPDK', 'layanan_penduduk.fPPDK')
    ->middleware(['auth', 'verified'])
    ->name('fPPDK');

Route::view('/fPPPP', 'layanan_penduduk.fPPPP')
    ->middleware(['auth', 'verified'])
    ->name('fPPPP');

Route::view('/fPPW', 'layanan_penduduk.fPPW')
    ->middleware(['auth', 'verified'])
    ->name('fPPW');

Route::view('/fRTMS', 'layanan_penduduk.fRTMS')
    ->middleware(['auth', 'verified'])
    ->name('fRTMS');

Route::view('/FAQ', 'FAQ.faq');
Route::view('/FAQ/ajukan', 'FAQ.ajukanPertanyaan')
    ->middleware(['auth', 'verified']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//admin
Route::view('/admin/login', '_login');
Route::view('/admin', 'admin.dashboard')
    // ->middleware(['auth', 'admin'])
    // ->name('dashboard')
;
Route::view('/admin/profile', 'admin.profile');

Route::view('/admin/surat/ajuan', 'admin.ajuansurat');
Route::view('/admin/surat/arsip', 'admin.suratselesai');
Route::view('/admin/ajuan/tolak', 'admin.menolak');
Route::view('/admin/ajuan/terima', 'admin.konfirmasisurat');

Route::view('/admin/dokdesa', 'admin.dokdesa');
Route::view('/admin/dokdesa/tambah', 'admin.tambahdokdesa');
Route::view('/admin/dokpenduduk', 'admin.dokpenduduk');
Route::view('/admin/faq', 'admin.faq');
Route::view('/admin/users', 'admin.kelolauser');





//dummy test
Route::view('/logg', '_login');
Route::view('/regg', '_register');


require __DIR__ . '/auth.php';

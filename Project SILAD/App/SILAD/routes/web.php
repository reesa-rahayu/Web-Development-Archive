<?php

use App\Models\User;
use App\Models\Admin;
use App\Models\Surat;
use Livewire\Livewire;
use App\Models\Document;
use App\Models\Pengajuan;
use App\Models\Pertanyaan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FSKUController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\LihatController;
use App\Http\Controllers\FSKTMsController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\FSKUController as ControllersFSKUController;
use App\Http\Controllers\TolakController;

Route::view('/', 'home');

//layanan umum
Route::view('layanan/umum', 'layanan_umum.dashboard');

// Route::get('/fSKU', function (User $user) {
//     return view('layanan_umum.fSKU', ['title' => 'Formulir SKU', 'info' => $user]);
// })->middleware(['auth', 'verified'])->name('SKU');

Route::get('/fSKU', [FSKUController::class, 'index'])
    ->middleware(['auth', 'verified']);
Route::post('/submit-fsku', [FSKUController::class, 'submitForm'])->name('submit-fsku');

Route::get('/fSKTMs', [FSKTMsController::class, 'index'])
    ->middleware(['auth', 'verified']);
Route::post('/submit-fsktms', [FSKTMsController::class, 'submitForm'])->name('submit-fsktms');

//layanan penduduk
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

//FAQ
Route::get('/FAQ', function () {
    return view('faq.FAQ', ['faqs' => Pertanyaan::all()]);
});

Route::view('/FAQ/ajukan', 'FAQ.ajukanPertanyaan')
    ->middleware(['auth', 'verified']);

//DASHBOARD
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::post('/dashboard/update', [UserController::class, 'updateData'])->name('update-data');

Route::view('dashboard/gantisandi', 'user_profile.usergantisandi')
    ->middleware(['auth', 'verified']);

Route::get('dashboard/document/', function () {
    return view('user_profile.userdokumen', ['ajuans' => Pengajuan::where('pemohon_id',  auth()->user()->id)->get()]);
})->middleware(['auth', 'verified'])->name('userdocument');
// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

//test login
// Route::middleware(['admin'])->group(function () {
//     // Rute yang hanya dapat diakses oleh admin
//     Route::get('/admin', function () {
//         return view('admin.dashboard');
//     });
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     });
//     Route::view('/admin/profile', 'admin.profile');
//     Route::view('/admin/surat/ajuan', 'admin.ajuansurat');
//     Route::view('/admin/surat/arsip', 'admin.suratselesai');
//     Route::view('/admin/ajuan/tolak', 'admin.menolak');
//     Route::view('/admin/ajuan/terima', 'admin.konfirmasisurat');

//     Route::view('/admin/dokdesa', 'admin.dokdesa');
//     Route::view('/admin/dokdesa/tambah', 'admin.tambahdokdesa');
//     Route::view('/admin/dokpenduduk', 'admin.dokpenduduk');
//     Route::view('/admin/faq', 'admin.faq');
//     Route::view('/admin/users', 'admin.kelolauser');
// });

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', \App\Http\Livewire\AdminLogin::class)->name('admin.dashboard');
// });


// Route::get('/admin/login', Livewire::component('admin-login'))->name('admin.login');

Route::get('admin', function () {
    return view('admin.dashboard', ['title' => 'Dashboard']);
});
Route::get('admin/dashboard', function () {
    return view('admin.dashboard', ['title' => 'Dashboard']);
});

Route::get('admin/surat/ajuan', function () {
    return view('admin.ajuansurat', ['title' => 'Ajuan Surat', 'ajuans' => Pengajuan::where('status', 0)->get()]);
});
Route::get('admin/surat/ajuan/{ajuan:id}', function (Pengajuan $ajuan) {
    return view('admin.detailpengajuan', ['ajuan' => $ajuan]);
});
Route::get('admin/surat/ajuan/{ajuan:id}/konfirmasi', function (Pengajuan $ajuan) {
    return view('admin.detailpengajuan', ['ajuan' => $ajuan]);
});
Route::get('admin/surat/ajuan/{ajuan:id}/konfirmasi', [ConfirmController::class, 'confirmSurat'])->name('comfirm-surat');

Route::get('admin/surat/ajuan/{ajuan:id}/tolak', [TolakController::class, 'tolakSurat'])->name('tolak-surat');

Route::get('/admin/surat/arsip/cetak/{surat:id}', [CetakController::class, 'cetakSurat'])->name('cetak-surat');
Route::get('/admin/surat/arsip/lihat/{surat:id}', [LihatController::class, 'lihatSurat'])->name('lihat-surat');


Route::get('/dashboard/dokumen/cetak/{surat:id}', [CetakController::class, 'cetakSuratUser'])->name('cetak-surat-user');
Route::get('/dashboard/dokumen/lihat/{surat:id}', [LihatController::class, 'lihatSuratUser'])->name('lihat-surat-user');

Route::get('admin/surat/arsip', function () {
    return view('admin.suratselesai', ['title' => 'Arsip Surat', 'surats' => Surat::all()]);
});

Route::get('admin/ajuan/tolak', function () {
    return view('admin.menolak');
});
Route::get('admin/ajuan/terima', function () {
    return view('admin.konfirmasisurat');
});
Route::get('admin/dokdesa', function () {
    return view('admin.dokdesa', ['title' => 'Dokumen Desa', 'docs' => Document::all()]);
});
Route::get('admin/dokdesa/tambah', function () {
    return view('admin.tambahdokdesa');
});
Route::get('admin/faq', function () {
    return view('admin.faq', ['title' => 'FAQ', 'faqs' => Pertanyaan::all()]);
});
Route::get('admin/users', function () {
    return view('admin.kelolauser', ['title' => 'Kelola User', 'users' => User::all()]);
});


//dummy test
Route::view('/logg', 'admin._login');
Route::view('/regg', '_register');
Route::view('/FKTMs', 'form.FSKTMs');


require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';

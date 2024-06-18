<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ConfirmController extends Controller
{
    public function confirmSurat(Request $request, Pengajuan $ajuan)
    {
        $today = Carbon::now();
        $dateThreeYearsLater = $today->addYears(3)->toDateString();

        $surat = Surat::create([
            'pengajuan_id' => $ajuan->id,
            'category_id' => $ajuan->id,
            'nomor' => $request->no_surat,
            'pemilik_id' => $ajuan->pemohon->id,
            'tanggal_terbit' => $today,
            'tanggal_kadaluarsa' => $dateThreeYearsLater,
        ]);

        // Mengupdate status dan waktu konfirmasi pada pengajuan
        $ajuan->status = 1; // Gantikan status dengan yang sesuai
        $ajuan->waktu_konfirmasi = now(); // Tanggal dan waktu konfirmasi saat ini

        $ajuan->save();

        // Redirect atau kembali ke halaman yang sesuai
        return redirect('/admin/surat/arsip')->with('success', 'Konfirmasi berhasil!');
    }
}

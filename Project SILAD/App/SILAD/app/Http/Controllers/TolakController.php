<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class TolakController extends Controller
{
    public function tolakSurat(Request $request, Pengajuan $ajuan)
    {
        // Mengupdate status dan waktu konfirmasi pada pengajuan
        $ajuan->status = 2; // Gantikan status dengan yang sesuai
        $ajuan->waktu_konfirmasi = now(); // Tanggal dan waktu konfirmasi saat ini

        $ajuan->save();

        // Redirect atau kembali ke halaman yang sesuai
        return redirect('/admin/surat/ajuan')->with('success', 'Tolak berhasil!');
    }
}

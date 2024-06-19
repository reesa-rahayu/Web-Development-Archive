<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class FSKTMsController extends Controller
{
    public function index()
    {
        return view('layanan_umum.fSKTMs');
    }

    public function submitForm(Request $request)
    {
        $user = auth()->user();

        // // Create a new Pengajuan record
        $pengajuan = Pengajuan::create([
            'pemohon_id' => $user->id,
            'category_id' => '3',
            'deskripsi' => json_encode([
                'nama_ortu' => $request->nama_ortu,
                'nik_ortu' => $request->no_ktp_ortu,
                'tempat_lahir_ortu' => $request->tempat_lahir_ortu,
                'tanggal_lahir_ortu' => $request->tgl_lahir_ortu,
                'jenis_kelamin_ortu' => $request->gender_ortu,
                'pekerjaan' => $request->job,
                'jumlah_saudara' => $request->jumlah_saudara,
                'agama_ortu' => $request->religion_ortu,
                'alamat_lengkap' => $request->alamat_lengkap,
                'nama_anak' => $request->nama_anak,
                'nik_anak' => $request->no_ktp_anak,
                'tempat_lahir_anak' => $request->tempat_lahir_anak,
                'tanggal_lahir_anak' => $request->tgl_lahir_anak,
                'jenis_kelamin_anak' => $request->gender_anak,
                'agama_anak' => $request->religion_anak,
            ]),
        ]);
        // Contoh simpan file PDF ke storage
        return redirect()->route('userdocument');
    }
}

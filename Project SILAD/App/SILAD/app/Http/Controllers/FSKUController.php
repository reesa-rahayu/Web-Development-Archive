<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class FSKUController extends Controller
{
    public function index()
    {
        return view('layanan_umum.fSKU');
    }

    public function submitForm(Request $request)
    {
        $user = auth()->user();

        // // Create a new Pengajuan record
        $pengajuan = Pengajuan::create([
            'pemohon_id' => $user->id,
            'category_id' => '1',
            'deskripsi' => json_encode([
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_usaha' => $request->nama_usaha,
                'alamat_lengkap' => $request->alamat_lengkap,
                'agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'pekerjaan' => $request->pekerjaan,
                'no_ktp' => $request->no_ktp,
                'no_wa' => $request->no_wa,
            ]),
        ]);
        // Contoh simpan file PDF ke storage
        return redirect()->route('dashboard');
    }
}

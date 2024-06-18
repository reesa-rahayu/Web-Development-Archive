<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Barryvdh\DomPDF\PDF as PDF;
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
        $formData = [
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'nama_usaha' => $request->nama_usaha,
            'alamat_lengkap' => $request->alamat_lengkap,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'no_ktp' => $request->no_ktp,
            'no_wa' => $request->no_wa,
        ];
        $pengajuan = Pengajuan::create([
            'pemohon_id' => $user->id,
            'category_id' => '1',
            'deskripsi' => json_encode($formData),
        ]);
        // Contoh simpan file PDF ke storage
        return redirect()->route('dashboard');
    }

    public function pdfGenerate(Request $request)
    {
        // $pdfData = [
        //     'nama_lengkap' => $request->nama_lengkap,
        //     'tempat_lahir' => $request->tempat_lahir,
        //     'tanggal_lahir' => $request->tgl_lahir,
        //     'nama_usaha' => $request->nama_usaha,
        //     'alamat_lengkap' => $request->alamat_lengkap,
        //     'agama' => $request->agama,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'pekerjaan' => $request->pekerjaan,
        //     'no_ktp' => $request->no_ktp,
        //     'no_wa' => $request->no_wa,
        // ];

        // $pdf = PDF::loadView('form.FSKU', $pdfData);
        // return $pdf->download('ajuan-fsku.pdf');
    }
}

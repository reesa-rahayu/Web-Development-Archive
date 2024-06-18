<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
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
        // $formData = $request->all();
        // $validatedData = $request->validate([
        //     'nama_lengkap' => 'required|string|max:255',
        //     'tempat_lahir' => 'required|string|max:255',
        //     'tanggal_lahir' => 'required|date',
        //     'nama_usaha' => 'required|string|max:255',
        //     'alamat_lengkap' => 'required|string|max:255',
        //     'agama' => 'required|string|max:255',
        //     'jenis_kelamin' => 'required|string|max:255',
        //     'pekerjaan' => 'required|string|max:255',
        //     'no_ktp' => 'required|string|max:255',
        //     'no_wa' => 'required|string|max:255',
        //     'terms' => 'required|accepted',
        // ]);
        // $user = auth()->user();

        // // Create a new Pengajuan record
        // $pengajuan = Pengajuan::create([
        //     'pemohon_id' => $user->id,
        //     'category_id' => '1',
        //     'description' => json_encode([
        //         'nama_lengkap' => $validatedData['nama_lengkap'],
        //         'tempat_lahir' => $validatedData['tempat_lahir'],
        //         'tanggal_lahir' => $validatedData['tgl_lahir'],
        //         'nama_usaha' => $validatedData['nama_usaha'],
        //         'alamat_lengkap' => $validatedData['alamat_lengkap'],
        //         'agama' => $validatedData['agama'],
        //         'jenis_kelamin' => $validatedData['jenis_kelamin'],
        //         'pekerjaan' => $validatedData['pekerjaan'],
        //         'no_ktp' => $validatedData['no_ktp'],
        //         'no_wa' => $validatedData['no_wa'],
        //     ]),
        // ]);
        // Redirect or do something else after successful form submission
        $pdf = PDF::loadView('pdf.fsku', compact('data'));

        // Simpan atau tampilkan PDF (sesuai kebutuhan)
        // Contoh simpan file PDF ke storage
        $pdf->save(storage_path('app/public/fsku.pdf'));
        // return redirect()->route('dashboard')->with('success', 'Form submitted successfully!');
    }

    public function pdfGenerate(Request $request)
    {
        $pdfData = [
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

        $pdf = new PDF();
        $pdf->loadView('pdf.template-sku', $pdfData);

        // Return the PDF as a response for download
        return $pdf->stream('custom-document.pdf');
    }
}

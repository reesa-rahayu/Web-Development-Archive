<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class FSKUController extends Controller
{
    public function index()
    {
        return view('layanan_umum.fSKU');
    }

    public function submitForm(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'data.nama_lengkap' => 'required|string|max:255',
            'data.tempat_lahir' => 'required|string|max:255',
            'data.tgl_lahir' => 'required|date',
            'data.nama_usaha' => 'required|string|max:255',
            'data.alamat_lengkap' => 'required|string|max:255',
            'data.agama' => 'required|string|max:255',
            'data.jenis_kelamin' => 'required|string|max:255',
            'data.pekerjaan' => 'required|string|max:255',
            'data.no_ktp' => 'required|string|max:255',
            'data.no_wa' => 'required|string|max:255',
            'terms' => 'required|accepted',
        ]);

        $formData = [
            'nama_lengkap' => $validatedData['data']['nama_lengkap'],
            'tempat_lahir' => $validatedData['data']['tempat_lahir'],
            'tgl_lahir' => $validatedData['data']['tgl_lahir'],
            'nama_usaha' => $validatedData['data']['nama_usaha'],
            'alamat_lengkap' => $validatedData['data']['alamat_lengkap'],
            'agama' => $validatedData['data']['agama'],
            'jenis_kelamin' => $validatedData['data']['jenis_kelamin'],
            'pekerjaan' => $validatedData['data']['pekerjaan'],
            'no_ktp' => $validatedData['data']['no_ktp'],
            'no_wa' => $validatedData['data']['no_wa'],
        ];

        Pengajuan::create([]);




        // Redirect or do something else after successful form submission
        return redirect()->route('dashboard')->with('success', 'Form submitted successfully!');
    }
}

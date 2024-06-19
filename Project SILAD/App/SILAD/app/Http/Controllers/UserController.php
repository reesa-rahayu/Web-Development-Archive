<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function updateData(Request $request)
    {
        $user = auth()->user();
        $user->nik = $request->nik_penduduk;
        $user->name = $request->nama_lengkap;
        $user->kelamin = $request->jenis_kelamin;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->agama = $request->agama;
        $user->save();
        return redirect()->route('dashboard');
    }
}

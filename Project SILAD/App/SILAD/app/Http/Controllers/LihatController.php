<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class LihatController extends Controller
{
    public function lihatSurat($id)
    {
        $surat = Surat::where('id', $id)->first();
        if ($surat && $surat->category->id == 1) {
            $ajuan = $surat->pengajuan;
            return view('form.FSKU', ['ajuan' => $ajuan, 'no_surat' => $surat->nomor]);
        } else if ($surat && $surat->category->id == 3) {
            $ajuan = $surat->pengajuan;
            return view('form.FSKTMs', ['ajuan' => $ajuan, 'no_surat' => $surat->nomor]);
        }
    }
    public function lihatSuratUser($id)
    {
        $surat = Surat::where('pengajuan_id', $id)->first();
        if ($surat && $surat->category->id == 1) {
            $ajuan = $surat->pengajuan;
            return view('form.FSKU', ['ajuan' => $ajuan, 'no_surat' => $surat->nomor]);
        } else if ($surat && $surat->category->id == 3) {
            $ajuan = $surat->pengajuan;
            return view('form.FSKTMs', ['ajuan' => $ajuan, 'no_surat' => $surat->nomor]);
        }
    }
}

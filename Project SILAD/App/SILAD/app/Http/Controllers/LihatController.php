<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class LihatController extends Controller
{
    public function lihatSurat($id)
    {
        $surat = Surat::where('id', $id)->first();
        if ($surat && $surat->category_id == 1) {
            $ajuan = $surat->pengajuan;
            return view('form.FSKU', ['ajuan' => $ajuan, 'no_surat' => $surat->nomor]);
        }
    }
}

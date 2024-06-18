<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CetakController extends Controller
{
    public function cetakSurat(Request $request, $id)
    {
        $surat = Surat::where('id', $id)->first();
        if ($surat && $surat->category_id == 1) {
            $ajuan = $surat->pengajuan;
            $pdf = $this->renderPDF($ajuan, $surat);
            // Download the PDF
            $nomorSurat = str_replace("/", "-", $surat->nomor);
            return $pdf->stream($nomorSurat . '.pdf');
        } else {
            // Handle case where no matching Surat is found or category_id is not 1
            return redirect()->back()->with('error', 'Surat not found or invalid category.');
        }
    }

    private function renderPDF($ajuan, $surat)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Times New Roman');
        $pdfOptions->set('isRemoteEnabled', true);
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
        $dompdf = new Dompdf($pdfOptions);

        // Fetch the view content
        $html = View::make('form.FSKU', ['ajuan' => $ajuan, 'no_surat' => $surat->nomor])->render();

        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        return $dompdf;
    }
}

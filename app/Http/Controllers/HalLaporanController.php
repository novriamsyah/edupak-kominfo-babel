<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\User;
use App\Pak;
use Illuminate\Http\Request;


class HalLaporanController extends Controller
{
    public function pdfPak(Request $req, $id)
    {
        $users = User::find($id);
        $pengaju = Pak::find($id);
        $hari_ini = Carbon::now();
        $hari_ini2 = $hari_ini->isoFormat('DD/MM/YYYY');

        $pdf = PDF::loadview('pdf_laporan_pengajuan', [
            'users' => $users,
            'pengaju' => $pengaju,
            'hari_ini2' => $hari_ini2
        ]);
        return $pdf->stream();
    }

    public function testPak() {
        // $users = User::find($id);
        $riwayat = Pak::all();
        $hari_ini = Carbon::now();
        $hari_ini2 = $hari_ini->isoFormat('DD/MM/YYYY');

        return view('test', [
            // 'users' => $users,
            'riwayat' => $riwayat,
            'hari_ini2' => $hari_ini2
        ]);
    }
}

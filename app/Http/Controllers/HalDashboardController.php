<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Pak;
use Illuminate\Http\Request;

class HalDashboardController extends Controller
{
    // Membuka Halaman Dashboard
    public function halamanDashboard()
    {
        $pengaju = Pak::all();
    	return view('halaman_dashboard', compact('pengaju'));
    }
    public function kelolaPak()
    {
        $pengaju = Pak::all();
    	return view('halaman_pak', compact('pengaju'));
    }
// Menyimpan Pelanggan Baru
    public function simpanPak(Request $req)
    {
        $cek_nip = Pak::where('nip', '=', $req->nip)
        ->count();
        if($cek_nip == 1)
        {
            Session::flash('tidak_terubah', 'Data Gagal ditambahkan');
            return redirect('/dashboard');
        }else{
        $req->validate([
            'file_upl' => 'required|mimes:pdf,csv,txt|max:2048'
        ]);
        $pak = new Pak;
        $pak->nama_pj = $req->nama_pj;
        $pak->nip = $req->nip;
        $pak->karpeg = $req->karpeg;
        $pak->t_lahir = $req->t_lahir;
        $pak->tgl_lahir = Carbon::createFromFormat('m/d/Y', $req->tgl_lahir)->format('Y-m-d');
        $pak->pendidikan = $req->pendidikan;
        $pak->jk_pj = $req->jk_pj;
        $pak->alamat_pj = $req->alamat_pj;
        $pak->pl_pangkat = $req->pl_pangkat;
        $pak->pl_golongan = $req->pl_golongan;
        $pak->tmt_pangkat = Carbon::createFromFormat('m/d/Y', $req->tmt_pangkat)->format('Y-m-d');
        $pak->pl_jabatan = $req->pl_jabatan;
        $pak->jj_jab = $req->jj_jab;
        $pak->jj_jab_pr = $req->jj_jab_pr;
        $pak->tmt_jabatan = Carbon::createFromFormat('m/d/Y', $req->tmt_jabatan)->format('Y-m-d');
        $pak->ms_lama = $req->ms_lama;
        $pak->ms_baru = $req->ms_baru;
        $pak->u_kerja = $req->u_kerja;
        $pak->str_nilai = Carbon::createFromFormat('m/d/Y', $req->str_nilai)->format('Y-m-d');
        $pak->end_nilai = Carbon::createFromFormat('m/d/Y', $req->end_nilai)->format('Y-m-d');
        $pak->thn_susun = $req->thn_susun;
        $pak->str_serah = $req->str_serah;
        $pak->end_serah = $req->end_serah;
        $fl_up = $req->file('file_upl');
        $pak->file_upl = $fl_up->getClientOriginalName();
        $fl_up->move(public_path('upload/'), $fl_up->getClientOriginalName());

        $pak->save();
        Session::flash('tersimpan', 'Data baru berhasil ditambahkan');
        // echo "sukses";
        return redirect('/kelola_pak');
        }
    }

    public function detailPak($id) 
    {
        $pengaju = Pak::find($id);
        return view('detail_pak', compact('id', 'pengaju'));
    }

    public function downloadPak($id) 
    {
        $file_pj = Pak::where('id', $id)->firstOrFail();
        $pathToFile = public_path('upload/'.$file_pj->file_upl);
        return response()->download($pathToFile);
       
    }

    public function editPak($id)
    {
        $pengaju = Pak::find($id);
        return view('edit_pak', compact('pengaju'));
    }

    public function updatePak(Request $req, $id)
    {
        $req->validate([
            'file_upl' => 'required|mimes:pdf,csv,txt'
        ]);

        // if($req->file_upl != '')
        // {
            $pak = Pak::find($id);
            $pak->nama_pj = $req->nama_pj;
            $pak->nip = $req->nip;
            $pak->karpeg = $req->karpeg;
            $pak->t_lahir = $req->t_lahir;
            $pak->tgl_lahir = Carbon::createFromFormat('m/d/Y', $req->tgl_lahir)->format('Y-m-d');
            $pak->pendidikan = $req->pendidikan;
            $pak->jk_pj = $req->jk_pj;
            $pak->alamat_pj = $req->alamat_pj;
            $pak->pl_pangkat = $req->pl_pangkat;
            $pak->pl_golongan = $req->pl_golongan;
            $pak->tmt_pangkat = Carbon::createFromFormat('m/d/Y', $req->tmt_pangkat)->format('Y-m-d');
            $pak->pl_jabatan = $req->pl_jabatan;
            $pak->jj_jab = $req->jj_jab;
            $pak->jj_jab_pr = $req->jj_jab_pr;
            $pak->tmt_jabatan = Carbon::createFromFormat('m/d/Y', $req->tmt_jabatan)->format('Y-m-d');
            $pak->ms_lama = $req->ms_lama;
            $pak->ms_baru = $req->ms_baru;
            $pak->u_kerja = $req->u_kerja;
            $pak->str_nilai = Carbon::createFromFormat('m/d/Y', $req->str_nilai)->format('Y-m-d');
            $pak->end_nilai = Carbon::createFromFormat('m/d/Y', $req->end_nilai)->format('Y-m-d');
            $pak->thn_susun = $req->thn_susun;
            $pak->str_serah = $req->str_serah;
            $pak->end_serah = $req->end_serah;
            $fl_up = $req->file('file_upl');
            $pak->file_upl = $fl_up->getClientOriginalName();
            $fl_up->move(public_path('upload/'), $fl_up->getClientOriginalName());

            $pak->save();
            Session::flash('tersimpan', 'data berhasil diubah');
            // echo "sukses";
            return redirect('/kelola_pak');
        // } else {
        //     $pak = Pak::find($id);
        //     $pak->nama_pj = $req->nama_pj;
        //     $pak->nip = $req->nip;
        //     $pak->karpeg = $req->karpeg;
        //     $pak->t_lahir = $req->t_lahir;
        //     $pak->tgl_lahir = Carbon::createFromFormat('m/d/Y', $req->tgl_lahir)->format('Y-m-d');
        //     $pak->pendidikan = $req->pendidikan;
        //     $pak->jk_pj = $req->jk_pj;
        //     $pak->alamat_pj = $req->alamat_pj;
        //     $pak->pl_pangkat = $req->pl_pangkat;
        //     $pak->pl_golongan = $req->pl_golongan;
        //     $pak->tmt_pangkat = Carbon::createFromFormat('m/d/Y', $req->tmt_pangkat)->format('Y-m-d');
        //     $pak->pl_jabatan = $req->pl_jabatan;
        //     $pak->jj_jab = $req->jj_jab;
        //     $pak->jj_jab_pr = $req->jj_jab_pr;
        //     $pak->tmt_jabatan = Carbon::createFromFormat('m/d/Y', $req->tmt_jabatan)->format('Y-m-d');
        //     $pak->ms_lama = $req->ms_lama;
        //     $pak->ms_baru = $req->ms_baru;
        //     $pak->u_kerja = $req->u_kerja;
        //     $pak->str_nilai = Carbon::createFromFormat('m/d/Y', $req->str_nilai)->format('Y-m-d');
        //     $pak->end_nilai = Carbon::createFromFormat('m/d/Y', $req->end_nilai)->format('Y-m-d');
        //     $pak->thn_susun = $req->thn_susun;
        //     $pak->str_serah = $req->str_serah;
        //     $pak->end_serah = $req->end_serah;

        //     $pak->save();
        //     Session::flash('tersimpan', 'data berhasil diubah');
        //     // echo "sukses";
        //     return redirect('/kelola_pak');
        // }
    }

    
}

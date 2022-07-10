<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pak extends Model
{
    protected $table = 'data_pengajuan';
     protected $fillable = [
        'nama_pj',
         'nip',
         't_lahir',
        'tgl_lahir',
        'pendidikan',
        'jk_pj',
        'alamat_pj',
        'pl_pangkat',
        'pl_golongan',
        'tmt_pangkat',
        'pl_jabatan',
        'jj_jab',
        'jj_jab_pr',
        'tmt_jabatan',
        'ms_lama',
        'ms_baru',
        'u_kerja',
        'str_serah',
        'end_serah',
        'thn_susun',
        'str_serah',
        'end_serah',
        'file_upl'
    ];
}

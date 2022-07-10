<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pj');
            $table->string('nip');
            $table->string('karpeg');
            $table->string('t_lahir');
            $table->date('tgl_lahir');
            $table->string('pendidikan');
            $table->char('jk_pj');
            $table->string('alamat_pj');
            $table->string('pl_pangkat');
            $table->string('pl_golongan');
            $table->date('tmt_pangkat');
            $table->string('pl_jabatan');
            $table->string('jj_jab');
            $table->string('jj_jab_pr');
            $table->date('tmt_jabatan');
            $table->string('ms_lama');
            $table->string('ms_baru');
            $table->string('u_kerja');
            $table->date('str_nilai');
            $table->date('end_nilai');
            $table->string('thn_susun');
            $table->string('str_serah');
            $table->string('end_serah');
            $table->string('file_upl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pengajuan');
    }
}

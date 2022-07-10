@extends('master')
@section('css')
<link href="{{ asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/sweetalert/css/sweetalert.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('assett/css/style.css') }}"> --}}
<style type="text/css">
.card-input-element {
    display: none;
}

.card-input {
    margin: 10px;
    padding: 00px;
}

.card-input:hover {
    cursor: pointer;
}

.card-line{
    margin: 0;
    box-shadow: 0 0 1px 1px #aaa;
    -moz-user-select: none;  
    -webkit-user-select: none;  
    -ms-user-select: none;  
    -o-user-select: none;  
    user-select: none;
}

.card-input-element:checked + .card-input {
     box-shadow: 0 0 1px 2px #615ae6;
 }

.numbering{
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    font-weight: bold;
    color: #4d7cff;
    border: 2px solid #4d7cff;
}

.btn-ammount{
    border: 2px solid #4d7cff;
    background-color: white;
    border-radius: 0px;
}

.item-satuan{
    padding: 15px;
    border-bottom: 1px solid #aaa;
    border-top: 1px solid #aaa;
}

.btn-member-pelanggan{
	background-color: #fff;
	border-radius: 5px;
	width: 200px;
	overflow: hidden;
}
.btn-member{
	float: left;
	text-align: center;
	text-decoration: none;
	background-color: #fff;
	font-weight: bold;
	padding: 10px;
	border-radius: 0px;
}
.c-primary{
	color: #7571f9;
}
.btn-member-border{
	border-bottom: 2px solid #7571f9;
}
.fotouser{
    object-fit: cover;
    width: 3rem;
    height: 3rem;
}
.btn-purple{
	background-color: #6e5cc2;
	color: #fff;
}
.btn-purple:hover{
	color: #fff;
	background-color: #58499b;
}

.selesai-gif {
    object-fit: cover;
    width: 15rem;
    height: 15rem;
}
</style>
@endsection
@section('konten')
@php
$item_pj = \App\Pak::select('data_pengajuan.*')
->where('nip', auth()->user()->nip)
->count();
@endphp
@if (auth()->user()->role == 'user' && $item_pj == 0)
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <h4>Hallo, selamat datang <span>{{auth()->user()->name}}</span></h4> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Registrasi Data PAK</h4>
                    <ul class="nav nav-pills mb-3" style="border-bottom: 1px solid #7571f9;">
                        <li class="nav-item"><a href="#" class="identitas-tab nav-link active">Data Diri</a>
                        </li>
                        <li class="nav-item" hidden="hidden"><a href="#slide-1" class="nav-link active slide-1-btn" data-toggle="tab" aria-expanded="false"></a>
                        </li>
                        <li class="nav-item"><a href="#" class="layanan-tab nav-link">Data kelengkapan Jabatan</a>
                        </li>
                        <li class="nav-item" hidden="hidden"><a href="#slide-2" class="nav-link slide-2-btn" data-toggle="tab" aria-expanded="false"></a>
                        </li>
                        <li class="nav-item"><a href="#" class="akun-tab nav-link">Upload Pengajuan</a>
                        </li>
                        <li class="nav-item" hidden="hidden"><a href="#slide-3" class="nav-link slide-3-btn" data-toggle="tab" aria-expanded="true"></a>
                        </li>
                    </ul>
                    <form class="registrasi-form" method="POST" action="{{url('/simpan_pak')}}" >
                        @csrf
                        <div class="tab-content br-n pn">
                            <div id="slide-1" class="tab-pane active identitas-tab">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <h4 class="mt-3 mb-3">Lengkapi Data Pribadi</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                           <div class="form-group">
                                                            <input type="text" class="form-control" id="name" placeholder="Nama" name="nama_pj">
                                                            <div class="nama_pj_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Masukan NIP" name="nip">
                                                            <div class="nip_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Masukan Nomor KARPEG" name="karpeg">
                                                            <div class="karpeg_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="t_lahir" id="t_lahir">
                                                            <div class="t_lahir_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control datepicker-autoclose" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir" autocomplete="off">
                                                            <div class="tgl_lahir_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select class="form-control" name="pendidikan">
                                                                <option value="" class="">-- Pilih Pendidikan --</option>
                                                                <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                                                                <option value="Diploma 3">Diploma 3</option>
                                                                <option value="Diploma 4">Diploma 4</option>
                                                                <option value="Sarjana">Sarjana</option>
                                                                <option value="pascasarjana">pascasarjana</option>
                                                                <option value="Doktor">Doktor</option>
                                                                {{-- @foreach($outlets as $outlet)
                                                                
                                                                <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                                                                @endforeach --}}
                                                            </select>
                                                            <div class="pendidikan_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div style="margin-bottom: -10px;"><p class="font-weight-bold text-dark">Jenis Kelamin : </p></div>
                                                            <label class="radio-inline mr-3">
                                                                <input type="radio" name="jk_pj" value="L"> Laki-laki</label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="jk_pj" value="P"> Perempuan</label>
                                                        </div>
                                                        <div class="jk_pj_error" style="margin-top: -20px;"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control h-150" rows="5" id="comment" placeholder="Alamat" name="alamat_pj"></textarea>
                                                            <div class="alamat_pj_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3 text-right">
                                                <button class="btn btn-primary next-slide-1" type="button">Lanjut</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="slide-2" class="tab-pane layanan-tab">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <h4 class="mt-3 mb-3">Pangkat / Golongan Ruang / TMT</h4>
                                        <hr>
                                        <div class="form-group">
                                        <select class="form-control pl_pangkat" name="pl_pangkat">
                                            <option value="" class="pangkat_kosong">-- Pilih Pangkat --</option>
                                            <option value="Pengatur">Pengatur</option>
                                            <option value="Pengatur TK 1">Pengatur TK 1</option>
                                            <option value="Penata Muda">Penata Muda</option>
                                            <option value="Penata Muda TK 1">Penata Muda TK 1</option>
                                            <option value="Penata">Penata</option>
                                            <option value="Penata TK 1">Penata TK 1</option>
                                            <option value="Pembina">Pembina</option>
                                            <option value="Pembina Tk 1">Pembina Tk 1</option>
                                        </select>
                                        <div class="pl_pangkat_error"></div>
                                        </div>
                                        <div class="form-group">
                                        <select class="form-control pl_golongan" name="pl_golongan">
                                            <option value="" class="golongan_kosong">-- Pilih Golongan --</option>
                                            <option value="II C">II C</option>
                                            <option value="II D">II D</option>
                                            <option value="III A">III A</option>
                                            <option value="III B">III B</option>
                                            <option value="III C">III C</option>
                                            <option value="III D">III D</option>
                                            <option value="IV A">IV A</option>
                                            <option value="IV B">IV B</option>
                                        </select>
                                        <div class="pl_golongan_error"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker-autoclose" placeholder="TMT Pangkat" name="tmt_pangkat" id="tmt_pangkat" autocomplete="off">
                                            <div class="tmt_pangkat_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="mt-3 mb-3">Jenjang Jabatan / TMT</h4>
                                        <hr>
                                        <div class="form-group">
                                            <select class="form-control pilih_pangkat" name="pl_jabatan">
                                                <option value="" class="jabatan_kosong">-- Pilih Jabatan --</option>
                                                <option value="Pranata Komputer">Pranata Komputer</option>
                                            </select>
                                            <div class="pl_jabatan_error"></div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control pilih_pangkat" name="jj_jab" id="jj_jab">
                                                <option value="" class="jj_jab_kosong">-- Pilih jenjang jabatan --</option>
                                                <option value="Ahli">Ahli</option>
                                                <option value="Terampil">Terampil</option>
                                            </select>
                                            <div class="jj_jab_error"></div>
                                        </div>
                                        <div class="form-group" id="jj_jab_ahli">
                                            <div class="ahli_lis" style="display:none">
                                                <p style="color:blue">*Pilih salah satu dibawah</p>
                                                <select class="form-control" name="jj_jab_pr" id="jj_jab">
                                                    <option value="Ahli pertama">Ahli pertama</option>
                                                    <option value="Ahli muda">Ahli Muda</option>
                                                    <option value="Ahli madya">Ahli madya</option>
                                                    <option value="Ahli utama">Ahli Utama</option>
                                                </select>
                                                <div class="jj_jab_pr_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="jj_jab_terampil">
                                            <div class="terampil_lis" style="display:none">
                                                <p style="color:blue">*Pilih salah satu satu dibawah</p>
                                                <select class="form-control" name="jj_jab_pr" id="jj_jab">
                                                    <option value="Pemula">Pemula</option>
                                                    <option value="Terampil">Terampil</option>
                                                    <option value="Mahir">Mahir</option>
                                                </select>
                                                <div class="jj_jab_pr_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker-autoclose" placeholder="TMT Jabatan" name="tmt_jabatan" id="tmt_jabatan" autocomplete="off">
                                            <div class="tmt_jabatan_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="mt-3 mb-3">Masa Kerja Golongan</h4>
                                                <hr>
                                                <p style="color: red; font-size:12px">Contoh penulisan: 7 Tahun 3 Bulan</p>
                                                <div class="form-group">
                                                    <label>Lama</label>
                                                    <input type="text" class="form-control" placeholder="Masa kerja golongan lama" name="ms_lama">
                                                    <div class="ms_lama_error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Baru</label>
                                                    <input type="text" class="form-control" placeholder="Masa kerja golongan baru" name="ms_baru">
                                                    <div class="ms_baru_error"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="mt-3 mb-3">Unit Kerja</h4>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Unit kerja</label>
                                                    <input type="text" class="form-control" placeholder="Unit kerja" name="u_kerja">
                                                    <div class="u_kerja_error"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <button class="btn btn-primary prev-slide-2" type="button">Kembali</button>
                                        <button class="btn btn-primary next-slide-2" type="button">Lanjut</button>
                                    </div>
                                </div>
                            </div>
                            <div id="slide-3" class="tab-pane akun-tab">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mt-3 mb-3">Masa Penilaian</h4>
                                            <hr>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control datepicker-autoclose" placeholder="Tanggal Mulai" name="str_nilai" id="str_nilai" autocomplete="off">
                                                        <div class="str_nilai_error"></div>
                                                    </div>
                                                    <div class="col-lg-1 mt-3" style="text-align:center">
                                                        <h4>s.d</h4>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control datepicker-autoclose" placeholder="Tanggal selesai" name="end_nilai" id="end_nilai" autocomplete="off">
                                                        <div class="end_nilai_error"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mt-3 mb-3">Tahun Penyusunan</h4>
                                            <hr>
                                            <p style="color:red">*Tuliskan seperti "2022"</p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tahun Penyusunan" name="thn_susun">
                                                <div class="thn_susun_error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="mt-3 mb-3">Periode Penyerahan</h4>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select class="form-control str_serah" name="str_serah">
                                                    <option value="" class="jabatan_kosong">-- Pilih periode --</option>
                                                    <option value="Januari">Januari</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option>
                                                </select>
                                                <div class="str_serah_error"></div>
                                            </div>
                                            <div class="col-lg-1 mt-3" style="text-align:center">
                                                <h4>/</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-control end_serah" name="end_serah">
                                                    <option value="" class="jabatan_kosong">-- Pilih periode --</option>
                                                    <option value="Januari">Januari</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option>
                                                </select>
                                                <div class="end_serah_error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <h4 class="mt-3 mb-3">Upload file</h4>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Upload file <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-file_upl" name="file_upl">
                                                <div class="file_upl_error"></div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <button class="btn btn-primary prev-slide-3" type="button">Kembali</button>
                                                <button class="btn btn-primary next-slide-3 simpan-akhir" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif (auth()->user()->role == 'user' && $item_pj == 1)
<div class="container-fluid">
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Hallo, <span>{{auth()->user()->name}}</span></h4> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>Haii, <span>{{auth()->user()->name}}</span> pengajuan dupak kamu telah selesai</h3> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center" style="margin-top: 5px">
                            <img src="{{asset('gif/d4.jpeg')}}" class="selesai-gif">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center" style="margin-top: 5px">
                            <h4>Kamu dapat melihat detail dari pengajuan dupak yang sudah dibuat </h4>
                            <a href="{{url('/kelola_pak')}}" class="btn btn-primary">disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif (auth()->user()->role == 'admin')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 text-left">
                        <h4>Hallo, Selamat datang verifikator </h4>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="row" style="margin-top: -15px;">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="col-md-12 text-left">
                        <h5>Draf keseluruhan pengajuan PAK</h5>
                        <hr>
                    </div>
                    
                	<div class="table-responsive member_table">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NiP</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $number1 = 1; ?>
                            	@foreach($pengaju as $pj)
                            	<tr>
                            		<th class="align-middle text-center">{{ $number1 }}</th>
                            		<th>{{ $pj->nama_pj }}</th>
                            		<td>{{ $pj->nip }}</td>
                            		<td>{{ $pj->created_at }}</td>
                            		<td style="font-size: 16px;" class="text-center">
                            			<a href="{{ url('/detail_pj/' . $pj->id) }}" class="btn btn-sm btn-outline-primary btn-flat font-weight-bold">Lihat</a>&nbsp;&nbsp;<a href="{{ url('/download_pj/' . $pj->id) }}" class="btn btn-sm btn-primary btn-flat font-weight-bold">Unduh file</a></td>
                            	</tr>
                                <?php $number1++; ?>
                            	@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('script')
<script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
<script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ asset('plugins/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script>
<script src="{{ asset('plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script>
<script src="{{ asset('plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('js/plugins-init/form-pickers-init.js') }}"></script>
<script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
<script src="{{ asset('plugins/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}"></script>

<script type="text/javascript">


$(document).on('click', '.next-slide-1', function(){
    if($(".registrasi-form").valid() == true)
    {
        var validator = $(".registrasi-form").validate();
        validator.resetForm();
        $('.slide-2-btn').click();
        $('.layanan-tab').addClass('active');
        $('.layanan-tab').addClass('show');
        $('.identitas-tab').removeClass('active');
        $('.identitas-tab').removeClass('show');
    }
});

$(document).on('click', '.prev-slide-2', function(){
    $('.slide-1-btn').click();
    $('.identitas-tab').addClass('active');
    $('.identitas-tab').addClass('show');
    $('.layanan-tab').removeClass('active');
    $('.layanan-tab').removeClass('show');
});

$(document).on('click', '.next-slide-2', function(){
    if(($(".registrasi-form").valid() == true))
    {
        var validator = $(".registrasi-form").validate();
        validator.resetForm();
        $('.slide-3-btn').click();
        $('.akun-tab').addClass('active');
        $('.akun-tab').addClass('show');
        $('.layanan-tab').removeClass('active');
        $('.layanan-tab').removeClass('show');
    }
});

$(document).on('click', '.prev-slide-3', function(){
    $('.slide-2-btn').click();
    $('.layanan-tab').addClass('active');
    $('.layanan-tab').addClass('show');
    $('.akun-tab').removeClass('active');
    $('.akun-tab').removeClass('show');
});



$(document).on('submit', '.registrasi-form', function(e){
$data = request;
    // console.log($data);

});

$(document).ready(function() {
    $("#jj_jab").change(function(e) {
        e.preventDefault();
      $(this).find("option:selected").each(function() {
        var optionNilai = $(this).attr("value");
       
       
        if(optionNilai == "Ahli") {
            $('.ahli_lis').show();
            $('.terampil_lis').hide();
        } else if (optionNilai == "Terampil") {
            $('.terampil_lis').show();
            $('.ahli_lis').hide();
        } else {
            $('.terampil_lis').hide();
            $('.ahli_lis').hide();
        }
      });
    }).change();
  });


@if($message = Session::get('tidak_terubah'))
function gagalUsername(){
    toastr.warning("Maaf NIP telah digunakan","Peringatan !", {
        timeOut:5e3,
        closeButton:!0,
        debug:!1,
        newestOnTop:!0,
        progressBar:!0,
        positionClass:"toast-bottom-right",
        preventDuplicates:!0,
        onclick:null,
        showDuration:"300",
        hideDuration:"1000",
        extendedTimeOut:"1000",
        showEasing:"swing",
        hideEasing:"linear",
        showMethod:"fadeIn",
        hideMethod:"fadeOut",
        tapToDismiss:!1
    })
}
@endif

$("[type='number']").keypress(function (evt) {
    evt.preventDefault();
});

    @if ($message = Session::get('tersimpan'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    );
    @endif

$(document).ready(function(){
    $(".registrasi-form").validate({
        rules: {
          nama_pj: "required",
          t_lahir: "required",
          tgl_lahir: "required",
          nip: {
            required: true,
            minlength: 9,
            number: true
          },
          karpeg: "required",
          pendidikan: "required",
          jk_pj: "required",
          alamat_pj: {
            required: true,
            minlength: 15
          },
          pl_pangkat: "required",
          pl_golongan: "required",
          pl_jabatan: "required",
          jj_jab: "required",
          jj_jab_pr: "required",
          tmt_pangkat: "required",
          tmt_jabatan: "required",
          ms_lama: "required",
          ms_baru: "required",
          u_kerja: "required",
          str_nilai: "required",
          end_nilai: "required",
          thn_susun: {
            required:true,
            number:true
          },
          str_serah: "required",
          end_serah: "required",
          file_upl: {
            required: true,
            extension: "pdf,csv,txt",
          }
        },
        messages: {
          nama_pj: "<span style='color: red;'>Nama tidak boleh kosong</span>",
          t_lahir: "<span style='color: red;'>Tempat Lahir tidak boleh kosong</span>",
          tgl_lahir: "<span style='color: red;'>Tanggal Lahir tidak boleh kosong</span>",
          jk_pj: "<span style='color: red;'>Silakan pilih jenis kelamin</span>",
          nip: {
            required: "<span style='color: red;'>NIP tidak boleh kosong</span>",
            minlength: "<span style='color: red;'>NIP terdiri dari minimal 9 karakter angka</span>",
            number: "<span style='color: red;'>NIP harus karakter angka</span>",

          },
          karpeg: "<span style='color: red;'>Nomor seri KARPEG tidak boleh kosong</span>",
          alamat_pj: {
            required: "<span style='color: red;'>Alamat tidak boleh kosong</span>",
            minlength: "<span style='color: red;'>Alamat harus lebih dari 15 karakter</span>"
          },
          pendidikan: "<span style='color: red;'>Pilih Pendidikan terlebih dahulu</span>",
          pl_pangkat: "<span style='color: red;'>Silakan pilih Pangkat</span>",
          pl_golongan: "<span style='color: red;'>Silakan pilih golongan</span>",
          pl_jabatan: "<span style='color: red;'>Silakan pilih jabatan</span>",
          jj_jab: "<span style='color: red;'>Silakan pilih jenjang jabatan</span>",
          jj_jab_pr: "<span style='color: red;'>Silakan pilih jenjang jabatan</span>",
          tmt_pangkat: "<span style='color: red;'>Masukan TMT pangkat</span>",
          tmt_jabatan: "<span style='color: red;'>Masukan TMT jabatan</span>",
          ms_lama: "<span style='color: red;'>Masukan masa kerja golongan lama</span>",
          ms_baru: "<span style='color: red;'>Masukan masa kerja golongan baru</span>",
          u_kerja: "<span style='color: red;'>Masukan masa kerja golongan baru</span>",
          str_nilai: "<span style='color: red;'>Masukan awal masa penilaian</span>",
          end_nilai: "<span style='color: red;'>Masukan akhir masa penilaian </span>",
          thn_susun: {
            required: "<span style='color: red;'>Masukan tahun penyusunan</span>",
            number: "<span style='color: red;'>Harus berupa angka, Contoh: 2019</span>",
          }, 
          str_serah: "<span style='color: red;'>Masukan rentang periode penyerahan</span>",
          end_serah: "<span style='color: red;'>Masukan rentang periode penyerahan</span>",
          file_upl: {
            required: "<span style='color: red;'>File tidak boleh kosong</span>",
            extension: "<span style='color: red;'>File hanya boleh format.pdf dan .csv</span>",

          }
          
        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("." + name + "_error").append($error);
        }
      });
});
</script>
@endsection
@extends('halaman_template')
@section('css')
<link href="{{ asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/sweetalert/css/sweetalert.css') }}" rel="stylesheet">
<style type="text/css">
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
</style>
@endsection
@section('konten')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 text-left">
                        <h4>Keseluruhan Pengaju PAK Saya</h4>
                    </div>
                </div>
            </div>
        </div>
	</div>
    @php
        $item_hitung = \App\Pak::select('data_pengajuan.*')
        ->where('nip', auth()->user()->nip)
        ->count();
    @endphp
    @if($item_hitung == 0)
        <div class="card">
            <div class="card-body">
                <h4>Ada Kesalahan Spradik, NIP Resistrasi berbeda dengan NIP pengajuan yang dimasukan. kamu harus memasukan ulang data dengan masuk kehalaman Dashboard atau menghubungi kontak dibawah ini</h4>
                <h5 style="color: blue">0822 8292 0710 --Whatsapp</h5>
            </div>
        </div>
    @else
    <div class="row" style="margin-top: -15px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
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
                                @php
                                    $item_pj = \App\Pak::select('data_pengajuan.*')
                                    ->where('nip', auth()->user()->nip)
                                    ->first();
                                @endphp
                                
                                <?php $number1 = 1; ?>

                            	<tr>
                            		<th class="align-middle text-center">{{ $number1 }}</th>
                            		<th>
                                     {{$item_pj->nama_pj}}
                                    </th>
                            		<td>{{ $item_pj->nip }}</td>
                            		<td>{{ $item_pj->created_at }}</td>
                            		<td style="font-size: 16px;" class="text-center">
                            			<a href="{{ url('/detail_pj/' . $item_pj->id) }}" class="btn btn-sm btn-outline-primary btn-flat font-weight-bold">Lihat</a>&nbsp;&nbsp;<a href="{{ url('/pdf_laporan_pengajuan/' . $item_pj->id) }}" class="btn btn-sm btn-danger btn-flat font-weight-bold">Print</a>&nbsp;&nbsp;<a href="{{ url('/download_pj/' . $item_pj->id) }}" class="btn btn-sm btn-primary btn-flat font-weight-bold">File upload</a></td>
                            	</tr>
                                <?php $number1++; ?>
                            	
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
@section('script')
<script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
 

    @if ($message = Session::get('tersimpan'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    );
    @endif

    @if ($message = Session::get('terhapus'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    );
    @endif

	$(document).on('click', '.member-btn', function() {
		$(this).addClass('btn-member-border');
    	$('.non_member-btn').removeClass('btn-member-border');
    	$('.member_table').prop('hidden', false);
    	$('.non_member_table').prop('hidden', true);
	});

	$(document).on('click', '.non_member-btn', function() {
		$(this).addClass('btn-member-border');
    	$('.member-btn').removeClass('btn-member-border');
    	$('.member_table').prop('hidden', true);
    	$('.non_member_table').prop('hidden', false);
	});
</script>
@endsection
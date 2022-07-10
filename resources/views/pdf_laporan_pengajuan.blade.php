<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengajuan Dupak</title>
	<style type="text/css">
		html{
			margin: 0;
			padding: 0;
			font-family: "Nunito", sans-serif;
		}
		.header{
			width: 100%;
			height: auto;
			background-color: #ffffff;
			padding-bottom: 10px;
		}
		.logo-laundry{
		    object-fit: cover;
		    width: 6rem;
		    height: 7rem;
		}
		.logo-dupak{
			width: 7rem;
		    height: 1.5rem;
			/* margin-top: 5px; */
		}
		.text-center{
			text-align: left;
		}
		.text-center{
			text-align: right;
		}
		.table-header tr td{
			padding: 5px;
			color: #000;
			font-size: 12px;
		}
		.table-content tr th{
			padding: 8px;
			font-size: 11px;
			color: #000;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		.table-content1 tr th{
			padding: 8px;
			font-size: 11px;
			color: #999999;
			border: 1px solid #ddd;
			text-align: center
		}
		
		.table-content tr td{
			padding: 8px;
			font-size: 11px;
			color: #454545;
			border-bottom: 1px solid #ddd;
		}
		.table-content1 tr td{
			padding: 8px;
			font-size: 11px;
			color: #454545;
			border: 1px solid #ddd;
			text-align: center
		}
		.body-content{
			margin-top: 50px;
		}
		.badge {
		    border-radius: 8px;
		    color: #fff;
		    display: inline-block;
		    line-height: 1;
		    min-width: 10px;
		    font-size: 10px;
		    font-weight: bold;
		    padding: 3px 7px;
		    text-align: center;
		    vertical-align: middle;
		    white-space: nowrap;
		}
		.badge-info{
			background-color: #4d7cff;
		}
		.badge-warning{
			background-color: #f29d56;
		}
		.badge-danger{
			background-color: #ff5e5e;
		}
		.badge-success{
			background-color: #6fd96f;
		}
		.badge-primary{
			background-color: #7571f9;
		}
		
	</style>
</head>
<body>
	<div class="header">
		<table style="width: 100%;" class="table-header">
			<tr>
				<td style="width:10%; padding-top: 40px; padding-left: 40px;" ><img src="{{ asset('icons/babel.png') }}" class="logo-laundry"></td>
				<td class="text-left" style="width:90%; text-align: center; padding-top: 30px; padding-right: 60px">
					<p style="line-height: 1.2" >
						<span style="font-size: 16px;">PEMERINTAH PROVINSI KEPULAUAN BANGKA BELITUNG</span><br>
						<span style="font-size: 20px; font-weight:bold;">DINAS KOMUNIKASI DAN INFORMATIKA</span><br>
						<span style="font-size: 14px;">Jalan Pulau Lepar Komplek Perkantoran dan Permukiman Terpadu</span><br>
						<span style="font-size: 14px;">Pemerintah Provinsi Kepulauan Bangka Belitung, Air Hitam, Pangkalpinang 33149</span>
					</p>
					<p style="line-height: 1.2">
						<span>Telp  :  0717-4262141</span>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>Web  :  https://kominfo.babelprov.go.id</span><br>
						<span>Fax  :  0717-4262143</span>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>Email  :  kominfo@babelprov.go.id</span>
					</p>
				</td>
			</tr>
			<tr>
				
					<hr>
				
			</tr>
		</table>
	</div>
	<div style="width: 100%; text-align:center ">
		<p style="line-height: 1.5">
			<img src="{{asset('icons/edupakk.png')}}" class="logo-dupak"><br>
			<span style="font-size: 13px; font-weight:bold">Bukti Pengajuan Penetapan Angka Kredit</span><br>
			<span style="font-size: 13px; font-weight:bold">Jabatan Fungsional Pranata Komputer</span>			
		</p>
	</div>
	<div class="body-content">
		<table style="width: 100%; border-collapse: collapse; padding-right: 50px; padding-left: 50px;" class="table-content">
			<tr>
				<th style="border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; width:45%; border-collapse: collapse;"><span style="font-size: 16px; font-weight:bold;">*Keterangan Perorangan</span></th>
			</tr>
		</table>
		<table style="width: 100%; border-collapse: collapse; padding-right: 50px; padding-left: 50px;" class="table-content">
			<tr>
				<th style="width:45%;">Nama</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->nama_pj }}</th>
			</tr>
			<tr>
				<th style="width:45%;">NIP</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->nip }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Pangkat/Golongan/TMT</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->pl_pangkat }}/{{ $pengaju->pl_golongan }}/{{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->tmt_pangkat)->format('d-m-Y') }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Tempat dan Tanggal Lahir</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->t_lahir }} / {{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->tgl_lahir)->format('d-m-Y') }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Jenis Kelamin</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">@if($pengaju->jk_pelanggan == 'L')
					Laki-laki
					@else
					Perempuan
					@endif</th>
			</tr>
			<tr>
				<th style="width:45%;">Pendidikan terhitung angka Kredit</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->pendidikan }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Jabatan / TMT</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->pl_jabatan }}-{{ $pengaju->jj_jab_pr }} / {{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->tmt_jabatan)->format('d-m-Y') }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Masa Kerja Golongan</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;"><span>Lama : {{ $pengaju->ms_lama }}</span>&nbsp;&nbsp;&nbsp;<span>Baru : {{ $pengaju->ms_baru }}</span></th>
			</tr>
			<tr>
				<th style="width:45%;">Unit Kerja</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->u_kerja }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Masa Penilaian</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->str_nilai)->format('d-m-Y') }} / {{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->end_nilai)->format('d-m-Y') }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Tahun Penyusunan</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->thn_susun }}</th>
			</tr>
			<tr>
				<th style="width:45%;">Periode Penyerahan</th>
				<th style="width:5%;">:</th>
				<th style="width:45%;">{{ $pengaju->str_serah }} / {{ $pengaju->end_serah }}</th>
			</tr>
		</table><br><br><br>
		<table style="width: 100%; border-collapse: collapse; padding-right: 50px; padding-left: 50px;" class="table-content1">
			<tr>
				<th>NO</th>
				<th>Admin Verifikasi</th>
				<th>Status pengajuan</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Saputra</td>
				<td style="text-align: center"><span class="badge badge-success">diverifikasi</span></td>
			</tr>
		</table>
	</div>
</body>
</html>
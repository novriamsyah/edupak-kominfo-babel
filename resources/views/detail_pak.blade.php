@extends('halaman_template')
@section('css')
<link href="{{ asset('plugins/sweetalert/css/sweetalert.css') }}" rel="stylesheet">
<style type="text/css">
.btn-pesanan{
	background-color: #fff;
	font-weight: bold;
	border-radius: 0px;
}
.btn_active{
	border-bottom: 2px solid #7571f9;
}
.table_modal tr td, .table_modal tr th{
	padding: 5px;
	font-size: 12px;
}
.table-total{
    font-size: 12px;
}
.line-total{
	width: 100%;
	border-top: 2px solid #aaa;
}
.table-total tr th, .table-total tr td{
	padding: 3px;
}
.tabel-identitas tr td, .tabel-identitas tr th{
    max-width: 120px;
}
#table-paket-kiloan{
    font-size: 12px;
}
#table-paket-satuan{
    font-size: 12px;
}
.tabel_satuan{
    font-size: 12px;
}
.tabel_kiloan{
    font-size: 12px;
}
</style>
@endsection
@section('konten')
<div class="container-fluid">
    <div class="row" hidden="">
        <div class="col-md-12">
            <input type="text" name="id_pdf" class="id_pdf">
        </div>
    </div>
	<div class="row">
		<div class="col-lg-10 col-xl-10">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3 rounded-circle" src="{{ asset('images/user/form-user.png') }}" width="80" height="80" alt="">
                        <div class="media-body">
                            <h3 class="mb-0">{{ $pengaju->nama_pj }}</h3>
                            <p class="text-muted mb-0">{{ $pengaju->nip }}</p>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<table style="width: 100%; margin-left: -10px;" class="tabel-identitas">
								<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Nomer Seri KARPEG</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top">{{ $pengaju->karpeg }}</td>
                    			</tr>
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Pangkat/Golongan/TMT</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top">{{ $pengaju->pl_pangkat }}/{{ $pengaju->pl_golongan }}/{{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->tmt_pangkat)->format('d-m-Y') }}</td>
                    			</tr>
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Tempat dan Tanggal Lahir</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top">{{ $pengaju->t_lahir }} / {{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->tgl_lahir)->format('d-m-Y') }} </td>
                    			</tr>
                                <tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Jenis Kelamin</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top">
                    					@if($pengaju->jk_pelanggan == 'L')
                    					Laki-laki
                    					@else
                    					Perempuan
                    					@endif
                    				</td>
                    			</tr>
                                <tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Pendidikan terhitung angka Kredit</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top">{{ $pengaju->pendidikan }}</td>
                    			</tr>
								<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Jabatan / TMT</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top">{{ $pengaju->pl_jabatan }}-{{ $pengaju->jj_jab_pr }} / {{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->tmt_jabatan)->format('d-m-Y') }}</td>
                    			</tr>
                                <tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Masa Kerja Golongan</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top"><strong>Lama :</strong> {{ $pengaju->ms_lama }}</td>
                                    <td style="padding: 5px;" class="align-top"><strong>Baru :</strong> {{ $pengaju->ms_baru }}</td>
                    			</tr>
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Unit Kerja</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                                    <td style="padding: 5px;" class="align-top">{{ $pengaju->u_kerja }}</td>
                    			</tr>
								<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Masa Penilaian</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                                    <td style="padding: 5px;" class="align-top">{{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->str_nilai)->format('d-m-Y') }} / {{ Carbon\Carbon::createFromFormat('Y-m-d', $pengaju->end_nilai)->format('d-m-Y') }}</td>
									
                    			</tr>
								<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Tahun Penyusunan</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                                    <td style="padding: 5px;" class="align-top">{{ $pengaju->thn_susun }}</td>
                    			</tr>
								<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Periode Penyerahan</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                                    <td style="padding: 5px;" class="align-top">Periode {{ $pengaju->str_serah }} / {{ $pengaju->end_serah }}</td>
                    			</tr>
                    		</table>
                    	</div>
                    </div>
                    <div class="row mt-3 mb-1">
                        <div class="col-12 text-center">
							@if(auth()->user()->role == 'user')
							<a href="{{ url('/edit_pj/' . $id) }}" class="btn btn-flat btn-primary font-weight-bold"><i class="fa fa-edit"></i>&nbsp;&nbsp;Ubah Data</a>
                            <a href="{{ url('/download_pj/' . $id) }}" class="btn btn-flat btn-success font-weight-bold"><i class="fa fa-download"></i>&nbsp;&nbsp;Unduh Pengajuan</a>
							@else
							<a href="{{ url('/download_pj/' . $id) }}" class="btn btn-flat btn-success font-weight-bold"><i class="fa fa-download"></i>&nbsp;&nbsp;Unduh Pengajuan</a>
							@endif
                        </div>
                    </div>
                </div>
            </div>  
        </div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
    @if ($message = Session::get('batal_pesan'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    )
    @endif    

	@if ($message = Session::get('tersimpan'))
	swal(
	    "Berhasil!",
	    "{{ $message }}",
	    "success"
	)
	@endif

	@if ($message = Session::get('terubah_status'))
	swal(
	    "Berhasil!",
	    "{{ $message }}",
	    "success"
	)
	@endif

    $(document).on('click', '.pdf-btn', function(e){
        e.preventDefault();
        var id = $('.id_pdf').val();
        window.open("{{ url('/pdf_pelanggan') }}/" + id, '_blank');
    });

    $(document).on('click', '.filter-status-kilo-btn', function(e){
        e.preventDefault();
        var searchTerm = $(this).attr('data-status').toLowerCase();
        $(".body-table-kilo tr").each(function(){
          var lineStr = $(this).text().toLowerCase();
          if(lineStr.indexOf(searchTerm) == -1){
            $(this).hide();
          }else{
            $(this).show();
          }
        });
    });

    $(document).on('click', '.filter-status-satu-btn', function(e){
        e.preventDefault();
        var searchTerm = $(this).attr('data-status').toLowerCase();
        $(".body-table-satu tr").each(function(){
          var lineStr = $(this).text().toLowerCase();
          if(lineStr.indexOf(searchTerm) == -1){
            $(this).hide();
          }else{
            $(this).show();
          }
        });
    });

	$('.status-select-kilo').change(function() {
		var id = $('.id_invoice_kilo').val();
		var status = $(this).val();
		$.ajax({
			url: "{{ url('/update_status_transaksi') }}/" + id + "/" + status,
			method: "GET",
			success:function(data){
				if(data != ''){
                    window.open("{{ url('/detail_pelanggan_member/' . $id) }}", "_self");
                }
			}
		});
	});

	$('.status-select-satu').change(function() {
		var id = $('.id_invoice_satu').val();
		var status = $(this).val();
		$.ajax({
			url: "{{ url('/update_status_transaksi') }}/" + id + "/" + status,
			method: "GET",
			success:function(data){
				if(data != ''){
                    window.open("{{ url('/detail_pelanggan_member/' . $id) }}", "_self");
                }
			}
		});
	});

	$(document).on('click', '.btn-lihat-kilo', function(e){
		e.preventDefault();
		var id = $(this).attr('data-transaksi');
		$.ajax({
			url: "{{ url('/lihat_paket_kilo_member') }}/" + id,
			method: "GET",
			success:function(response){
                $('.id_pdf').val(response.transaksis.id);
				$('.id_invoice_kilo').val(response.transaksis.id);
				$('.modal_outlet').html(response.transaksis.nama_outlet);
				$('.modal_kd_invoice').html(response.transaksis.kd_invoice);
				$('.modal_tgl_pemberian').html(moment(response.transaksis.tgl_pemberian).format('DD MMMM YYYY'));
				$('.modal_tgl_selesai').html(moment(response.transaksis.tgl_selesai).format('DD MMMM YYYY'));
				if(response.transaksis.tgl_bayar != null){
					$('.modal_tgl_bayar').html(moment(response.transaksis.tgl_bayar).format('DD MMMM YYYY'));
				}else{
					$('.modal_tgl_bayar').html('-');
				}
				if(response.transaksis.diskon != null){
					$('.modal_diskon').html(response.transaksis.diskon + ' %');
				}else{
					$('.modal_diskon').html('-');
				}
				if(response.transaksis.pajak != null){
					$('.modal_pajak').html(response.transaksis.pajak + ' %');
				}else{
					$('.modal_pajak').html('-');
				}
				$('.modal_ket_bayar').html(response.transaksis.ket_bayar);
				$('.modal_pegawai').html(response.transaksis.nama_pegawai);
				if(response.transaksis.status != 'diambil' && response.transaksis.status != 'diantar')
                {
                    $('.batal-btn-kilo').prop('hidden', false);
                    $('.status-select-kilo').prop('hidden', false);
                    $('.status-select-kilo').val(response.transaksis.status).change();
                }else{
                    $('.batal-btn-kilo').prop('hidden', true);
                    $('.status-select-kilo').prop('hidden', true);
                }
				var isi_paket_kilo = "";
				for(var i = 0; i < response.checkout_kilos.length; i++){
	            	var no = i + 1;
	            	isi_paket_kilo += '<tr><th>'+no+'</th><th>'+response.checkout_kilos[i].nama_paket+'</th><td>'+response.checkout_kilos[i].berat_barang+'</td><td>Rp. '+parseInt(response.checkout_kilos[i].harga_paket_satuan).toLocaleString()+'</td><td>Rp. '+parseInt(response.checkout_kilos[i].harga_paket_total).toLocaleString()+'</td></tr>';
	            }
	            $('.isi_paket_kilo').html(isi_paket_kilo);
	            $('.modal_total_paket').html('Rp. ' + parseInt(response.paket_kilo_total).toLocaleString());
                if(response.checkout_kilo.antar_jemput_paket == 1 || response.checkout_kilo.harga_antar != 0){
                    $('.ket_antar').prop('hidden', false);
                    $('.modal_harga_antar').html('Rp. ' + parseInt(response.checkout_kilo.harga_antar).toLocaleString());
                }else{
                    $('.ket_antar').prop('hidden', true);
                    $('.modal_harga_antar').html('');
                }
	            $('.modal_total').html('Rp. ' + parseInt(response.checkout_kilo.harga_total).toLocaleString());
	            $('.modal_metode_pembayaran').html(response.checkout_kilo.metode_pembayaran);
			}
		});
	});

	$(document).on('click', '.btn-lihat-satu', function(e){
		e.preventDefault();
		var id = $(this).attr('data-transaksi');
		$.ajax({
			url: "{{ url('/lihat_paket_satu_member') }}/" + id,
			method: "GET",
			success:function(response){
                $('.id_pdf').val(response.transaksis.id);
				$('.id_invoice_satu').val(response.transaksis.id);
				$('.modal_outlet').html(response.transaksis.nama_outlet);
				$('.modal_kd_invoice').html(response.transaksis.kd_invoice);
				$('.modal_tgl_pemberian').html(moment(response.transaksis.tgl_pemberian).format('DD MMMM YYYY'));
                if(response.transaksis.tgl_selesai != null){
                    $('.modal_tgl_selesai').html(moment(response.transaksis.tgl_selesai).format('DD MMMM YYYY'));
                }else{
                    $('.modal_tgl_selesai').html('-');
                }
				if(response.transaksis.tgl_bayar != null){
					$('.modal_tgl_bayar').html(moment(response.transaksis.tgl_bayar).format('DD MMMM YYYY'));
				}else{
					$('.modal_tgl_bayar').html('-');
				}
				if(response.transaksis.diskon != null){
					$('.modal_diskon').html(response.transaksis.diskon + ' %');
				}else{
					$('.modal_diskon').html('-');
				}
				if(response.transaksis.pajak != null){
					$('.modal_pajak').html(response.transaksis.pajak + ' %');
				}else{
					$('.modal_pajak').html('-');
				}
				$('.modal_ket_bayar').html(response.transaksis.ket_bayar);
				$('.modal_pegawai').html(response.transaksis.nama_pegawai);
                if(response.transaksis.status != 'diambil' && response.transaksis.status != 'diantar')
                {
                    $('.batal-btn-satu').prop('hidden', false);
                    $('.status-select-satu').prop('hidden', false);
                    $('.status-select-satu').val(response.transaksis.status).change();
                }else{
                    $('.batal-btn-satu').prop('hidden', true);
                    $('.status-select-satu').prop('hidden', true);
                }
				var isi_paket_satu = "";
				for(var i = 0; i < response.checkout_satus.length; i++){
	            	var no = i + 1;
                    var ket_barang = "";
                    if(response.checkout_satus[i].ket_barang == null)
                    {
                        ket_barang = "-";
                    }else{
                        ket_barang = response.checkout_satus[i].ket_barang;
                    }
	            	isi_paket_satu += '<tr><th>'+no+'</th><th>'+response.checkout_satus[i].nama_barang+'</th><td>'+ket_barang+'</td><td>'+response.checkout_satus[i].jumlah_barang+'</td><td>Rp. '+parseInt(response.checkout_satus[i].harga_barang_satuan).toLocaleString()+'</td><td>Rp. '+parseInt(response.checkout_satus[i].harga_barang_total).toLocaleString()+'</td></tr>';
	            }
	            $('.isi_paket_satu').html(isi_paket_satu);
	            $('.modal_total_paket').html('Rp. ' + parseInt(response.paket_satu_total).toLocaleString());
                if(response.checkout_satu.harga_antar != 0){
                    $('.ket_antar').prop('hidden', false);
                    $('.modal_harga_antar').html('Rp. ' + parseInt(response.checkout_satu.harga_antar).toLocaleString());
                }else{
                    $('.ket_antar').prop('hidden', true);
                    $('.modal_harga_antar').html('');
                }
	            $('.modal_total').html('Rp. ' + parseInt(response.checkout_satu.harga_total).toLocaleString());
	            $('.modal_metode_pembayaran').html(response.checkout_satu.metode_pembayaran);
			}
		});
	});

	$(document).on('click', '.kiloan_btn', function() {
		$(this).addClass('btn_active');
        $('#filterStatusSatu').prop('hidden', true);
        $('#filterStatusKilo').prop('hidden', false);
		$('#maxRowsSatu').val(9999).change();
		$('#maxRowsSatu').prop('hidden', true);
		$('#maxRowsKilo').prop('hidden', false);
    	$('.satuan_btn').removeClass('btn_active');
    	$('#table-paket-kiloan').prop('hidden', false);
    	$('#table-paket-satuan').prop('hidden', true);
    	$('.pagination-kilo').prop('hidden', false);
    	$('.pagination-satu').prop('hidden', true);
	});

	$(document).on('click', '.satuan_btn', function() {
		$(this).addClass('btn_active');
        $('#filterStatusSatu').prop('hidden', false);
        $('#filterStatusKilo').prop('hidden', true);
		$('#maxRowsKilo').val(9999).change();
		$('#maxRowsKilo').prop('hidden', true);
		$('#maxRowsSatu').prop('hidden', false);
    	$('.kiloan_btn').removeClass('btn_active');
    	$('#table-paket-kiloan').prop('hidden', true);
    	$('#table-paket-satuan').prop('hidden', false);
    	$('.pagination-kilo').prop('hidden', true);
    	$('.pagination-satu').prop('hidden', false);
	});

    $(document).on('click', '.batal-btn-kilo', function(e){
        e.preventDefault();
        var id = $('.id_invoice_kilo').val();
        $.ajax({
            url: "{{ url('/hapus_pesanan_kilo') }}/" + id,
            method: "GET",
            success:function(data){
                window.open("{{ url('/detail_pelanggan_member/' . $id) }}", "_self");
            }
        });
    });

    $(document).on('click', '.batal-btn-satu', function(e){
        e.preventDefault();
        var id = $('.id_invoice_satu').val();
        $.ajax({
            url: "{{ url('/hapus_pesanan_satu') }}/" + id,
            method: "GET",
            success:function(data){
                window.open("{{ url('/detail_pelanggan_member/' . $id) }}", "_self");
            }
        });
    });

	var table1 = "#table-paket-kiloan";
	var table2 = "#table-paket-satuan";
	$('#maxRowsKilo').on('change', function(){
		$('.pagination_kilo').html('');
		var trnum = 0;
		var maxRows = parseInt($(this).val());
		var totalRows = $(table1+' tbody tr').length;
		$(table1+' tr:gt(0)').each(function(){
			trnum++;
			if(trnum > maxRows){
				$(this).hide();
			}
			if(trnum <= maxRows){
				$(this).show();
			}
		});
		if(totalRows > maxRows){
			var pagenum = Math.ceil(totalRows/maxRows);
			for(var i = 1; i <= pagenum;){
				$('.pagination_kilo').append('<li class="page-item" data-page="'+i+'">\<span class="page-link">'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show();
			}
			$('.pagination_kilo').addClass('pagination');
		}else{
			$('.pagination_kilo').removeClass('pagination');
		}
		$('.pagination_kilo li:first-child').addClass('active');
		$('.pagination_kilo li').on('click', function(){
			var pageNum = $(this).attr('data-page');
			var trIndex = 0;
			$('.pagination_kilo li').removeClass('active');
			$(this).addClass('active');
			$(table1+' tr:gt(0)').each(function(){
				trIndex++;
				if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows))
				{
					$(this).hide();
				}else{
					$(this).show();
				}
			});
		});
	});

	$('#maxRowsSatu').on('change', function(){
		$('.pagination_satu').html('');
		var trnum = 0;
		var maxRows = parseInt($(this).val());
		var totalRows = $(table2+' tbody tr').length;
		$(table2+' tr:gt(0)').each(function(){
			trnum++;
			if(trnum > maxRows){
				$(this).hide();
			}
			if(trnum <= maxRows){
				$(this).show();
			}
		});
		if(totalRows > maxRows){
			var pagenum = Math.ceil(totalRows/maxRows);
			for(var i = 1; i <= pagenum;){
				$('.pagination_satu').append('<li class="page-item" data-page="'+i+'">\<span class="page-link">'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show();
			}
			$('.pagination_satu').addClass('pagination');
		}else{
			$('.pagination_satu').removeClass('pagination');
		}
		$('.pagination_satu li:first-child').addClass('active');
		$('.pagination_satu li').on('click', function(){
			var pageNum = $(this).attr('data-page');
			var trIndex = 0;
			$('.pagination_satu li').removeClass('active');
			$(this).addClass('active');
			$(table2+' tr:gt(0)').each(function(){
				trIndex++;
				if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows))
				{
					$(this).hide();
				}else{
					$(this).show();
				}
			});
		});
	});

	$(function(){
		$('#table-paket-kiloan tr:eq(0)').prepend('<th>No</th>');
		$('#table-paket-satuan tr:eq(0)').prepend('<th>No</th>');
		var id1 = 0;
		var id2 = 0;
		$('#table-paket-kiloan tr:gt(0)').each(function(){
			id1++;
			$(this).prepend('<th>'+id1+'</th>');
		});
		$('#table-paket-satuan tr:gt(0)').each(function(){
			id2++;
			$(this).prepend('<th>'+id2+'</th>');
		});
	});
</script>
@endsection
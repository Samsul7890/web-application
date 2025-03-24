<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>
  
	<?php require_once('application/views/template/navbar.php'); ?>

	<div class="main-content">
		<div class="main-content-inner">

			<div class="page-content">
			<?php require_once('application/views/template/ace_setting.php'); ?>

				<form action="<?php echo site_url('Form_order/add_form');?>" method="post">
					<div class="row">
					<h3 class="header smaller lighter blue">Buat Form Order</h3>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-sm-6">
									<div class="panel panel-primary">
										<div class="panel-heading"><i class='fa fa-file-text-o fa-fw'></i> Informasi Form Order</div>
										<div class="panel-body">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-4 control-label">ID Form Order</label>
													<div class="col-sm-8">
														<input type='text' name='id_form' readonly class='form-control input-sm' id='id_form' value="<?= $id_form?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Tanggal</label>
													<div class="col-sm-8">
													<input name='tanggal'id='tanggal' type='hidden' readonly value="<?= $tanggal?>"></input>
														<input type='text'  class='form-control input-sm' readonly value="<?php
													$tanggal = explode(" ", $tanggal);
													echo $tanggal[1] . ', ' . date_indo($tanggal[0]);
													?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Deskprint</label>
													<div class="col-sm-8">
														<input type='text' name='deskprint' readonly class='form-control input-sm' id='deskprint' value="<?= $deskprint?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="panel panel-primary" id='PelangganArea'>
										<div class="panel-heading"><i class='fa fa-user'></i> Informasi Pelanggan</div>
										<div class="panel-body">
											<div class="form-group">
												<label>Pelanggan</label>
												<a href="#modal-form" role="button" class="blue pull-right" data-toggle="modal" >Tambah Baru ?</a>
												<input list="data_pelanggan" type="text" name="nama_pelanggan" id="nama_pelanggan" required>

											</div>

											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-4 control-label">Telp / HP</label>
													<div class="col-sm-8">
														<div id='telp'><i>Tidak ada</i></div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Id Pelanggan</label>
													<div class="col-sm-8">
														<div id='id_pelanggan'><i>Tidak ada</i></div>
													</div>
												</div>
											</div>
										</div>
										<datalist id="data_pelanggan">
											<?php foreach ($option as $row){ ?><option value="<?php echo $row['nama_pelanggan'];?>"><?php echo $row['nama_pelanggan'];?></option><?php } ?>
										</datalist>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="transform-origin: 0 0px " class="row">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class='col-sm-12'>
									<table style="transform-origin: 0 0" class='table table-bordered' id='TabelTransaksi'>
										<thead>
											<tr >
												<th style="width: 35px">
													No.
												</th>
												<th style='width:150px;'>Nama File</th>
												<th>Bahan</th>
												<th style='width:60px;'>Panjang</th>
												<th style='width:60px;'>Tinggi</th>
												<th style='width:60px;'>Qty</th>
												<th style='width:60px;'>Total</th>
												<th style='width:450px;'>Finishing</th>
												<th style='width:35px;'></th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>
									<datalist id="data_bahan">
											<?php foreach ($bahan as $row){ ?><option value="<?php echo $row['nama_bahan'];?>"><?php echo $row['nama_bahan'];?></option><?php } ?>
									</datalist>
									
										<button style="margin-top:- 20px;float: right;" id='BarisBaru' class='btn btn-default'><i class='fa fa-plus fa-fw'></i> Baris Baru </button>
										
									
									<div class='row'>
										<div class='col-sm-5'>
											<div class="form-horizontal">
												<div class='row'>
													<div class='col-sm-6'>
													
														<button type='submit' class='btn btn-primary btn-block' id='Simpann'>
															<i class='fa fa-floppy-o'></i> Simpan 
														</button>
												
													</div>
													<div class='col-sm-6'>
													
														<button type='reset' class='btn btn-danger btn-block '>
															<i class='ace-icon glyphicon glyphicon-remove '></i> Reset
														</button>
												
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div id="modal-form" class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="blue bigger">Tambah Pelanggan Baru</h4>
							</div>
							<form action="<?php echo site_url('Pelanggan/pelanggan_create');?>" method="post">
							<div class="modal-body">
								<div class="row">
								<div class="col-sm-8">

									<div class="form-group">
										<div class="space-8"></div>
										
										<div class="form-group">
											<label for="form-field-username">Nama Pelanggan</label>

											<div>
												<input type="text" name='nama_pelanggan' id="nama_pelanggan" placeholder="Nama" required />
											</div>
										</div>

										<div class="space-8"></div>

										<div class="form-group">
											<label for="form-field-first">No Telpon</label>

											<div>
												<input type="number" name="telp" id="telp" placeholder="No Telepon"/>
											</div>
										</div>
										
									</div>
								</div>
								</div>
							</div>

							<div class="modal-footer">
								<button class="btn btn-sm" data-dismiss="modal">
									<i class="ace-icon fa fa-times"></i>
									Cancel
								</button>

								<button type="submit" class="btn btn-sm btn-primary">
									<i class="ace-icon fa fa-check"></i>
									Save
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
	<script src="<?= base_url() ?>assets/js/jquery.datetimepicker.js" type="text/javascript"></script>
	
 <script>
$(document).ready(function(){
	for(B=1; B<=1; B++){
		BarisBaru();
	}

	$('#nama_pelanggan').change(function(){
		if($(this).val() !== '')
		{
			$.ajax({
				url: "<?php echo site_url('Form_order/auto_pelanggan'); ?>",
				type: "POST",
				cache: false,
				data: "nama_pelanggan="+$(this).val(),
				dataType:'json',
				success: function(json){
					$('#telp').html(json.telp);
					$('#id_pelanggan').html(json.id_pelanggan);
				}
			});
		}
		else
		{
			$('#telp').html('<small><i>Tidak ada</i></small>');
 	
		}
	});




	$('#BarisBaru').click(function(){
		BarisBaru();
	});
	$("#TabelTransaksi tbody").find('input[type=text],textarea,select').filter(':visible:first').focus();

});

	function BarisBaru()
	{
		var Nomor = $('#TabelTransaksi tbody tr').length + 1;
		var Baris = "<tr>";
			Baris += "<td>"+Nomor+"</td>";
			Baris += "<td><input type='text' id='nama_file' name='nama_file[]' required></td>";
			Baris += "<td><input class='col-xs-12' list='data_bahan' type='text' id='nama_bahan' name='nama_bahan[]' required></td>";
			Baris += "<td><input class='input-small' type='float' id='panjang' onkeyup = 'ftotal();' name='panjang[]' value='' required placeholder='Input Angka!'></td>";
			Baris += "<td><input class='input-small' type='float' id='tinggi' onkeyup = 'ftotal();' name='tinggi[]' value='' required placeholder='Input Angka!'></td>";
			Baris += "<td><input class='input-small' type='number' id='qty' onkeyup = 'ftotal();' name='qty[]' value='' required placeholder='Input Angka!'></td>";
			Baris += "<td><input class='input-small' type='float' name='total[]' required></td>";
			Baris += "<td><input class='col-xs-12' type='text' name='finishing[]' required></td>";
			Baris += "<td><button class='btn btn-sm btn-danger' id='HapusBaris'><i class='fa fa-times' style='color:fff;'></i></button></td>";
			Baris += "</tr>";

		$('#TabelTransaksi tbody').append(Baris);

		$('#TabelTransaksi tbody tr').each(function(){
			$(this).find('td:nth-child(2) input').focus();
		});
	}
	
	$(document).on('click', '#HapusBaris', function(e){
		e.preventDefault();
		$(this).parent().parent().remove();

		var Nomor = 1;
		$('#TabelTransaksi tbody tr').each(function(){
			$(this).find('td:nth-child(1)').html(Nomor);
			Nomor++;
		});
	});

	$(document).on('keyup', '#qty',function() {
		var Indexnya = $(this).parent().parent().index();
		var P = $('#TabelTransaksi tbody tr:eq('+Indexnya+') td:nth-child(4) input').val();
		var T = $('#TabelTransaksi tbody tr:eq('+Indexnya+') td:nth-child(5) input').val();
		var Q = $(this).val();
		var result = (parseFloat (P)) * (parseFloat (T)) * (parseFloat (Q));

		$('#TabelTransaksi tbody tr:eq('+Indexnya+') td:nth-child(7) input').val(result);
		
	});

</script>
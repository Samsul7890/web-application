
<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>
	<?php $level = $this->session->userdata('level'); ?>
	<?php require_once('application/views/template/navbar.php'); ?>

	<div class="main-content">
		<div class="main-content-inner">

			<div class="page-content">
			<?php require_once('application/views/template/ace_setting.php'); ?>


				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Detail Pesanan</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div>
									<table>
										<tr>
											<td>Nama Pemesan</td>
											<td> :</td>
											<td>&nbsp;
												<?= $transaksi['nama_pelanggan'] ?>
											</td>
										</tr>
										<tr>
											<td>Nomor HP</td>
											<td> :</td>
											<td>&nbsp;
												<?= $transaksi['telp'] ?>
											</td>
										</tr>
										<tr>
											<td>Waktu Pemesanan</td>
											<td> :</td>
											<td>&nbsp;
												<?php
												$tanggal = explode(" ", $transaksi['tanggal']);
												echo $tanggal[1] . ', ' . date_indo($tanggal[0]);
												?>
											
											</td>

										</tr>
										<tr>
											<td>Status Pemesanan</td>
											<td> :</td>
											<td>&nbsp;
												<?= $transaksi['status'] ?>
											</td>
										</tr>
									</table>
									<br>
									<br>
								</div>
									<div id="home" class="tab-pane in active">
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="hidden">ID Pesanan</th>
													<th>Mesin Cetak</th>
													<th class="hidden-480">Nama File</th>
													<th class="hidden-480">Nama Bahan </th>
													<th>Panjang</th>
													<th>Tinggi</th>
													<th>Kuantitas</th>
													<th>Finishing</th>
													<th>Total</th>
													<th>Status</th>
													<?php if ($transaksi['status'] !== 'Selesai'){?>
													<th class="center">
														<?php if ($level === 'Administrator' || $level === 'Kasir' || $level === 'Deskprint' ): ?>
														<a href="#modal-form" role="button" data-toggle="modal" ><i class="glyphicon glyphicon-plus"></i></a>
														<?php endif ?>
													</th>
													<?php }?>
												</tr>
											</thead>

											<tbody>
												<?php
												$no = 1;
												foreach ($pesanan as $key=>$value):
													//if ($value['status'] == 'Belum Pembayaran'):
													?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td class="hidden"><?=$value['id_pesanan']?></td>
														<td><?=$value['mesin_cetak']?></td>
														<td><?=$value['nama_file']?></td>
														<td><?=$value['nama_bahan']?></td>
														<td><?=$value['panjang']?></td>
														<td><?=$value['tinggi']?></td>
														<td><?=$value['qty']?></td>
														<td><?=$value['finishing']?></td>
														<td><?=$value['total']?></td>
														<td><?=$value['status_cetak']?></td>
														<?php if ($transaksi['status'] !== 'Selesai'){?>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a href="<?=base_url('Form_order/edit_detail/'.$value['id_pesanan'])?>" class="tooltip-success"  data-placement="top" title="Edit">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<?php if ($level === 'Administrator' || $level === 'Kasir' || $level === 'Deskprint' ): ?>
																<a onclick="return confirm ('Yakin Data <?=$value['nama_file'] ?> Ingin Di Hapus.?');" class="red"  href="<?php echo base_url('Form_order/delete_detail/'.$value['id_pesanan']); ?>">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
																<?php endif ?>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?=base_url('Form_order/edit_detail/'.$value['id_pesanan'])?>" class="tooltip-success"  data-placement="top" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<?php if ($level === 'Administrator' || $level === 'Kasir' || $level === 'Deskprint' ): ?>
																		<li>
																			<a onclick="return confirm ('Yakin Data <?=$value['nama_file'] ?> Ingin Di Hapus.?');" class="red"  href="<?php echo base_url('Form_order/delete_detail/'.$value['id_pesanan']); ?>">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<?php endif ?>
																	</ul>
																</div>
															</div>
														</td>
														<?php }?>
													</tr>
													<?php
													$no++;
													//endif;
												endforeach;
												?>
											</tbody>
										</table>
									</div> 
									<script type="text/javascript">
									
									$total;
									$arr=[];
									$unique = array_unique($arr);

									foreach ($total as $key => $value){
										echo $value['id_bahan'];
										$arr.push ($value['id_bahan']);
									}
									
									
									

									</script>

							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
				<div id="modal-form" class="modal" tabindex="-1">
					<div class="modal-dialog" style="width: 1150px">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="blue bigger">Tambah Pelanggan Baru</h4>
							</div>
							<form action="<?php echo site_url('Form_order/add_pesanan/'.$transaksi['id_form']);?>" method="post">
							<div class="modal-body">
								<div class="row">
								<div class="col-sm-12">

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
												<th style='width:165px;'>Finishing</th>
												<th style='width:35px;'></th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>
									<datalist id="data_bahan">
											<?php foreach ($bahan as $row){ ?><option value="<?php echo $row['nama_bahan'];?>"><?php echo $row['nama_bahan'];?></option><?php } ?>
									</datalist>
									<input type="hidden" name="id_form" value="<?= $transaksi['id_form'] ?>"></input>
									<input type="hidden" name="nama_pelanggan"></input>
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

							</form>
						</div>
					</div>
				</div>
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
<script>
$(document).ready(function(){
	for(B=1; B<=1; B++){
		BarisBaru();
	}
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
			Baris += "<td><input class='input-large' list='data_bahan' type='text' id='nama_bahan' name='nama_bahan[]' required></td>";
			Baris += "<td><input class='input-small' type='float' id='panjang' onkeyup = 'ftotal();' name='panjang[]' value='' required placeholder='Input Angka!'></td>";
			Baris += "<td><input class='input-small' type='float' id='tinggi' onkeyup = 'ftotal();' name='tinggi[]' value='' required placeholder='Input Angka!'></td>";
			Baris += "<td><input class='input-small' type='number' id='qty' onkeyup = 'ftotal();' name='qty[]' value='' required placeholder='Input Angka!'></td>";
			Baris += "<td><input class='input-small' type='float' id='total' name='total[]' value='' required></td>";
			Baris += "<td><input class='input-medium' type='text' name='finishing[]' required></td>";
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
	function ftotal() {
		var P = document.getElementById('panjang').value;
		var T = document.getElementById('tinggi').value;
		var Q = document.getElementById('qty').value;
		var result = (parseFloat (P)) * (parseFloat (T)) * (parseFloat (Q));
		if (!isNaN(result)){
			document.getElementById('total').value=result;
		}
	}


</script>
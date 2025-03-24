<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<?php require_once('application/views/template/navbar.php'); ?>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>

					<li>
						<a href="#">Tables</a>
					</li>
					<li class="active">Simple &amp; Dynamic</li>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
			</div>

			<div class="page-content">
			<?php require_once('application/views/template/ace_setting.php'); ?>
				<div class="page-header">
					<h1>
						Tables
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							Static &amp; Dynamic Tables
						</small>
					</h1>
				</div><!-- /.page-header -->

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Data Pesanan</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div>
									<table>
										<tr>
											<td>Id Form Order</td>
											<td> :</td>
											<td>&nbsp;
												<?= $transaksi['id_form_pesan'] ?>
											</td>
										</tr>
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
									</table>
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
												<th>Mesin Cetak</th>
												<th class="hidden-480">Nama File</th>
												<th class="hidden-480">Nama Bahan </th>
												<th>Panjang</th>
												<th>Tinggi</th>
												<th>Kuantitas</th>
												<th>Finishing</th>
												<th>Total</th>
												<th>Status</th>
												<th></th>
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
															<input type="hidden" class="ace" value="<?=$value['id_pesanan']?>" />
															<input type="hidden" class="ace" value="<?=$value['id_form_pesan']?>" />
															<span class="lbl"></span>
														</label>
													</td>
													<td><?=$value['mesin_cetak']?></td>
													<td><?=$value['nama_file']?></td>
													<td><?=$value['nama_bahan']?></td>
													<td><?=$value['panjang']?></td>
													<td><?=$value['tinggi']?></td>
													<td><?=$value['qty']?></td>
													<td><?=$value['finishing']?></td>
													<td><?=$value['total']?></td>
													<td><?=$value['status_cetak']?></td>
													<td>
														<div class="hidden-sm hidden-xs action-buttons">
															<a href="<?php echo base_url('Form_order/edit_detail/'.$value['id_pesanan']); ?>" id="edit_modal" class="tooltip-success" data-popup="tooltip" data-placement="top" title="Edit">
																<i class="ace-icon fa fa-pencil bigger-130"></i>
															</a>

															<a onclick="return confirm ('Yakin Data <?=$value['nama_file'] ?> Ingin Di Hapus.?');" class="red"  href="<?php echo base_url('Form_order/delete_detail/'.$value['id_pesanan']); ?>">
																<i class="ace-icon fa fa-trash-o bigger-130"></i>
															</a>
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

																	<li>
																		<a  href="<?php echo base_url('Form_order/edit_detail/'.$value['id_pesanan']); ?>" id="edit_modal" class="tooltip-success" data-popup="tooltip" data-placement="top" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<?php
												$no++;
												//endif;
											endforeach;
											?>
										</tbody>
									</table>
								</div> 
							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
<div class="modal fade" id="m_detail" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Kategori Produk
				</div>
			</div>
			<div class="modal-body">
				<form name="edit_detail" id="edit_detail" action="#" method="post">
					<div class="space-4"></div>

					<div class="form-group">
						<label for="form-field-username">Nama Pelanggan</label>

						<div>
							<input type="text" id="mesin_cetak" placeholder="Nama" required />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label for="form-field-first">No Telpon</label>

						<div>
							<input type="number" id="nama_file" placeholder="No Telepon"/>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-white btn-info btn-bold" type="submit">
					<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-minus-circle"></i> Tutup</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	$('#edit_modal').click(function(){
			$.ajax({
				url: "<?php echo site_url('Form_order/edit_detail'); ?>",
				type: "POST",
				cache: false,
				data: "id_pesanan="+$(this).val(),
				dataType:'json',
				success: function(json){
					$('#mesin_cetak').html(json.mesin_cetak);
					$('#nama_file').html(json.nama_file);
					$('#nama_bahan').html(json.nama_bahan);
					$('#panjang').html(json.panjang);
					$('#tinggi').html(json.tinggi);
					$('#qty').html(json.qty);
					$('#total').html(json.total);
					$('#finishing').html(json.finishing);
					$('#status_cetak').html(json.status_cetak);
				}
			});
		});
	});
</script>
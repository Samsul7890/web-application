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
								<h3 class="header smaller lighter blue">Edit Form Order</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div>

									<form action="<?php echo site_url('Form_order/update');?>" method="post">
									<div class="form-group">
										<label>No Forrm Order</label> 
										<input type="text" class="form-control" name="id_form" Readonly value="<?= $data['id_form'] ?>" placeholder="Nama Pelanggan"> 
									</div> 

									<div class="form-group">
										<label for="form-field-select-3">Nama Pelanggan</label> 
										<?php if ($level === 'Administrator' || $level === 'Kasir' || $level === 'Deskprint') { ?>
										<select name="id_pelanggan" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
											<option value="<?= $data['id_pelanggan'] ?>"><?= $data['nama_pelanggan'] ?></option>
											<?php 
												foreach ($option as $row){
											?>
											<option value="<?php echo $row['id_pelanggan'];?>"><?php echo $row['nama_pelanggan'];?></option>
											<?php
												}
											?>
										</select>
										<?php } else {?>
										<select name="id_pelanggan" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
											<option value="<?= $data['id_pelanggan'] ?>"><?= $data['nama_pelanggan'] ?></option>
										</select>
										<?php } ?>
									</div> 

									<div class="form-group">
										<label>Tanggal</label> 
										<input type="text" class="form-control" name="tanggal" Readonly value="<?= $data['tanggal'] ?>" placeholder="Tanggal"> 
									</div> 

									<div class="form-group">
										<label>Deskprint</label> 
										<input type="text" class="form-control" name="deskprint" Readonly value="<?= $data['deskprint'] ?>" placeholder="Deskprint"> 
									</div> 

									<div class="form-group">
										<label>Status</label> 
										<SELECT name="status">
										<?php 
										if($data['status'] == 'Belum Pembayaran'){
										?>
											<option value="Belum Pembayaran" selected >Belum Pembayaran</option>
											<?php if ($level === 'Administrator' || $level === 'Kasir'): ?>
											<option value="Sudah Pembayaran">Sudah Pembayaran</option>
											<?php endif ?>
											<option value="Hold">Hold</option>
											
										<?php 	
										}elseif ($data['status'] == 'Sudah Pembayaran') {
										?>	
											<?php if ($level === 'Administrator' || $level === 'Kasir'): ?>
											<option value="Belum Pembayaran"  >Belum Pembayaran</option>
											<?php endif ?>
											<option value="Sudah Pembayaran" selected >Sudah Pembayaran</option>
											<?php if ($level === 'Administrator' || $level === 'Kasir' || $level === 'Deskprint'): ?>
											<option value="Hold">Hold</option>
											<?php endif ?>
											<option value="Selesai">Selesai</option>
										<?php
										}elseif ($data['status'] == 'Hold'){
										?>
											<option value="Belum Pembayaran"  >Belum Pembayaran</option>
											<?php if ($level === 'Administrator' || $level === 'Kasir'): ?>
											<option value="Sudah Pembayaran">Sudah Pembayaran</option>
											<?php endif ?>
											<option value="Hold" selected>Hold</option>
										<?php	
										}
										?>
										</SELECT>
									</div> 
									
									<input type="hidden"  value="<?= $data['id_form'] ?>"> 
									<button onclick="return confirm('Apakah anda yakin untuk update?')" class="btn btn-white btn-info btn-bold" type="submit">
										<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>

									<a href = "<?php echo site_url('Form_order');?>" class="btn btn-white btn-default btn-round" type="reset">
										<i  class="fa fa-minus-circle"></i> Tutup</a>
									</form> 
								</div>
							</div>
						</div>

						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

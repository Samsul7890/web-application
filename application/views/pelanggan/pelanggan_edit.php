<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

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
								<h3 class="header smaller lighter blue">Edit Pelanggan</h3>
								
								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div>
								
									<form action="<?php echo site_url('Pelanggan/pelanggan_update');?>" method="post">
									<div class="form-group">
										<label>Nama Pelanggan</label> 
										<input type="text" class="form-control" name="nama_pelanggan" value="<?= $get_edit['nama_pelanggan'] ?>" placeholder="Nama Pelanggan"> 
									</div> 
									<div class="form-group">
										<label>Telepon </label> 
										<input type="number" class="form-control" name="telp" value="<?= $get_edit['telp'] ?>" placeholder="Telepon "> 
									</div> 

									
									
									<input type="hidden" name="id_pelanggan" value="<?= $get_edit['id_pelanggan'] ?>"> 
									<button onclick="return confirm('Apakah anda yakin untuk update?')" class="btn btn-white btn-info btn-bold" type="submit">
										<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>

									<a href = "<?php echo base_url('Pelanggan');?>" class="btn btn-white btn-default btn-round" type="reset">
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

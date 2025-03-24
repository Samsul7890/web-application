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
								<h3 class="header smaller lighter blue">Edit Bahan</h3>
								
								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div>
								
									<form action="<?php echo site_url('bahan/bahan_update');?>" method="post">
									<div class="form-group">
										<label>ID Bahan</label> 
										<input type="text" class="form-control" name="id_bahan" value="<?= $get_edit['id_bahan'] ?>" placeholder=" "> 
									</div> 
									<div class="form-group">
										<label>Mesin Cetak</label> 
										<select type="text" class="form-control" name="mesin_cetak" placeholder=" "> 
										<?php 
										if($get_edit['mesin_cetak'] == 'Outdoor'){
										?>
											<option selected >Outdoor</option>
											<option >Indoor</option>
											<option >Xerox</option>
											<option >Jasa</option>";
										<?php 	
										}elseif ($get_edit['mesin_cetak'] == 'Indoor') {
										?>
											<option  >Outdoor</option>
											<option selected >Indoor</option>
											<option >Xerox</option>
											<option >Jasa</option>";
										<?php 	
										}elseif ($get_edit['mesin_cetak'] == 'Xerox') {
										?>
											<option  >Outdoor</option>
											<option >Indoor</option>
											<option selected >Xerox</option>
											<option >Jasa</option>";
										<?php
										}else{
										?>
											<option  >Outdoor</option>
											<option >Indoor</option>
											<option >Xerox</option>
											<option selected >Jasa</option>";}
										
											
										<?php	
										}
										?>
										</select>
									</div> 
									<div class="form-group">
										<label>Nama bahan</label> 
										<input type="text" class="form-control" name="nama_bahan" value="<?= $get_edit['nama_bahan'] ?>" placeholder="Nama bahan"> 
									</div> 

									
									
									<input type="hidden" name="id" value="<?= $get_edit['id_bahan'] ?>"> 
									<button onclick="return confirm('Apakah anda yakin untuk update?')" class="btn btn-white btn-info btn-bold" type="submit">
										<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>

									<a href = "<?php echo base_url('bahan');?>" class="btn btn-white btn-default btn-round" type="reset">
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

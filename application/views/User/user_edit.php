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
								<h3 class="header smaller lighter blue">Edit Pengguna</h3>
								
								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div>
								
									<form action="<?php echo site_url('User/user_update/'.$get_edit['id_user']);?>" method="post">

									<input type="hidden" value="<?= $get_edit['id_user'] ?>"></input>
									<div class="form-group">
										<label class="control-label col-md-3">Nama Pengguna</label> 
										<input type="text" class="col-md-6" name="nama_pengguna" value="<?= $get_edit['nama_pengguna'] ?>" placeholder="Nama user"> 
										<div class=" row" ><br></div>
									</div> 
									<div class="form-group">
										<label class="control-label col-md-3">Password</label> 
										<input type="text" class="col-md-6" name="password" placeholder="Kosongkan Jika Password Tidak di Ganti"> 
										<div class=" row" ><br></div>
									</div> 
									<div class="form-group">
										<label class="control-label col-md-3">Level</label> 
										<select type="text" class="col-md-6" name="level" placeholder=" "> 
										<?php 
										if($get_edit['level'] == 'Administrator'){
										?>
											<option selected >Administrator</option>
											<option>Deskprint</option>
											<option>Outdoor</option>
											<option>Indoor</option>
											<option>Xerox</option>
											<option>Kasir</option>
										<?php 	
										}elseif ($get_edit['level'] == 'Deskprint') {
										?>
											<option>Administrator</option>
											<option selected >Deskprint</option>
											<option>Outdoor</option>
											<option>Indoor</option>
											<option>Xerox</option>
											<option>Kasir</option>
										<?php 	
										}elseif ($get_edit['level'] == 'Outdoor') {
										?>
											<option>Administrator</option>
											<option>Deskprint</option>
											<option selected >Outdoor</option>
											<option>Indoor</option>
											<option>Xerox</option>
											<option>Kasir</option>
										<?php
										}elseif ($get_edit['level'] == 'Indoor') {
										?>
											<option>Administrator</option>
											<option>Deskprint</option>
											<option>Outdoor</option>
											<option selected >Indoor</option>
											<option>Xerox</option>
											<option>Kasir</option>
										<?php
										}elseif ($get_edit['level'] == 'Kasir') {
										?>
											<option>Administrator</option>
											<option>Deskprint</option>
											<option>Outdoor</option>
											<option>Indoor</option>
											<option>Xerox</option>
											<option selected >Kasir</option>
										<?php
										}else{
										?>
											<option>Administrator</option>
											<option>Deskprint</option>
											<option>Outdoor</option>
											<option>Indoor</option>
											<option>Xerox</option>
											<option>Kasir</option>
										
											
										<?php	
										}
										?>
										</select>
									</div> 
									<input type="hidden" name="id" value="<?= $get_edit['id_user'] ?>"> 

								</div>
							</div>
						</div>
						<br> <br>
						<div class="row">
							<button onclick="return confirm('Apakah anda yakin untuk update?')" class="btn btn-white btn-info btn-bold" type="submit">
								<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>

							<a href = "<?php echo base_url('User');?>" class="btn btn-white btn-default btn-round" type="reset">
								<i  class="fa fa-minus-circle"></i> Tutup</a>
						</div>
						</form> 
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

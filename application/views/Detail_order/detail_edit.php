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
								<h3 class="header smaller lighter blue">Edit Detail</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								

								<div>
									<table>
										<tr>
											<td>ID Form</td>
											<td> :</td>
											<td>&nbsp;
												<?= $data['id_form'] ?>
											</td>
										</tr>
										<tr>
											<td>Nama Pemesan</td>
											<td> :</td>
											<td>&nbsp;
												<?= $data['nama_pelanggan'] ?>
											</td>
										</tr>
										<tr>
											<td>Waktu Pemesanan</td>
											<td> :</td>
											<td>&nbsp;
												<?php
												$tanggal = explode(" ", $data['tanggal']);
												echo $tanggal[1] . ', ' . date_indo($tanggal[0]);
												?>
											</td>
										</tr>
										<tr>
											<td>Status Pemesanan</td>
											<td> :</td>
											<td>&nbsp;
												<?= $data['status'] ?>
											</td>
										</tr>
									</table>
									<br>
									<form action="<?php echo site_url('Form_order/update_detail/'.$data['id_pesanan']);?>" method="post">
									<div class="form-group">
										<label>Nama File</label> 
										<input type="text" class="form-control" name="nama_file" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> value="<?= $data['nama_file'] ?>" placeholder="Nama Pelanggan">									
									</div> 
									<div class="form-group">
										<label for="form-field-select-3">Nama Bahan</label> 
										<select name="id_bahan" class="chosen-select form-control" id="form-field-select-3" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> data-placeholder="Choose a State...">
											<option value="<?= $data['id_bahan'] ?>"><?= $data['nama_bahan'] ?></option>
											<?php 
												foreach ($bahan as $row){
											?>
											<option value="<?php echo $row['id_bahan'];?>"><?php echo $row['nama_bahan'];?></option>
											<?php
												}
											?>
										</select>
									</div> 
 
									<div class="form-group">
										<label>Panjang</label> 
											<input type="text" class="form-control" name="panjang" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> value="<?= $data['panjang'] ?>" placeholder="Nama Pelanggan"> 
									</div> 

									<div class="form-group">
										<label>Tinggi</label> 
										<input type="text" class="form-control" name="tinggi" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> value="<?= $data['tinggi'] ?>" placeholder="tinggi"> 
									</div> 
									<div class="form-group">
										<label>Finishing</label> 
										<input type="text" class="form-control" name="finishing" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> value="<?= $data['finishing'] ?>" placeholder="finishing"> 
									</div> 
									<div class="form-group">
										<label>Kuantitas</label> 
										<input type="text" class="form-control" name="qty" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> value="<?= $data['qty'] ?>" placeholder="qty"> 
									</div> 
									<div class="form-group">
										<label>Total</label> 
										<input type="text" class="form-control" name="total" required <?=($level === "Outdoor" || $level === "Indoor" ||$level === "Xerox" ? "readonly" : "") ?> value="<?= $data['total'] ?>" placeholder="Total"> 
									</div> 

									<div class="form-group">
										<label>Status</label> 
										<SELECT name="status_cetak">
										<?php 
										if($data['status_cetak'] == 'Belum Cetak'){
										?>
											<option value="Belum Cetak" selected >Belum Cetak</option>
											<?php if ( $level === "Outdoor" || $level === "Indoor" ||$level === "Xerox"||$level === "Administrator"): ?>
											<option value="Sudah Cetak">Sudah Cetak</option>
											<?php endif ?>
											<option value="Hold">Hold</option>
											<?php if ($level === "Deskprint"||$level === "Administrator"): ?>
											<option value="Design"  >Design</option>
											<?php endif ?>
										<?php 	
										}elseif ($data['status_cetak'] == 'Design') {
										?>	
											<option value="Design" selected >Design</option>
											<?php if ($level === "Deskprint"||$level === "Administrator"): ?>
											<option value="Belum Cetak"  >Belum Cetak</option>
											<?php endif ?>
										<?php
										}elseif ($data['status_cetak'] == 'Sudah Cetak') {
										?>	
											<?php if ( $level === "Outdoor" || $level === "Indoor" ||$level === "Xerox"||$level === "Administrator"): ?>
											<option value="Belum Cetak"  >Belum Cetak</option>
											<?php endif ?>
											<option value="Sudah Cetak" selected >Sudah Cetak</option>
										<?php
										}else{
										?>
											<option value="Belum Cetak"  >Belum Cetak</option>
											<?php if ( $level === "Outdoor" || $level === "Indoor" ||$level === "Xerox"||$level === "Administrator"): ?>
											<option value="Sudah Cetak">Sudah Cetak</option>
											<?php endif ?>
											<option value="Hold" selected>Hold</option>"
										
											
										<?php	
										}
										?>
										</SELECT>
									</div> 
									<input type="hidden"  value="<?= $data['id_pesanan'] ?>"> 
									<input type="hidden"  value="<?= $data['id_form'] ?>"> 
									<button class="btn btn-white btn-info btn-bold" type="submit">
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
<script type="text/javascript">

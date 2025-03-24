<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<?php include "navbar.php"; ?>

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
			<?php include "ace_setting.php"; ?>
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
																<a data-toggle="modal" class="green" href="#modal-edit">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
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
																			<a data-toggle="modal" href="#modal-edit" class="tooltip-success" data-popup="tooltip" data-placement="top" title="Edit">
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

	<!--<div id="modal-edit" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="blue bigger">Please fill the following form fields</h4>
				</div>

				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-5">
							<div class="space"></div>

							<input type="file" />
						</div>

						<div class="col-xs-12 col-sm-7">
							<div class="form-group">
								<label for="form-field-select-3">Location</label>

								<div>
									<select class="chosen-select" data-placeholder="Choose a Country...">
										<option value="">&nbsp;</option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
							</div>

							<div class="space-4"></div>

							<div class="form-group">
								<label for="form-field-username">Username</label>

								<div>
									<input type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
								</div>
							</div>

							<div class="space-4"></div>

							<div class="form-group">
								<label for="form-field-first">Name</label>

								<div>
									<input type="text" id="form-field-first" placeholder="First Name" value="Alex" />
									<input type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
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

					<button class="btn btn-sm btn-primary">
						<i class="ace-icon fa fa-check"></i>
						Save
					</button>
				</div>
			</div>
		</div>
	</div> PAGE CONTENT ENDS -->

<!-- /.<?php $no=0; foreach($all as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->mod_id;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Form_order/edit'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <div class="modal-body">

          <input type="hidden" readonly value="<?=$row->id_form;?>" name="id_form" class="form-control" >

          <div class="form-group">
            <label class='col-md-3'>Modal</label>
            <div class='col-md-9'><input type="text" name="mod_name" autocomplete="off" value="<?=$row->mod_name;?>" required placeholder="Masukkan Modal" class="form-control" ></div>
          </div>
          <br>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
          </div>
        </form>
    </div>
  </div>
</div>
<?php endforeach; ?> -->


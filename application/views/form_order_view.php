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
								<h3 class="header smaller lighter blue">jQuery dataTables</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>

								<div class="" id="widget-container-col-10">
									<div class="widget-box" id="widget-box-10">
										<div class="widget-header widget-header-small">
											<h5 class="widget-title smaller">Form Order</h5>

											<div class="widget-toolbar no-border">
												<ul class="nav nav-tabs" id="myTab">
													<li class="active">
														<a class="btn btn-warning" data-toggle="tab" href="#home">Belum Bayar</a>
													</li>

													<li>
														<a class="btn btn-success" data-toggle="tab" href="#profile">Sudah Bayar</a>
													</li>

													<li>
														<a class="btn btn-danger" data-toggle="tab" href="#info">Hold</a>
													</li>
												</ul>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main padding-6">
												<div class="tab-content">
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
																	<th>ID Form</th>
																	<th class="hidden-480">Nama Pemesan</th>

																	<th>
																		<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
																		Tanggal
																	</th>
																	<th class="hidden-480">Status</th>

																	<th></th>
																</tr>
															</thead>

															<tbody>
																<?php
																$no = 1;
																foreach ($get_order as $key=>$value):
																	if ($value['status'] == 'Belum Pembayaran'):
																	?>
																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>
																		<td><?=$value['id_form']?></td>
																		<td><?=$value['nama_pelanggan']?></td>
																		<td><?=$value['tanggal']?></td>
																		<td><?=$value['status']?></td>
																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-eye bigger-130"></i>
																				</a>

																				<a class="green" href="#">
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
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-eye bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
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
																	endif;
																endforeach;
																?>
															</tbody>
														</table>
													</div>

													<div id="profile" class="tab-pane">
														<table id="dynamic-table" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	<th class="center">
																		<label class="pos-rel">
																			<input type="checkbox" class="ace" />
																			<span class="lbl"></span>
																		</label>
																	</th>
																	<th>ID Form</th>
																	<th class="hidden-480">Nama Pemesan</th>

																	<th>
																		<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
																		Tanggal
																	</th>
																	<th class="hidden-480">Status</th>

																	<th></th>
																</tr>
															</thead>

															<tbody>
																<?php
																$no = 1;
																foreach ($get_order as $key=>$value):
																	if ($value['status'] == 'Sudah Pembayaran'):
																	?>
																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>
																		<td><?=$value['id_form']?></td>
																		<td><?=$value['nama_pelanggan']?></td>
																		<td><?=$value['tanggal']?></td>
																		<td><?=$value['status']?></td>
																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="<?=base_url('Form_order/lihat/'.$value['id_form'])?>">
																					<i class="ace-icon fa fa-eye bigger-130"></i>
																				</a>

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
																							<a href="<?=base_url('Form_order/lihat/'.$value['id_form'])?>" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-eye bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a data-toggle="modal" href="#modal-edit<?=$row->id_form;?>" class="tooltip-success" data-popup="tooltip" data-placement="top" title="Edit">
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
																	endif;
																endforeach;
																?>
															</tbody>
														</table>
													</div>

													<div id="info" class="tab-pane">
														<table id="dynamic-table" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	<th class="center">
																		<label class="pos-rel">
																			<input type="checkbox" class="ace" />
																			<span class="lbl"></span>
																		</label>
																	</th>
																	<th>ID Form</th>
																	<th class="hidden-480">Nama Pemesan</th>

																	<th>
																		<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
																		Tanggal
																	</th>
																	<th class="hidden-480">Status</th>

																	<th></th>
																</tr>
															</thead>

															<tbody>
																<?php
																$no = 1;
																foreach ($get_order as $key=>$value):
																	if ($value['status'] == 'Hold'):
																	?>
																	<tr>
																		<td class="center">
																			<label class="pos-rel">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"></span>
																			</label>
																		</td>
																		<td><?=$value['id_form']?></td>
																		<td><?=$value['nama_pelanggan']?></td>
																		<td><?=$value['tanggal']?></td>
																		<td><?=$value['status']?></td>
																		<td>
																			<div class="hidden-sm hidden-xs action-buttons">
																				<a class="blue" href="#">
																					<i class="ace-icon fa fa-eye bigger-130"></i>
																				</a>

																				<a class="green" href="#">
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
																							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																								<span class="blue">
																									<i class="ace-icon fa fa-eye bigger-120"></i>
																								</span>
																							</a>
																						</li>

																						<li>
																							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
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
																	endif;
																endforeach;
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

	<?php $no=0; foreach($all as $row): $no++; ?>
	<div id="modal-edit<?=$row->mod_id;?>" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<form action="<?php echo site_url('Form_order/edit'); ?>" method="post">
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
									<select type="text"name="status" value="<?php echo $status;?>" class="chosen-select" data-placeholder="Choose a Country...">
										<option value="Belum Pembayaran">Belum Pembayaran</option>
										<option value="Sudah Pembayaran">Sudah Pembayaran</option>
										<option value="Hold">Hold</option>
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
	</div><!-- PAGE CONTENT ENDS -->
	<?php endforeach; ?>

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
</div>
	<script type="text/javascript">
	jQuery(function($) {
		//initiate dataTables plugin
		var myTable = 
		$('#dynamic-table')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable( {
			bAutoWidth: false,
			"aoColumns": [
			  { "bSortable": false },
			  null, null, null, null,
			  { "bSortable": false }
			],
			"aaSorting": [],
			
			
			//"bProcessing": true,
	        //"bServerSide": true,
	        //"sAjaxSource": "http://127.0.0.1/table.php"	,
	
			//,
			//"sScrollY": "200px",
			//"bPaginate": false,
	
			//"sScrollX": "100%",
			//"sScrollXInner": "120%",
			//"bScrollCollapse": true,
			//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			//you may want to wrap the table inside a "div.dataTables_borderWrap" element
	
			//"iDisplayLength": 50
	
	
			select: {
				style: 'multi'
			}
	    } );
	
		
		
		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
		
		new $.fn.dataTable.Buttons( myTable, {
			buttons: [
			  {
				"extend": "colvis",
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
				"className": "btn btn-white btn-primary btn-bold",
				columns: ':not(:first):not(:last)'
			  },
			  {
				"extend": "copy",
				"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "csv",
				"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "pdf",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "print",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
				"className": "btn btn-white btn-primary btn-bold",
				autoPrint: false,
				message: 'This print was produced using the Print button for DataTables'
			  }		  
			]
		} );
		myTable.buttons().container().appendTo( $('.tableTools-container') );
		
		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function (e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});
		
		
		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function (e, dt, button, config) {
			
			defaultColvisAction(e, dt, button, config);
			
			
			if($('.dt-button-collection > .dropdown-menu').length == 0) {
				$('.dt-button-collection')
				.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
				.find('a').attr('href', '#').wrap("<li />")
			}
			$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
		});
	
		////
	
		setTimeout(function() {
			$($('.tableTools-container')).find('a.dt-button').each(function() {
				var div = $(this).find(' > div').first();
				if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
				else $(this).tooltip({container: 'body', title: $(this).text()});
			});
		}, 500);
		
		
		
		
		
		myTable.on( 'select', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
			}
		} );
		myTable.on( 'deselect', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
			}
		} );
	
	
	
	
		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
		
		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header
			
			$('#dynamic-table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});
		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});
	
	
	
		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});
		
		
		
		//And for the first simple table, which doesn't have TableTools or dataTables
		//select/deselect all rows according to table header checkbox
		var active_class = 'active';
		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header
			
			$(this).closest('table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			});
		});
		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
			var $row = $(this).closest('tr');
			if($row.is('.detail-row ')) return;
			if(this.checked) $row.addClass(active_class);
			else $row.removeClass(active_class);
		});
	
		
	
		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		
		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			//var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
		
		
		
		
		/***************/
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
		/***************/
		
		
		
		
		
		/**
		//add horizontal scrollbars to a simple table
		$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
		  {
			horizontal: true,
			styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
			size: 2000,
			mouseWheelLock: true
		  }
		).css('padding-top', '12px');
		*/
	
	
	})
</script>

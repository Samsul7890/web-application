<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Ace Admin</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/chosen.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?= base_url() ?>assets/js/ace-extra.min.js"></script>
		<script src="<?= base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?= base_url()?>assets/js/jquery.dataTables.min.js"></script>
		

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?=base_url('Form_order/')?>" class="navbar-brand">
						<small>
							<img class="nav-user-photo" src="<?= base_url() ?>assets/images/printo.png" style="width: 130px" />
							Form Order Application
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">
								<?php
								$total = 0;
								foreach ($trans as $value){
									if ($value['status'] == 'Belum Pembayaran'){
										$total++;
									}
								}
								echo $total;
								?>
								</span>
							</a>

							
						</li>

						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-check-square-o icon-animated-bell"></i>
								<span class="badge badge-important">
								<?php
								$total = 0;
								foreach ($trans as $value){
									if ($value['status'] == 'Sudah Pembayaran'){
										$total++;
									}
								}
								echo $total;
								?>
								</span>
							</a>


						</li>

						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-ban icon-animated-vertical"></i>
								<span class="badge badge-success">	
								<?php
								$total = 0;
								foreach ($trans as $value){
									if ($value['status'] == 'Hold'){
										$total++;
									}
								}
								echo $total;
								?></span>
							</a>

							
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?= base_url() ?>assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small><?php echo $this->session->userdata('level'); ?></small>
									<?php echo $this->session->userdata('username'); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a onclick="return confirm('yakin ingin keluar dari sistem??')" href="<?php echo base_url('Auth/logout') ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
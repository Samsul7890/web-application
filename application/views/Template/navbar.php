			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				
				<?php $level = $this->session->userdata('level'); ?>

				<ul class="nav nav-list">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Form Order
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
						<?php if ($level === 'Deskprint' || $level === 'Administrator'): ?>
							<li class="">
								<a href="<?=base_url('Form_order/buat_form/')?>" class="nav-link ?>">
									<i class="menu-icon fa fa-tachometer"></i>
									<span class="menu-text"> Buat Form Order </span>
								</a>

								<b class="arrow"></b>
							</li>
						<?php endif ?>
							<li class="">
								<a href="<?=base_url('Form_order/')?>" class="nav-link ?>">
									<i class="menu-icon fa fa-list"></i>
									<span class="menu-text"> Form Order List </span>
								</a>
							</li>
						</ul>
					</li>
					<?php if ($level === 'Administrator' || $level === 'Kasir' || $level === 'Deskprint'):  ?>
					<li class="">
						<a href="<?=base_url('Pelanggan')?>" class="nav-link ?>">
							<i class="menu-icon fa fa-users " ></i>
							<span class="menu-text"> Pelanggan </span>
						</a>
					</li>
					<?php endif ?>
					<?php if ($level === 'Administrator' ): ?>
					<li class="">
						<a href="<?=base_url('Bahan')?>" class="nav-link ?>">
							<i class="menu-icon glyphicon glyphicon-print " ></i>
							<span class="menu-text"> Bahan </span>
						</a>
					</li>

					<li class="">
						<a href="<?=base_url('User')?>" class="nav-link ?>">
							<i class="menu-icon glyphicon glyphicon-user" ></i>
							<span class="menu-text"> User </span>
						</a>
					</li>
					<?php endif ?>
				</ul><!-- /.nav-list -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
				
	<?php $this->load->view('admin/master/sidebar'); ?>
	<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
			Kotak Masuk

			<div class="clearfix"></div>
			</div>

			<div class="x_content">
			<div class="x_content">
						<div class="row">
						<div class="col-sm-3 mail_list_column">
							<?php foreach($messages_new->result() as $row){ ?>
							<a href="#">
							<div class="mail_list" style="padding: 6px;">
								<div class="right">
									<h3><?php echo $row->name; ?> <small>3.00 PM</small></h3>
								</div>
							</div>
							</a>
							<?php } ?>
						</div>
						<!-- /MAIL LIST -->

						<!-- CONTENT MAIL -->
						<div class="col-sm-9 mail_view">
							<div class="inbox-body">
							<div class="mail_heading row">
								<div class="col-md-8">
								<div class="btn-group">
									<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
								</div>
								</div>
								<div class="col-md-4 text-right">
								<p class="date"> 8:02 PM 12 FEB 2014</p>
								</div>
								
							</div>
							<div class="sender-info">
								<div class="row">
								<div class="col-md-12">
									<strong>Jon Doe</strong>
									<span>(jon.doe@gmail.com)</span> to
									<strong>me</strong>
									<a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
								</div>
								</div>
							</div>
							<div class="view-mail">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
							</div>
							</div>

						</div>
						<!-- /CONTENT MAIL -->
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	

	<!-- /page content -->
	<?php $this->load->view('admin/master/footer'); ?>
	<?php $this->load->view('admin/swall'); ?>
	<?php $this->load->view('admin/ajax/inbox'); ?>



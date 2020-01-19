	<?php $this->load->view('admin/master/sidebar'); ?>
	<!-- page content -->
	<div class="right_col" role="main">
			<div class="">
				<div class="page-title">
				
				</div>

				<div class="clearfix"></div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					<div class="x_title">
						Profile Website
						<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
						</ul>
						<div class="clearfix"></div>
					</div>
						<div class="x_content">

					<?php foreach($config_set->result() as $row){ ?>
					<?php echo form_open_multipart('admin/pengaturan/update_site_setting'); ?>
							<div class="form-group">
								<label>Nama Website</label>
								<input type="hidden" name="id" value="<?php echo $row->id; ?>">
								<input type="text" name="nama_website" class="form-control" style="border: none; border-bottom: 1px solid #ddd; border-top: 0px;" value="<?php echo $row->website_name; ?>" >
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" style="border: none; border-bottom: 1px solid #ddd; border-top: 0px;" value="<?php echo $row->address; ?>" >
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" name="telepon" class="form-control" style="border: none; border-bottom: 1px solid #ddd; border-top: 0px;" value="<?php echo $row->phone; ?>" >
							</div>
							<div class="form-group">
								<label>E-Mail</label>
								<input type="text" name="email" class="form-control" style="border: none; border-bottom: 1px solid #ddd; border-top: 0px;" value="<?php echo $row->email; ?>" >
							</div>
							<div class="form-group">
								<label>Icon</label>
								<input type="file" name="gambar">
								<img src="<?php echo base_url('uploads/').$row->logo; ?>" alt="" style="width: 10%;">
							</div>
							<div class="form-group">
								<label>Instagram</label>
								<div class='input-group'>
									<span class="input-group-addon"  data-toggle="modal" data-target=".bs-example-modal-sm2">
									<span class="fa fa-instagram"></span>
								</span>
								<input type="text" name="instagram" class="form-control" value="<?php echo $row->instagram; ?>">
							</div>
							</div>
							<div class="form-group">
								<label>Facebook</label>
								<div class='input-group'>
									<span class="input-group-addon"  data-toggle="modal" data-target=".bs-example-modal-sm2">
									<span class="fa fa-facebook"></span>
								</span>
								<input type="text" name="facebook" class="form-control" value="<?php echo $row->facebook; ?>">
							</div>
							</div>
							<div class="form-group">
								<label>Twitter</label>
								<div class='input-group'>
									<span class="input-group-addon"  data-toggle="modal" data-target=".bs-example-modal-sm2">
									<span class="fa fa-twitter"></span>
								</span>
								<input type="text" name="twitter" class="form-control" value="<?php echo $row->twitter; ?>">
							</div>
							</div>
							<div class="form-group">
								<label>Youtube</label>
								<div class='input-group'>
									<span class="input-group-addon"  data-toggle="modal" data-target=".bs-example-modal-sm2">
									<span class="fa fa-youtube"></span>
								</span>
								<input type="text" name="youtube" class="form-control" value="<?php echo $row->youtube; ?>">
							</div>
							</div>

							<div class="form-group">
								<button class="btn btn-primary btn-sm pull-right" type="submit">Simpan Perubahan</button>
							</div>
							<?php echo form_close(); ?>
					<?php } ?>
						</div>
						</div>
					</div>
				</div>
				</div>
			</div>

			<!-- /page content -->
	<?php $this->load->view('admin/master/footer'); ?>



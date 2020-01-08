<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>
<?php foreach($profile->result() as $row){ ?>
	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="profile-data">
						<div class="title-sides">
							<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> FASILITAS</h2>
							<hr>
						</div>
						<?php foreach($fasilitas->result() as $row){ ?>
							<div class="card" style="box-shadow: none; padding: 10px;">
								<div class="row">
									<div class="col-md-5">
										<img src="<?php echo base_url('uploads/').$row->images; ?>" style="width: 100%;">
									</div>
									<div class="col-md-7">
										<?php echo $row->facilities_name; ?>
										<hr style="margin-top: -4px;">
										<p style="margin-top: -20px; font-weight: lighter; text-transform: lowercase;"><?php echo $row->description; ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="profile-data">
						<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> PELAYANAN</h2>
						<hr>
						<div class="accordion" id="accordionExample" style="margin-top: 40px;">
							<?php foreach($services->result() as $row){ ?>
								<div class="card" style="box-shadow: none; border: 1px solid #ddd; margin-top: -25px;">
									<div class="card-header bg-white" id="headingOne">
										<h2 class="mb-0">
											<button class="btn btn-default text-info"  type="button" data-toggle="collapse" data-target="#colla<?php echo $row->service_id; ?>" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-plus"></i> <?php echo $row->service_name; ?>
											</button>
										</h2>
									</div>

									<div id="colla<?php echo $row->service_id; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<?php echo $row->service_description; ?>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="col-md-3">
				<div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
					<div class="card-body" style="padding:0px;">
						<img style="width: 100%;" src="https://www.nutriclub.co.id/media/178014/09.-senam-hamil-97-2003_ratio-1_700x278pxl.jpg" alt="">
					</div>
					<div class="card-footer" style="padding: 10px;">
						<h4 style="font-family: 'Bitter', serif; font-size: 12pt;">Senam Ibu Hamil</h4>
					</div>
				</div>
				<div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
					<div class="card-body" style="padding:0px;">
						<img style="width: 100%;" src="https://www.nutriclub.co.id/media/178014/09.-senam-hamil-97-2003_ratio-1_700x278pxl.jpg" alt="">
					</div>
					<div class="card-footer" style="padding: 10px;">
						<h4 style="font-family: 'Bitter', serif; font-size: 12pt;">Senam Ibu Hamil</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('home/footer'); ?>
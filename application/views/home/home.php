<?php $this->load->view('home/nav'); ?>
<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image:url('<?php echo base_url('public/images/bg_2.jpg'); ?>');" data-stellar-background-ratio="0.9">
		<div class="overlay"></div>
	</div>
	<div class="slider-item" style="background-image:url('<?php echo base_url('public/images/bg_1.jpg'); ?>');" data-stellar-background-ratio="0.9">
		<div class="overlay"></div>
	</div>
	<div class="slider-item" style="background-image:url('<?php echo base_url('public/images/bg_4.jpg'); ?>');" data-stellar-background-ratio="0.9">
		<div class="overlay"></div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb" style="margin-top: -60px;">
	<div class="container">
		<div class="col-md-12" style="padding: 0px;">
			<div class="row">
				<?php foreach($card_home->result() as $row){ ?>
					<div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
						<div class="card hvr-sweep-to-top" style="min-height: 400px; border:none; border-radius:10px;">
							<div class="card-body text-center">
								<i class="fa <?php echo $row->icon; ?> text-info" style="font-size: 30pt; text-align:center;"></i>
								<h1 class="text-info" style="font-size: 12pt; font-family: 'Noto Sans TC', sans-serif; text-transform: uppercase; font-weight: bold; min-height: 50px;"> <?php echo $row->title_pages; ?></h1>
								<p style="text-align: justify;  padding: 7px; border-radius: 5px;"><?php 
								$statis = $row->content; 
								echo strip_tags(substr($statis,0,170)); 
								?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb bg-info text-white" style="margin-top: -100px; padding-top: 100px; z-index: -10;">
	<div class="container">
		<div class="col-md-12" style="padding: 0px;">
			<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 15pt; color: white; font-weight: bold;">TENTANG KAMI</h2>
			<p>RS Urip Sumoharjo Merupakan Rumah Sakit Swasta yang bernuansa Islam yang mulai beroperasi sejak tanggal 10 September 2001 dan sesuai dengan Keputusan Menteri Kesehatan RI No.492/menkes/SK/V/2008.

				Rumah Sakit Urip Sumoharjo saat ini merupakan rumah sakit swasta utama setara tipe B Non Pendidikan dengan Status Akriditasi Tingkat Paripurna Nomor : KARS-SERT/ 670/ III/ 2017

				RS Urip Sumoharjo telah mendapatkan :

				Penghargaan dari Jamsostek sebagai RS yang tertib Administrasi dan pelayanan terbaik se Sumbagsel
			Penghargaan dari BPJS Ketenagakerjaan sebagai RS yang tertib dalam Pembayaran iuran</p>	
			<p style="padding-bottom: 120px;">Rumah Sakit Unggulan Dengan Pelayanan Prima Kebanggaan Masyarakat</p>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="col-md-12" style="padding: 0px;">
			<div class="row">
				<div class="col-md-9">
					<div class="title-sides">
						<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> LATEST POST</h2>
						<hr>
					</div>
					<div class="col-md-12">
						<div class="row">
							<?php foreach($news->result() as $blog){ ?>
								<div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 7px;">
									<div class="card" style="box-shadow:none; border: none; padding: 10px;">
										<div class="block-20" style="background-image: url('<?= base_url('uploads/').$blog->images; ?>'); height: 200px;">
											<div class="meta-date" style="min-width: 81px;">  
												<span class="day" style="background-color: #28204f; padding-top: 10px; padding-bottom: 10px; color:white">
													<?php
													$date = $blog->date_post;
													echo strip_tags(substr($date,8,2));
													?>
												</span>

												<span class="mos" style="background-color: #28204f; padding-top: 10px; padding-bottom: 10px; color:white">
													<?php 
													$month = $blog->date_post; 
													$this_month = strip_tags(substr($month,5,2)); 
													echo getBulan($this_month); 
													?>
												</span>

												<span class="yr bg-info" style="padding:10px; color: white;">
													<?php
													$year = $blog->date_post;
													echo strip_tags(substr($year, 0,4));
													?>
												</span>
											</div>
										</div>
										<div class="text bg-white">
											<h3 class="heading" style="font-family: 'Lato', sans-serif; font-size: 12pt; font-weight: bold; color: #28204f;">
												<a style="font-family: 'Lato', sans-serif; font-size: 12pt; font-weight: bold; color: #28204f;" href="<?php echo base_url('baca-berita/').$blog->seo; ?>">
													<?php  $berita_title = $blog->title; 
													echo strip_tags(substr($berita_title,0,40)); 
													?>
												</a>
											</h3>
											<p style="text-align: justify; padding: 0px; margin-top: -12px; margin-bottom: -12px; font-family: 'Lato', sans-serif; font-size: 10pt;"> 
												<?php 
												$berita = $blog->content; 
												echo strip_tags(substr($berita,0,60)); 
												?>
											</p>
										</div>

									</div>
									<a href="<?php echo base_url('/baca-berita/').$blog->seo; ?>" class="btn btn-info btn-read btn-sm" style="margin-top: -40px; border-radius: 20px; ">Read More <i class="fa fa-chevron-circle-right"></i></a>
								</div>

							<?php } ?>
						</div>
					</div>
					<div class="col-md-12" style="padding: 0px;">
						<div class="row">
							<div class="col-md-6">
								<div class="title-sides">
									<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> FASILITAS</h2>
									<hr>
								</div>
								<?php foreach($facilities->result() as $row){ ?>
									<div class="card" style="box-shadow:none;  margin-bottom: 4px;">	
										<div class="row">
											<div class="facilities-images" style="width: 40%; padding: 1%;">
												<img style="width: 100%; margin-left: 15px;" src="<?php echo base_url('uploads/').$row->images; ?>" alt="">
											</div>
											<div class="facilities-detail" style="width: 55%; padding-left: 20px;">
												<h5 style="font-size: 12pt; text-transform: uppercase;"><?php echo $row->facilities_name; ?></h5>
												<p style="margin-top: -25px;"><?php echo $row->description; ?></p>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="col-md-6">
								<div class="title-sides">
									<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> PELAYANAN</h2>
									<hr>
								</div>
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

					</div>
				</div>
				<div class="col-md-3">
					<div class="title-sides">
						<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> POLIKLINIK</h2>
						<hr>
					</div>

					<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="accordion" id="accordionExample" style="margin-top: 40px;">
							<?php foreach($poly->result() as $row){ ?>
								<div class="card" style="box-shadow: none; border: 1px solid #ddd; margin-top: -25px;">
									<div class="card-header bg-white" id="headingOne">
										<h2 class="mb-0">
											<button class="btn btn-default text-info"  type="button" data-toggle="collapse" data-target="#colla<?php echo $row->polyclinic_id; ?>" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-plus"></i> <?php echo $row->polyclinic_name; ?>
											</button>
										</h2>
									</div>

									<div id="colla<?php echo $row->polyclinic_id; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<?php echo $row->description; ?>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<?php foreach($sidebar->result() as $row){ ?>
						<div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
							<div class="card-body" style="padding:0px;">
								<img style="width: 100%;" src="<?php echo base_url('uploads/').$row->thumbnail; ?>" alt="">
							</div>
							<div class="card-footer" style="padding: 10px;">
								<h4 style="font-family: 'Lato', sans-serif; font-size: 12pt;">Senam Ibu Hamil</h4>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view('home/footer'); ?>
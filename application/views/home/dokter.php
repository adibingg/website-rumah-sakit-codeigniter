<?php $this->load->view('home/nav'); ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Dokter Rumah Sakit Umum Kartini</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dokter <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
				<?php if($dokter->num_rows() < 1){ ?>
					<?php echo "<h1>Belum ada dokter</h1>"; ?>
				<?php } else { ?>
				<?php foreach($dokter->result() as $row){ ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<?php if($row->status=="cuti"){ ?>
							<h3 style="background-color: #8669FF; font-style: bold; text-transform: uppercase; font-size:12pt; padding: 10px; color: #fff; z-index: 10; position: absolute;"><i class="fa fa-home"></i> <?php echo "Sedang Cuti"; ?></h3>
							<?php } else { } ?>
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(<?php echo base_url('uploads/').$row->images; ?>);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 style="font-size: 13pt;"><?= $row->doctor_name; ?></h3>
								<span class="position mb-2"><?= $row->specialist_name; ?></span>
								<div class="faded">
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php } ?>
				</div>
			</div>
		</section>
<?php $this->load->view('home/footer'); ?>
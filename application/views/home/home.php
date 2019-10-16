<?php $this->load->view('home/nav'); ?>
    <section class="home-slider owl-carousel">
      	<div class="slider-item" style="background-image:url('<?php echo base_url('public/images/skuy.jpg'); ?>');" data-stellar-background-ratio="0.9">
			<div class="overlay"></div>
        		<div class="container">
          			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
						
        			</div>
        		</div>
      		</div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="col-md-12" style="padding: 0px;">
			<div class="card" style="border: 0px;">
				<div class="card-body text-center" style="background-color: #8ac4ff;">
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">Sekilas Tentang Kami</span>
		            <h2 class="mb-4" style="font-size: 28px;">Rumah Sakit Umum Kartini Lampung Tengah</h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
			  		<div class="visi bg-info"  style="background-color: #ddd; padding: 30px;" >
					  	<p class="text-white" style="font-size: 15pt;">Sambutan</p>
					  	<p class="bg-info text-white">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
						<p style="font-size: 10pt; border-bottom: 1px solid white;" class="pull-right text-white">dr. Hernowo Anggoro Wasono, M.Kes</p>
					</div>
							<p style="background-color: #ddd; padding: 30px;">
								<?= $visi; ?>
							</p>
							<div class="row mt-5 pt-2">
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
										<div class="text">
											<h3>Profil</h3>
											<a href="" class="btn btn-info btn-sm rndd" style="border-radius: 30px;">Selengkapnya</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
										<div class="text">
											<h3>Sejarah</h3>
											<a href="" class="btn btn-info btn-sm rndd" style="border-radius: 30px;">Selengkapnya</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
										<div class="text">
											<h3>Fasilitas & Pelayanan</h3>
											<a href="" class="btn btn-info btn-sm rndd" style="border-radius: 30px;">Selengkapnya</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
										<div class="text">
											<h3>Struktur Organisasi</h3>
											<a href="" class="btn btn-info btn-sm rndd" style="border-radius: 30px;">Selengkapnya</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	

		<section class="ftco-section ftco-no-pt ftc-no-pb ftco-animate">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4" style="padding: 2px;">
							<div class="box">
								<div class="bg-info text-white" style="padding: 10px;">
									<div class="panel panel-danger">
										<div class="panel-heading text-center">
												<i class="fa fa-plus"></i> Tarif Pelayanan
										  </div>
										  <hr>
										  <div class="panel-body">
										  <?php for($i=0; $i<10; $i++){ ?>
												<p style="font-size: 10pt; margin-top: -5px;"><i class="fa fa-arrow-right"></i> One Two</p>
										  <?php } ?>
										  </div>
										  <div class="panel-footer text-center">
										  <a href="" class="btn btn-danger btn-sm" style="border-radius: 20px;"><i class="fa fa-plus"></i> Selengkapnya</a>
										  </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4" style="padding: 2px;">
							<div class="box">
								<div class="bg-success text-white" style="padding: 10px;">
									<div class="panel panel-danger">
										  <div class="panel-heading text-center">
												<i class="fa fa-plus"></i> Tarif Kamar Inap
										  </div>
										  <hr>
										  <div class="panel-body">
										  <table class="table table-border" style="font-size: 10pt;">
										  <?php foreach($room->result() as $row){ ?>
											<tr>
												<td><?php echo $row->room_name; ?></td>
												<td><?php echo $row->class; ?></td>
												<td><?php echo $row->price; ?></td>
											</tr>
										  <?php } ?>
										  </table>
										  
										  </div>
										  <div class="panel-footer text-center">
										  <a href="" class="btn btn-info btn-sm" style="border-radius: 20px;"><i class="fa fa-plus"></i> Selengkapnya</a>
										  </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4" style="padding: 2px;">
							<div class="box">
								<div class="bg-primary text-white" style="padding: 10px;">
									<div class="panel panel-danger">
									<div class="panel-heading text-center">
												<i class="fa fa-plus"></i> Poliklinik
										  </div>
										  <hr>
										  <div class="panel-body">
										  <?php for($i=0; $i<10; $i++){ ?>
												<p style="font-size: 10pt; margin-top: -5px;"><i class="fa fa-arrow-right"></i> One Two</p>
										  <?php } ?>
										  </div>
										  <div class="panel-footer text-center">
										  <a href="" class="btn btn-success btn-sm" style="border-radius: 20px;"><i class="fa fa-plus"></i> Selengkapnya</a>
										  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- SECTION BERITA -->
	<section class="ftco-section bg-light" style="padding-top : 0px;">
		<div class="container">
		<h1 style="border-bottom : 1px solid #ddd;">Berita Terbaru</h1>
			<div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>
			<div class="row">
			
        <?php foreach($recent_news->result() as $blog){ ?>
		    <div class="col-md-3 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('uploads/').$blog->images; ?>');">
              <div class="meta-date text-center p-2"  style="background-color:#8ac4ff;">  
                <span class="day">
                <?php
					$date = $blog->date_post;
					echo strip_tags(substr($date,8,2));
					?>
                </span>
                
                <span class="mos">
                <?php 
                  	$month = $blog->date_post; 
                	$this_month = strip_tags(substr($month,6,7)); 
                  	echo bulan($this_month); 
                ?>
                </span>
                
                <span class="yr">
                <?php
					$year = $blog->date_post;
					echo strip_tags(substr($year, 0,4));
                ?>
                </span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#"><?php 
							$berita = $blog->content; 
							echo strip_tags(substr($title,0,10)); 
					    ?></a></h3>
				      <p style="text-align: justify;">	
					    <?php 
							$berita = $blog->content; 
							echo strip_tags(substr($berita,0,100)); 
					    ?>
				      </p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="<?php echo base_url('baca-berita/').$blog->seo; ?>" class="btn btn-info btn-sm">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
		  <?php } ?>
      </div>

		</div>
  </section>
<?php $this->load->view('home/footer'); ?>
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
			<div class="row">
				<div class="col-md-8">
					<h1 style="border-bottom : 1px solid #ddd;">Sambutan</h1>
					<div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>
					<div class="row">
						<div class="col-md-12" style="border: 3px dashed #ddd;">
							<h3 style="font-family: 'Amaranth', sans-serif;">Selamat Datang Di Website <?php echo $title; ?></h3>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<p class="pull-right" style="border-bottom: 1px solid #ddf; font-family: 'Amaranth', sans-serif;">dr. Hernowo Anggoro Wasono, M.Kes</p>
						</div>
						<div class="col-md-12">
							<h1 style="border-bottom : 1px solid #ddd;">Tentang Kami</h1>
							<div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>
							<p></p>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title text-center">Profil Rumah Sakit</h5>
										<img style="width: 100%;" src="<?php echo base_url('public/images/hospital.png'); ?>" alt="" srcset="">
									</div>
									<div class="card-footer text-center">
										<div class="btn btn-info btn-sm">Lihat Detail</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-md-3 col-xs-6">
							<a href="">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title text-center">Struktur Organisasi</h5>
										<img style="width: 100%;" src="<?php echo base_url('public/images/diagram.png'); ?>" alt="" srcset="">
									</div>
									<div class="card-footer text-center">
										<div class="btn btn-info btn-sm">Lihat Detail</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-md-3 col-xs-6">
							<a href="">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title text-center">Sejarah </h5>
										<img style="width: 100%;" src="<?php echo base_url('public/images/patient.png'); ?>" alt="" srcset="">
									</div>
									<div class="card-footer text-center">
										<div class="btn btn-info btn-sm">Lihat Detail</div>
									</div>
								</div>
							</a>
						</div>
						
						<div class="col-md-3 col-xs-6">
							<a href="">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title text-center">Pelayanan</h5>
										<img style="width: 100%;" src="<?php echo base_url('public/images/medical-kit.png'); ?>" alt="" srcset="">
									</div>
									<div class="card-footer text-center">
										<div class="btn btn-info btn-sm">Lihat Detail</div>
									</div>
								</div>
							</a>
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<img class="pull-right" src="<?php echo base_url('public/images/dokter.jpg'); ?>" alt="" srcset="">
				</div>
				<div class="col-md-3">
					<h1 style="border-bottom : 1px solid #ddd;">Informasi</h1>
					<div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>					
					<div class="row">
						<img style="width: 100%;" src="<?php echo base_url('public/images/bpjs.png'); ?>" alt="" srcset="">
					</div>
			
						
					
				</div>
				<div class="col-md-6" style="padding: 0px;">
					<h1 style="border-bottom : 1px solid #ddd;">Visi dan Misi</h1>
					<div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>
					<div class="visi">
						<h5>”Rumah sakit unggulan dengan pelayanan prima kebanggaan masyarakat”</h5>
					</div>
					<div class="misi">
					<?php 
					$no =0; 
					for($i=0; $i<4; $i++){ ?>
						<div class="alert alert-info bg-info" role="alert" style="border: 0px; border-radius: 0px; color: white;">
							This is a info alert—check it out!
						</div>
					<?php } ?>
					</div>
				</div>
				<style>
				
					.card-header{
						padding: 1px;
						background-color:#8ac4ff;
						font-size: 13pt;
						border: 0px;
						border-radius: 0px;
					}

					.btn-default{
						color: white;
					}
					.btn-default:hover{
						color: white;
					}

				</style>
				<div class="col-md-3">
					<h1 style="border-bottom : 1px solid #ddd;">Poliklinik</h1>
					<div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>
					<div class="accordion" id="accordionExample">
						<div class="cards">
							<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Collapsible Group Item #1
								</button>
							</h2>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body" style="border: 1px dashed aqua;">
								Lihat Detail
							</div>
							</div>
						</div>
						<div class="cards">
							<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-default collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Collapsible Group Item #2
								</button>
							</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
							</div>
							</div>
						</div>
						<div class="cards">
							<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-default collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Collapsible Group Item #3
								</button>
							</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
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
	<section class="ftco-section bg-light">
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
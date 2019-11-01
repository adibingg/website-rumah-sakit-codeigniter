<?php $this->load->view('home/nav'); ?>
  <!-- SECTION HEAD -->
  <?php $this->load->view('home/bread'); ?>
	
  <!-- SECTION BERITA -->
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
        <?php foreach($recent_news->result() as $blog){ ?>
		    <div class="col-md-3 ftco-animate ">
          <div class="card blog-entry p-3">
            <div class="block-20" style="background-image: url('<?= base_url('uploads/').$blog->images; ?>');">
              <div class="meta-date text-center p-2">  
                <span class="day">
                <?php
                $date = $blog->date_post;
                echo strip_tags(substr($date,8,2));
                ?>
                </span>
                
                <span class="mos">
                <?php 
                  $month = $blog->date_post; 
                $this_month = strip_tags(substr($month,5,2)); 
                  echo getBulan($this_month); 
                ?>
                </span>
                
                <span class="yr">
                <?php
                $year = $blog->date_post;
                echo strip_tags(substr($year, 0,4));
                ?>
                </span>
              </div>
            </div>
            <div class="text bg-white p-2">
              <h3 class="heading"><a href="#"><?= $blog->title; ?></a></h3>
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

      <div class="row no-gutters my-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
		</div>
  </section>
<?php $this->load->view('home/footer'); ?>

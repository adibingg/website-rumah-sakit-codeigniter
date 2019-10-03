<?php $this->load->view('home/nav'); ?>
  <!-- SECTION HEAD -->
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('public/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.7">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Galeri</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Galeri <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </div>
  </section>
	
  <!-- SECTION GALERI -->
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
        <div class="col-md-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php foreach($album->result() as $row){ ?>
            <a class="nav-link active" id="<?php $row->link; ?>" data-toggle="pill" href="#<?php $row->link; ?>" role="tab" aria-controls="<?php $row->link; ?>" aria-selected="true">Home</a>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
          </div>
        </div>
      </div>

      <!-- SECTION PAGINATION -->
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

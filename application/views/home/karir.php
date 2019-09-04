<?php $this->load->view('home/nav'); ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Informasi Karir</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Karir <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
    	<div class="container">
    		<div class="ftco-departments">
					<div class="row">
            
<div class="col-md-12">
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="row">
  <?php foreach($career->result() as $row){ ?>
    <div class="col-md-3 col-xs-6">
      <div class="card" style="margin-bottom: 10px;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row->position; ?></h5>
            <hr>
            <h5 class="card-title">Kualifikasi</h5>
            <style>
              ol li{
                font-size: 10pt;
                margin-left: -23px;
              }
            </style>
            <p style="font-size: 1pt;"><?php echo $row->qualification; ?></p>
            <h5 class="card-title">Persyaratan</h5>
            <p><?php echo $row->requirements; ?></p>
            <a href="mailto:rumahsakitkartini@yahoo.com"" class="btn btn-primary text-center">Lamar Sekarang</a>
          </div>
        </div>
      </div>
  <?php } ?>
  </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div></div>
         
	              	
	        </div>
        </div>
    	</div>
    </section>
<?php $this->load->view('home/footer'); ?>
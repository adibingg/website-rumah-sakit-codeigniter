<?php $this->load->view('home/nav'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('public/'); ?>images/profile.png'); background-size: cover;" data-stellar-background-ratio="0.7">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Profil Rumah Sakit Umum Kartini</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(''); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<?php foreach($profile->result() as $row){ ?>
	<section class="ftco-section ftco-no-pt ftc-no-pb" style="background-color: #ddd; padding: 10px;">
		<div class="container">
			<div class="row no-gutters" style="margin-top: 10px;">
				<div class="col-md-5">
					<img style="margin-top: 19px;" width="500" height="380" class="img-responsive" src="<?php echo base_url('public/images/image_5.jpg'); ?>" alt="">
				</div>
				<div class="col-md-7">
					<p style="font-size: 5pt;"><?php echo $row->sejarah; ?></p>
				</div>
			</div>
		</div>
	</section>
		

    <section class="ftco-section" style="margin-top: -65px;">
    	<div class="container">
    		<div class="ftco-departments">
				<div class="row">
					<div class="col-md-12 nav-link-wrap">
						<div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Visi</a>
						<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Misi</a>
						<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Direksi</a>
						<a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Strukturtural</a>
						<a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Profil</a>
					</div>
	          	</div>
	          	<div class="col-md-12 tab-wrap">
	            <div class="tab-content bg-purple p-4 p-md-5 ftco-animate" id="v-pills-tabContent">
	              	<div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row departments">
	              			<div class="col-md-12 text-center" style="font-family: 'Satisfy', cursive; text-transform: capitalize; font-size: 23pt;">
								<?php echo $row->visi; ?>
	              			</div>
	              		</div>
	              	</div>

	              	<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              		<div class="row departments">
					  		<div class="col-md-12">
								<?php echo $row->misi; ?>
							</div>
	              		</div>
	              	</div>

	              	<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              		<div class="row departments">
					  		<div class="col-md-12">
							
							</div>
	              		</div>
	              	</div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row departments">
	              		<div class="col-md-12">
	              			<h3 style="font-size: 16pt; text-transform: uppercase; text-align: center;">Struktur Organisasi <?php echo $row->name; ?></h3>
							<img src="<?php echo base_url('uploads/').$row->struktur; ?>" alt="" class="img-responsive" style="width: 100%;">
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row departments">
					  <div class="col-md-12">
	              			<h3 style="font-size: 16pt; text-transform: uppercase; text-align: center;">Profil <?php echo $row->name; ?></h3>
							<table class="table table-bordered">
								<style>
									tr{
										padding: 0px;
									}
								</style>
								<tr>
									<td width="250">Nama Rumah Sakit </td>
									<td><?php echo $row->name; ?></td>
								</tr>
								<tr>
									<td>Alamat </td>
									<td><?php echo $row->adress; ?></td>
								</tr>
								<tr>
									<td>Kabupaten </td>
									<td><?php echo $row->kabupaten; ?></td>
								</tr>
								<tr>
									<td>Propinsi </td>
									<td><?php echo $row->propinsi; ?></td>
								</tr>
								<tr>
									<td>E-Mail </td>
									<td><?php echo $row->email; ?></td>
								</tr>
								<tr>
									<td>Telepon </td>
									<td><?php echo $row->phone; ?></td>
								</tr>
								<tr>
									<td>Fax. </td>
									<td><?php echo $row->fax; ?></td>
								</tr>
								<tr>
									<td>Status Kepemilikan</td>
									<td><?php echo $row->status_kepemilikan; ?></td>
								</tr>
								<tr>
									<td>Mulai Berdiri </td>
									<td><?php echo $row->mulai_berdiri; ?></td>
								</tr>
								<tr>
									<td>No Surat Izin</td>
									<td><?php echo $row->no_izin; ?></td>
								</tr>
								<tr>
									<td>Berlaku Hingga </td>
									<td><?php echo $row->date; ?></td>
								</tr>
								<tr>
									<td>Tipe Rumah Sakit </td>
									<td><?php echo $row->tipe_rumah_sakit; ?></td>
								</tr>
								<tr>
									<td>Jumlah TT </td>
									<td><?php echo $row->jumlah_tt; ?></td>
								</tr>
								<tr>
									<td>Jumlah SDM</td>
									<td><?php echo $row->jumlah_sdm; ?></td>
								</tr>
								<tr>
									<td>Akreditasi KARS</td>
									<td><?php echo $row->akreditasi_kars; ?></td>
								</tr>
								
							</table>
	              		</div>
										
				<?php } ?>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>
		
<?php $this->load->view('home/footer'); ?>
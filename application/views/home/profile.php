<?php $this->load->view('home/nav'); ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('public/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.7">
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
	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
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
	              		
										
				<?php } ?>
		</div>
	</section>
		

>
		
<?php $this->load->view('home/footer'); ?>
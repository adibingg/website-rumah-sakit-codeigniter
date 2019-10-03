<?php $this->load->view('home/nav'); ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('public/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.7">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Dokter <?php echo $title; ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Jadwal Dokter <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
	  <section class="ftco-section">
		  <div class="container">
			  <div class="row">
				  <table class="table table-bordered">
            <thead>
              <tr style="padding: 0px;">
                <td style="font-size: 10pt;">No</td>
                <td style="font-size: 10pt;">Nama Dokter</td>
                <td style="font-size: 10pt;">Spesialis</td>
                <td style="font-size: 10pt;">Senin</td>
                <td style="font-size: 10pt;">Selasa</td>
                <td style="font-size: 10pt;">Rabu</td>
                <td style="font-size: 10pt;">Kamis</td>
                <td style="font-size: 10pt;">Jumat</td>
                <td style="font-size: 10pt;">Sabtu</td>
                <td style="font-size: 10pt;">Minggu</td>
              </tr>
            </thead>
                        
            <tbody>
            <?php $no = 1; ?>
            <?php foreach($jadwal_dokter->result() as $row){ ?>
              <tr>
                <td style="font-size: 10pt;"><?php echo $no++; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->doctor_name; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->specialist_name; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->senin; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->selasa; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->rabu; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->kamis; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->jumat; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->sabtu; ?></td>
                <td style="font-size: 10pt;"><?php echo $row->minggu; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
			  </div>
		  </div>
	  </section>
<?php $this->load->view('home/footer'); ?>
<?php $this->load->view('home/nav'); ?>
    
<?php $this->load->view('home/bread'); ?>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
					
              <div class="form-group">
                <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <input type="text" id="kontak" class="form-control" placeholder="E-Mail / No Hp.">
              </div>
              <div class="form-group">
                <input type="text" id="subjek" class="form-control" placeholder="Subjek">
              </div>
              <div class="form-group">
                <textarea id="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
              </div>
              <div class="form-group">
                <button id="send" class="btn btn-primary py-3 px-5">Kirim</button>
              </div>
           
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map" style="margin-top: 50px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4063894.864416184!2d105.57224514453281!3d-5.905054348458056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e473592f8e6b607%3A0xfceb58b9af2bb24a!2sRSU%20Kartini%20Kalirejo!5e0!3m2!1sid!2sid!4v1567391613412!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Informasi Kontak Lainnya</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Alamat :</span> <?= $address; ?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ <?= $phone; ?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?= $email; ?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Website</span> <a href="#">rumahsakitkartini.co.id</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
<?php $this->load->view('home/footer'); ?>
    

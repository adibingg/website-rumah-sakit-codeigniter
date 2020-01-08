<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>
<?php foreach($profile->result() as $row){ ?>
	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="profile-data">
						<div class="title-sides">
									<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> PROFILE</h2>
						<hr>
					</div>
					<div class="card" style="box-shadow: none; padding: 10px;">
						<table class="table table-striped table-sm table-borderless" style="margin-top: 22px; margin-bottom: 22px;">
							<tr style="height: 10px;">
								<td width="200">Nama Rumah Sakit </td>
								<td>: <?php echo $row->name; ?></td>
							</tr>
							<tr>
								<td>Alamat </td>
								<td>: <?php echo $row->adress; ?></td>
							</tr>
							<tr>
								<td>Kabupaten </td>
								<td>: <?php echo $row->kabupaten; ?></td>
							</tr>
							<tr>
								<td>Propinsi </td>
								<td>: <?php echo $row->propinsi; ?></td>
							</tr>
							<tr>
								<td>E-Mail </td>
								<td>: <?php echo $row->email; ?></td>
							</tr>
							<tr>
								<td>Telepon </td>
								<td>: <?php echo $row->phone; ?></td>
							</tr>
							<tr>
								<td>Fax. </td>
								<td>: <?php echo $row->fax; ?></td>
							</tr>
							<tr>
								<td>Status Kepemilikan</td>
								<td>: <?php echo $row->status_kepemilikan; ?></td>
							</tr>
							<tr>
								<td>Mulai Berdiri </td>
								<td>: <?php echo $row->mulai_berdiri; ?></td>
							</tr>
							<tr>
								<td>No Surat Izin</td>
								<td>: <?php echo $row->no_izin; ?></td>
							</tr>
							<tr>
								<td>Berlaku Hingga </td>
								<td>: <?php echo $row->date; ?></td>
							</tr>
							<tr>
								<td>Tipe Rumah Sakit </td>
								<td>: <?php echo $row->tipe_rumah_sakit; ?></td>
							</tr>
							<tr>
								<td>Jumlah TT </td>
								<td>: <?php echo $row->jumlah_tt; ?></td>
							</tr>
							<tr>
								<td>Jumlah SDM</td>
								<td>: <?php echo $row->jumlah_sdm; ?></td>
							</tr>
							<tr>
								<td>Akreditasi KARS</td>
								<td>: <?php echo $row->akreditasi_kars; ?></td>
							</tr>
						</table>
					</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="profile-data">
						<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> VISI</h2>
						<hr>
						<div class="card" style="box-shadow: none;">
							<div class="card-body">
								<?php echo $row->visi; ?>
							</div>
						</div>
						<div class="profile-data">
							<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> MISI</h2>
						<hr>
							<div class="card" style="box-shadow: none;">
								<div class="card-body">
									<p style="font-size: 10pt;">
										<?php echo $row->misi; ?></p>
									</div>
								</div>
							</div>
						</div>

					</div>
				<?php } ?>
				<div class="col-md-3">
					<div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
						<div class="card-body" style="padding:0px;">
							<img style="width: 100%;" src="https://www.nutriclub.co.id/media/178014/09.-senam-hamil-97-2003_ratio-1_700x278pxl.jpg" alt="">
						</div>
						<div class="card-footer" style="padding: 10px;">
							<h4 style="font-family: 'Bitter', serif; font-size: 12pt;">Senam Ibu Hamil</h4>
						</div>
					</div>
					<div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
						<div class="card-body" style="padding:0px;">
							<img style="width: 100%;" src="https://www.nutriclub.co.id/media/178014/09.-senam-hamil-97-2003_ratio-1_700x278pxl.jpg" alt="">
						</div>
						<div class="card-footer" style="padding: 10px;">
							<h4 style="font-family: 'Bitter', serif; font-size: 12pt;">Senam Ibu Hamil</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view('home/footer'); ?>
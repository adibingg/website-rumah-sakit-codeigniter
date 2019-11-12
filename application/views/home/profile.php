<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>
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
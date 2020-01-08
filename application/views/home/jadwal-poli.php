<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>
		
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<table class="table table-bordered">
                    <thead>
                        <tr style="padding: 0px;">
                            <td style="font-size: 10pt;">No</td>
                            <td style="font-size: 10pt;">Nama Poli</td>
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
                    <?php foreach($jadwal_poli->result() as $row){ ?>
                        <tr>
                            <td style="font-size: 10pt;"><?php echo $no++; ?></td>
                            <td style="font-size: 10pt;"><?php echo $row->poli_name; ?></td>
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
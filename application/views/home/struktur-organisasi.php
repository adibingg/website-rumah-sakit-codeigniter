<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>
<?php foreach($profile->result() as $row){ ?>
	<section class="ftco-section ftco-no-pt ftc-no-pb" style="margin-top: 30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2 style="font-family: 'Lato', sans-serif; padding: 0px; font-size: 13pt; color: #717872;"><i class="fa fa-chevron-circle-right"></i> STRUKTUR ORGANISASI</h2>
					<hr>
					<div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
						<div class="card-body">
							<img src="<?php echo base_url('uploads/').$row->struktur; ?>" style="width: 100%;">
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
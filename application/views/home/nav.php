<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('public/images/logo.png'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/aos.css">
	<link href="<?php echo base_url(); ?>assets-admin/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/hover-min.css">

	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<style>
		.dropdown-item: text-transform:uppercase;
	</style>
	<style>
	
						.nav-item a:hover{color: #fff;}
						.dropdown-menu a:hover{color: #fff;}
						.dropdown-item{ padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border-bottom: 1px solid #ddd;}
					</style>
  </head>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0 bg-purple">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="<?php echo base_url('/'); ?>"><img class="img-responsive" style="width: 80px; heigth: 80px;" src="<?php echo base_url('public/images/logo.png'); ?>" alt=""></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex pull-right">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div style="width: 60px; heigth : 60px;" class="icon bg-white mr-2 d-flex justify-content-center align-items-center" style="border-left: 3px solid blue;"><span class="icon-map"></span></div>
						    <span style="font-size: 9pt;" class="text"><?php echo $address; ?></span>
					    </div>
					    <div class="col-md-4 pr-4 d-flex topper align-items-center">
					    	<div style="width: 80px; heigth : 50px;" class="icon bg-white mr-2 d-flex justify-content-center align-items-center" style="border-left: 3px solid blue;"><span class="icon-paper-plane"></span></div>
						    <span style="font-size: 9pt;" class="text"><?php echo $email; ?></span>
					    </div>
					    <div class="col-md-3 pr-3 d-flex topper align-items-center">
					    	<div style="width: 70px; heigth : 50px;" class="icon bg-white mr-2 d-flex justify-content-center align-items-center" style="border-left: 3px solid blue;"><span class="icon-phone2"></span></div>
						    <span style="font-size: 9pt;" class="text"><?php echo $phone; ?></span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  	<nav style="background-color: blue; color: " class="navbar navbar-expand-lg navbar-light bg-blue ftco-navbar-light" id="ftco-navbar">
	    	<div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        		<span class="oi oi-menu"></span> NAVIGASI
	      		</button>
	      		<p class="button-custom order-lg-last mb-0"><a href="http://pendaftaran.rskartinikalirejo.co.id" class="btn btn-secondary py-2 px-3"><i class="fa fa-user-md"></i> Registrasi Online</a></p>
	      		<div class="collapse navbar-collapse" id="ftco-nav">
	        		<ul class="navbar-nav mr-auto">
	        			<li class="nav-item hvr-bounce-to-bottom"><a href="<?php echo base_url(); ?>" class="nav-link">Home</a></li>
						<li class="nav-item dropdown hvr-bounce-to-bottom"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('dokter'); ?>">PROFILE RUMAH SAKIT KARTINI</a>
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('jadwal-poli'); ?>">STRUKTUR ORGANISASI</a>
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('jadwal-poli'); ?>">SEJARAH</a>
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('jadwal-poli'); ?>">FASILITAS PELAYANAN</a>
							</div>
						</li>
										
						<li class="nav-item dropdown hvr-bounce-to-bottom"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('dokter'); ?>">DOKTER</a>
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('jadwal-dokter'); ?>">JADWAL PERAKTIK DOKTER</a>
							<a class="dropdown-item hvr-bounce-to-right" href="<?= base_url('jadwal-poli'); ?>">JADWAL POLI</a>
							</div>
						</li>
						<li class="nav-item hvr-bounce-to-bottom"><a href="<?php echo base_url('berita'); ?>" class="nav-link">Berita</a></li>
						<li class="nav-item hvr-bounce-to-bottom"><a href="<?php echo base_url('galeri'); ?>" class="nav-link">Galeri</a></li>
						<?php foreach($navigation->result() as $nav){ ?>
						<li class="nav-item dropdown hvr-bounce-to-bottom"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nav->title; ?></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
							<?php
							$navigation = $nav->id_navigation;  
							$this->db->where('id_navigation', $navigation);
							$statis = $this->db->get('static_pages'); ?>
							<?php foreach($statis->result() as $row){ ?> 
							<a style="text-transform: uppercase;" class="dropdown-item hvr-bounce-to-right" href="<?= base_url('pages/statis/').$row->url; ?>"><?php echo $row->title_pages; ?></a>
							<?php } ?>
						</div>
						</li>					
						<?php  } ?>
						<li class="nav-item hvr-bounce-to-bottom"><a href="<?php echo base_url('info-karir'); ?>" class="nav-link">Info Karir</a></li>
						<li class="nav-item hvr-bounce-to-bottom"><a href="<?php echo base_url('kontak'); ?>" class="nav-link">Kontak Kami</a></li>
					</ul>
	      		</div>
	    	</div>
		</div>
	</nav>
    <!-- END nav -->
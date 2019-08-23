<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/style.css">
  </head>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="index.html">RS. <span>Kartini</span></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Alamat : <?php echo $address; ?></span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">E-mail : <?php echo $email; ?></span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">Telepon : <?php echo $phone; ?></span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <p class="button-custom order-lg-last mb-0"><a href="<?php echo base_url('kontak'); ?>" class="btn btn-secondary py-2 px-3">Kontak Kami</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url('profile'); ?>" class="nav-link">Profil</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url('dokter'); ?>" class="nav-link">Dokter</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url('berita'); ?>" class="nav-link">Berita</a></li>
				<li class="nav-item"><a href="<?php echo base_url('berita'); ?>" class="nav-link">Galeri</a></li>
				<?php foreach($navigation->result() as $nav){ ?>
					<li class="nav-item"><a href="<?php echo base_url('berita'); ?>" class="nav-link"><?php echo $nav->title; ?></a></li>
				<?php  } ?>
                <li class="nav-item"><a href="<?php echo base_url('info-karir'); ?>" class="nav-link">Info Karir</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
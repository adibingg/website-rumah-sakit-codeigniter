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
  <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
	<style>
		.no-radius{
			border-radius: 0px;
		}

		.btn{
			border-radius: 50px;
		}
    .card-title{
      font-size: 10pt;
    }

    .card-text{
      font-size: 10pt;
    }
    .card-body > img{
      padding: 20px;
    }



		.card {
  background: #fff;
  min-height: 50px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  margin-bottom: 30px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px; }
  .card .card-inside-title {
    margin-top: 25px;
    margin-bottom: 15px;
    display: block;
    font-size: 15px;
    color: #000; }
    .card .card-inside-title small {
      color: #999;
      display: block;
      font-size: 11px;
      margin-top: 5px; }
      .card .card-inside-title small a {
        color: #777;
        font-weight: bold; }
  .card .card-inside-title:first-child {
    margin-top: 0; }
  .card .bg-red,
  .card .bg-pink,
  .card .bg-purple,
  .card .bg-deep-purple,
  .card .bg-indigo,
  .card .bg-blue,
  .card .bg-light-blue,
  .card .bg-cyan,
  .card .bg-teal,
  .card .bg-green,
  .card .bg-light-green,
  .card .bg-lime,
  .card .bg-yellow,
  .card .bg-amber,
  .card .bg-orange,
  .card .bg-deep-orange,
  .card .bg-brown,
  .card .bg-grey,
  .card .bg-blue-grey,
  .card .bg-black {
    border-bottom: none !important;
    color: #fff !important; }
    .card .bg-red h2, .card .bg-red small, .card .bg-red .material-icons,
    .card .bg-pink h2,
    .card .bg-pink small,
    .card .bg-pink .material-icons,
    .card .bg-purple h2,
    .card .bg-purple small,
    .card .bg-purple .material-icons,
    .card .bg-deep-purple h2,
    .card .bg-deep-purple small,
    .card .bg-deep-purple .material-icons,
    .card .bg-indigo h2,
    .card .bg-indigo small,
    .card .bg-indigo .material-icons,
    .card .bg-blue h2,
    .card .bg-blue small,
    .card .bg-blue .material-icons,
    .card .bg-light-blue h2,
    .card .bg-light-blue small,
    .card .bg-light-blue .material-icons,
    .card .bg-cyan h2,
    .card .bg-cyan small,
    .card .bg-cyan .material-icons,
    .card .bg-teal h2,
    .card .bg-teal small,
    .card .bg-teal .material-icons,
    .card .bg-green h2,
    .card .bg-green small,
    .card .bg-green .material-icons,
    .card .bg-light-green h2,
    .card .bg-light-green small,
    .card .bg-light-green .material-icons,
    .card .bg-lime h2,
    .card .bg-lime small,
    .card .bg-lime .material-icons,
    .card .bg-yellow h2,
    .card .bg-yellow small,
    .card .bg-yellow .material-icons,
    .card .bg-amber h2,
    .card .bg-amber small,
    .card .bg-amber .material-icons,
    .card .bg-orange h2,
    .card .bg-orange small,
    .card .bg-orange .material-icons,
    .card .bg-deep-orange h2,
    .card .bg-deep-orange small,
    .card .bg-deep-orange .material-icons,
    .card .bg-brown h2,
    .card .bg-brown small,
    .card .bg-brown .material-icons,
    .card .bg-grey h2,
    .card .bg-grey small,
    .card .bg-grey .material-icons,
    .card .bg-blue-grey h2,
    .card .bg-blue-grey small,
    .card .bg-blue-grey .material-icons,
    .card .bg-black h2,
    .card .bg-black small,
    .card .bg-black .material-icons {
      color: #fff !important; }
    .card .bg-red .badge,
    .card .bg-pink .badge,
    .card .bg-purple .badge,
    .card .bg-deep-purple .badge,
    .card .bg-indigo .badge,
    .card .bg-blue .badge,
    .card .bg-light-blue .badge,
    .card .bg-cyan .badge,
    .card .bg-teal .badge,
    .card .bg-green .badge,
    .card .bg-light-green .badge,
    .card .bg-lime .badge,
    .card .bg-yellow .badge,
    .card .bg-amber .badge,
    .card .bg-orange .badge,
    .card .bg-deep-orange .badge,
    .card .bg-brown .badge,
    .card .bg-grey .badge,
    .card .bg-blue-grey .badge,
    .card .bg-black .badge {
      background-color: #fff;
      color: #555; }
  .card .header {
    color: #555;
    padding: 20px;
    position: relative;
    border-bottom: 1px solid rgba(204, 204, 204, 0.35); }
    .card .header .header-dropdown {
      position: absolute;
      top: 20px;
      right: 15px;
      list-style: none; }
      .card .header .header-dropdown .dropdown-menu li {
        display: block !important; }
      .card .header .header-dropdown li {
        display: inline-block; }
      .card .header .header-dropdown i {
        font-size: 20px;
        color: #999;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        -webkit-transition: all 0.5s;
        transition: all 0.5s; }
        .card .header .header-dropdown i:hover {
          color: #000; }
    .card .header h2 {
      margin: 0;
      font-size: 18px;
      font-weight: normal;
      color: #111; }
      .card .header h2 small {
        display: block;
        font-size: 12px;
        margin-top: 5px;
        color: #999;
        line-height: 15px; }
        .card .header h2 small a {
          font-weight: bold;
          color: #777; }
    .card .header .col-xs-12 h2 {
      margin-top: 5px; }
  .card .body {
    font-size: 14px;
    color: #555;
    padding: 20px; }
    .card .body .col-xs-1,
    .card .body .col-sm-1,
    .card .body .col-md-1,
    .card .body .col-lg-1 {
      margin-bottom: 20px; }
    .card .body .col-xs-2,
    .card .body .col-sm-2,
    .card .body .col-md-2,
    .card .body .col-lg-2 {
      margin-bottom: 20px; }
    .card .body .col-xs-3,
    .card .body .col-sm-3,
    .card .body .col-md-3,
    .card .body .col-lg-3 {
      margin-bottom: 20px; }
    .card .body .col-xs-4,
    .card .body .col-sm-4,
    .card .body .col-md-4,
    .card .body .col-lg-4 {
      margin-bottom: 20px; }
    .card .body .col-xs-5,
    .card .body .col-sm-5,
    .card .body .col-md-5,
    .card .body .col-lg-5 {
      margin-bottom: 20px; }
    .card .body .col-xs-6,
    .card .body .col-sm-6,
    .card .body .col-md-6,
    .card .body .col-lg-6 {
      margin-bottom: 20px; }
    .card .body .col-xs-7,
    .card .body .col-sm-7,
    .card .body .col-md-7,
    .card .body .col-lg-7 {
      margin-bottom: 20px; }
    .card .body .col-xs-8,
    .card .body .col-sm-8,
    .card .body .col-md-8,
    .card .body .col-lg-8 {
      margin-bottom: 20px; }
    .card .body .col-xs-9,
    .card .body .col-sm-9,
    .card .body .col-md-9,
    .card .body .col-lg-9 {
      margin-bottom: 20px; }
    .card .body .col-xs-10,
    .card .body .col-sm-10,
    .card .body .col-md-10,
    .card .body .col-lg-10 {
      margin-bottom: 20px; }
    .card .body .col-xs-11,
    .card .body .col-sm-11,
    .card .body .col-md-11,
    .card .body .col-lg-11 {
      margin-bottom: 20px; }
    .card .body .col-xs-12,
    .card .body .col-sm-12,
    .card .body .col-md-12,
    .card .body .col-lg-12 {
      margin-bottom: 20px; }
    h1{
      font-size: 18pt;
    }
	</style>
	
  </head>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0 bg-purple" style="padding: 0px;">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="<?php echo base_url('/'); ?>"><img class="img-responsive" style="width: 80px; heigth: 80px;" src="<?php echo base_url('public/images/logo.png'); ?>" alt=""></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex pull-right">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div style="width: 60px; heigth : 60px;" class="icon bg-white mr-2 d-flex justify-content-center align-items-center" style="border-left: 3px solid #3ea0ab;"><span class="icon-map"></span></div>
						    <span style="font-size: 9pt;" class="text"><?php echo $address; ?></span>
					    </div>
					    <div class="col-md-4 pr-4 d-flex topper align-items-center">
					    	<div style="width: 80px; heigth : 50px;" class="icon bg-white mr-2 d-flex justify-content-center align-items-center" style="border-left: 3px solid #3ea0ab;"><span class="icon-paper-plane"></span></div>
						    <span style="font-size: 9pt;" class="text"><?php echo $email; ?></span>
					    </div>
					    <div class="col-md-3 pr-3 d-flex topper align-items-center">
					    	<div style="width: 70px; heigth : 50px;" class="icon bg-white mr-2 d-flex justify-content-center align-items-center" style="border-left: 3px solid #3ea0ab;"><span class="icon-phone2"></span></div>
						    <span style="font-size: 9pt;" class="text"><?php echo $phone; ?></span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  	<nav class="navbar navbar-expand-lg navbar-light bg-#3ea0ab ftco-navbar-light" id="ftco-navbar" style="background-color: #16739c;">
	    	<div class="container d-flex align-items-center" style="background-color: #16739c;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        		<span class="oi oi-menu"></span> NAVIGASI
	      		</button>
	      		<p class="button-custom order-lg-last mb-0"><a href="<?php echo base_url('kontak'); ?>" class="btn btn-secondary py-2 px-3"><i class="fa fa-send"></i> Kontak Kami</a></p>
	      		<div class="collapse navbar-collapse" id="ftco-nav" style="background-color: #16739c;">
	        		<ul class="navbar-nav mr-auto">
	        			<li class="nav-item "><a style="text-transform: capitalize; background-color: #003847;" href="<?php echo base_url(); ?>" class="nav-link"><i class="fa fa-home"></i></a></li>
						<li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
							<a class="dropdown-item" href="<?= base_url('profile'); ?>">Profil</a>
							<a class="dropdown-item" href="<?= base_url('profile/struktur-organisasi'); ?>">Struktur Organisasi</a>
							<a class="dropdown-item" href="<?= base_url('profile/sejarah'); ?>">Sejarah</a>
							<a class="dropdown-item" href="<?= base_url('profile/fasilitas-pelayanan'); ?>">Fasilitas Pelayanan</a>
							</div>
						</li>
										
						<li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
							<a class="dropdown-item" href="<?= base_url('dokter'); ?>">Dokter</a>
							<a class="dropdown-item" href="<?= base_url('jadwal-dokter'); ?>">Jadwal Dokter</a>
							<a class="dropdown-item" href="<?= base_url('jadwal-poli'); ?>">Jadwal Poli</a>
							</div>
						</li>
						<li class="nav-item "><a href="<?php echo base_url('berita'); ?>" class="nav-link">Berita</a></li>
						<li class="nav-item "><a href="<?php echo base_url('galeri'); ?>" class="nav-link">Galeri</a></li>
						<?php foreach($navigation->result() as $nav){ ?>
						<li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nav->title; ?></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
							<?php
							$navigation = $nav->id_navigation;  
							$this->db->where('id_navigation', $navigation);
							$statis = $this->db->get('static_pages'); ?>
							<?php foreach($statis->result() as $row){ ?> 
							<a class="dropdown-item" href="<?= base_url('pages/statis/').$row->url; ?>"><?php echo $row->title_pages; ?></a>
							<?php } ?>
						</div>
						</li>	
										
						<?php  } ?>
						<li class="nav-item"><a href="<?php echo base_url('info-karir'); ?>" class="nav-link">Karir</a></li>
					</ul>
	      		</div>
	    	</div>
		</div>
	</nav>
    <!-- END nav -->
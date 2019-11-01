<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title; ?></title>
	  <link rel="shortcut icon" href="<?php echo base_url('public/images/logo.png'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/aos.css">
	  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url('public/'); ?>css/hover-min.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Fjalla+One|ZCOOL+XiaoWei&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar top" style="height: 23pt; font-size: 10pt; padding: 0px; margin:0px;">
      <div class="container">
        <div class="col-md-8 col-xs-12">
          <a><i class="fa fa-phone"></i> +62729 370028</a>  
          <a><i class="fa fa-envelope"></i> rumahsakitkartini@yahoo.com</a>
        </div>
        <div class="col-md4 col-xs-12">
          <a href="" class="btn btn-warning btn-sm pull-right"><i class="fa fa-instagram"></i></a>
          <a href="" class="btn btn-danger btn-sm pull-right"><i class="fa fa-youtube"></i></a>
          <a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-facebook-square"></i></a>
          <a href="" class="btn btn-info btn-sm pull-right"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </nav>
    <nav class="navbar">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-2 col-xs-2 logo">
		    		<a class="navbar-brand" href="<?php echo base_url('/'); ?>"><img class="img-responsive" style="width: 80px; heigth: 80px; margin-top: 9px;" src="<?php echo base_url('public/images/logo.png'); ?>" alt=""></a>
          </div>
          <div class="col-md-10 col-xs-8 company-name">
            <div class="title"  style="margin-left: 15px;">
              <h1 style="font-family: 'Staatliches', cursive; font-size: 25pt;">RUMAH SAKIT UMUM KARTINI</h1>
              <p style="margin-top: -7%; font-family: 'Staatliches', cursive; font-size: 20pt;">Berkarya Dalam Kasih</p>
              <p style="margin-top: -8%; font-size: 10pt;">Jl. Kartini No. 104 Kalirejo - Lampung Tengah</p>
            </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  <nav class="navbar navbar-expand-lg navbar-light  ftco-navbar-light bg-primary" id="ftco-navbar" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span></button>
	      	<p class="button-custom order-lg-last mb-0"><a href="<?php echo base_url('kontak'); ?>" class="btn btn-secondary btn-sm py-2 px-3"><i class="fa fa-send"></i> Kontak Kami</a></p>
	      	<div class="collapse navbar-collapse bg-primary" id="ftco-nav">
	        	<ul class="navbar-nav mr-auto">
	        		<li class="nav-item "><a href="<?php echo base_url(); ?>" class="nav-link"><i class="fa fa-home"></i> Home</a></li>
              <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
                  <a class="dropdown-item" href="<?= base_url('profile'); ?>">Profil</a>
                  <a class="dropdown-item" href="<?= base_url('profile/struktur-organisasi'); ?>">Struktur Organisasi</a>
                  <a class="dropdown-item" href="<?= base_url('profile/sejarah'); ?>">Sejarah</a>
                  <a class="dropdown-item" href="<?= base_url('profile/fasilitas-pelayanan'); ?>">Fasilitas & Pelayanan</a>
                  <a class="dropdown-item" href="<?= base_url('profile/fasilitas-pelayanan'); ?>">Sumber Daya Manusia</a>
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
		</div>
	</nav>
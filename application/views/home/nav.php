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
  <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crete+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crete+Round|Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300&display=swap" rel="stylesheet">
  <style type="text/css">

    .hvr-sweep-to-top:hover{
      background-color: yellow;
      cursor: pointer;
    }
    .hvr-sweep-to-top:after{
      color: blue;
      border-radius: 100px;
    }

    .box .panel{
      min-height: 500px;
    }

    .profile-data{
      margin-top: 10px;
    }

    .table{
      height: 10px;
    }

    tr{
      heigth: 10px;
    }

    .radius-card-home{
      border-radius: 10px;

    }
    .radius-card-news{
      min-height: 350px;

    }

    .btn-read:hover{
      background-color: white;
      border: 2px solid blue;
      color: black;
    }

      /* .radius-card-home{
        padding-top: 30px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 30px;
        width: 100%;
        } */

        .radius-card-home:hover{
          cursor: pointer;
        }

        .radius-card-news:hover{
          cursor: pointer;
        }
        .hv-rounded{
          border-radius: 10px;
        }

        .title-section{
          font-size: 16pt;
          margin-bottom: -10px;
        }

        
      </style>
    </head>
    <body>

      <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
       <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
         <div class="col-lg-2 pr-4 align-items-center">
          <img src="<?php echo base_url('public/images/logo.png'); ?>" alt="" style="margin-left: 7%; height: 70px; width:70px; align: center;">
          <a class="navbar-brand" style="font-size: 12pt;" href="<?php echo base_url('/'); ?>">RSU<span>KARTINI</span></a>
        </div>
        <div class="col-lg-10 d-none d-md-block">
          <div class="row d-flex">
           <div class="col-md-4 pr-4 d-flex topper align-items-center">
            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-home"></span></div>
            <span class="text" style="font-family: 'Bitter', serif;">Jl. Kartini No. 104 Kalirejo, Lampung Tengah - Lampung</span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-envelope"></span></div>
            <span class="text" style="font-family: 'Bitter', serif;">rumahsakitkartini@yahoo.com</span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-phone"></span></div>
            <span class="text" style="font-family: 'Bitter', serif;">Phone: + 1235 2355 98</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-purple ftco-navbar-light" id="ftco-navbar" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
 <div class="container d-flex align-items-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span></button>
  <p class="button-custom order-lg-last mb-0"><a href="<?php echo base_url('kontak'); ?>" class="btn btn-secondary btn-sm py-2 px-3"><i class="fa fa-send"></i> Kontak Kami</a></p>
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link"> Home</a></li>
     <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Profil</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
        <a class="dropdown-item" href="<?= base_url('profile/sejarah'); ?>">Sejarah</a>
        <a class="dropdown-item" href="<?= base_url('profile'); ?>"> Profil</a>
        <a class="dropdown-item" href="<?= base_url('profile/struktur-organisasi'); ?>">Struktur Organisasi</a>
        <a class="dropdown-item" href="<?= base_url('profile/fasilitas-dan-pelayanan'); ?>">Fasilitas & Pelayanan</a>
        
      </div>
    </li> 	
    <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter & Jadwal</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
        <a class="dropdown-item" href="<?= base_url('dokter'); ?>">Profile Dokter</a>
        <a class="dropdown-item" href="<?= base_url('jadwal-dokter'); ?>">Jadwal Dokter</a>
        <a class="dropdown-item" href="<?= base_url('jadwal-poli'); ?>">Jadwal Poli</a>
      </div>
    </li>
    <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi Terkini</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 0px; padding:0px;">
        <?php foreach($category->result() as $row){ ?>
        <a class="dropdown-item" href="<?= base_url('post/').$row->category_link; ?>"> <?php echo $row->category_name; ?></a>
        <?php } ?>
      </div>
    </li>   
    <li class="nav-item "><a href="<?php echo base_url('galeri'); ?>" class="nav-link"> Galeri</a></li>
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
    <li class="nav-item"><a href="<?php echo base_url('info-karir'); ?>" class="nav-link"> Karir</a></li>
  </ul>
</div>
</div>
</div>

</div>

</nav>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />
  <title><?= $title ?></title>
  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/css/custom.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/sweetalert/sweetalert2.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <style>
    .to_do li a{
      text-transform: uppercase;
    }
    ::-webkit-scrollbar {
      width: 10px;
      border-radius: 10%;
    }
    ::-webkit-scrollbar-track {
      background: white;
    }
    ::-webkit-scrollbar-thumb {
      background: white;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: orange;
    }
   .btn{
      border: 0px;
      border-radius: 0px;
    }

    .card{
      padding: 0px;
      border: 1px solid #ddd;
    }
    .card-home{
      padding: 10px;
    }

    .btn-home{
      border-radius: 55%;
    }

    .card-header{
      text-align: center;
    }

    .card-body{
      padding: 10px;
      background : #fff;
    }

    .quick-action{
      margin-top: 60px;
    }

    .panel-heading{
      background-color: green;
    }

    @media only screen and (max-width: 600px) {
      body {
        background-color: lightblue;
      }
      .quick-action{
        margin-top: 100px;
        padding-left: 10px;
        padding-right: 10px;
      }
    }
  </style>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-globe"></i> <span>RSU KARTINI</span></a>
          </div>

          <div class="clearfix"></div>
          <div class="profile clearfix text-center">
            <div class="profile_pic text-center">
              <img style="margin-left: 80px;" src="<?php echo base_url(); ?>public/images/logo.png" alt="..." class="img-circle profile_img">
            </div>
            
          </div>
          <br />
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                <li><a href="<?= base_url('admin/statistik'); ?>"><i class="fa fa-bar-chart"></i> Statistik </a></li>
                <li><a><i class="fa fa-edit"></i> Posting <span class="fa fa-plus"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?= base_url('admin/news'); ?>"> Posting</a></li>
                    <li><a href="<?= base_url('admin/galeri'); ?>"> Galeri</a></li>
                    <li><a href="<?= base_url('admin/komentar'); ?>"> Komentar</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url('admin/navigation-static-pages'); ?>"><i class="fa fa-clone"></i> Navigasi & Halaman </a>
                  <li>
                    <a><i class="fa fa-stethoscope"></i> Kelola <span class="fa fa-plus"></span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/facilities'); ?>">Fasilitas</a></li>
                      <li><a href="<?= base_url('admin/services'); ?>">Pelayanan</a></li>
                      <li><a href="<?= base_url('admin/doctor'); ?>">Dokter</a></li>
                      <li><a href="<?= base_url('admin/doctor/schedule'); ?>">Jadwal Dokter</a></li>
                      <li><a href="<?= base_url('admin/polyclinic'); ?>">Poliklinik</a></li>
                      <li><a href="<?= base_url('admin/polyclinic/schedule'); ?>">Jadwal Poli</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-hospital-o"></i> Profil <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/profil'); ?>">Profil</a></li>
                      <li><a href="<?= base_url('admin/visi-misi'); ?>">Visi & Misi</a></li>
                      <li><a href="<?= base_url('admin/sejarah'); ?>">Sejarah</a></li>
                      <li><a href="<?= base_url('admin/struktur-organisasi'); ?>">Struktur Organisasi</a></li>
                      <li><a href="<?= base_url('admin/about'); ?>">Tentang Kami</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url('admin/career'); ?>"><i class="fa fa-briefcase"></i> Info Karir</a></li>
                  <li><a href="<?= base_url('admin/inbox'); ?>"><i class="fa fa-envelope"></i> Pesan Masuk</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a href="<?php echo base_url('admin/pengaturan'); ?>" data-toggle="tooltip" data-placement="top" title="Pengaturan"><span class="fa fa-gear" aria-hidden="true"></span></a>
              <a href="<?php echo base_url('/'); ?>" data-toggle="tooltip" data-placement="top" title="Lihat Website"><span class="fa fa-globe" aria-hidden="true"></span></a>
              <a href="<?php echo base_url('admin/password/change'); ?>" data-toggle="tooltip" data-placement="top" title="Ganti Sandi"><span class="fa fa-key"></span></a>
              <a href="<?php echo base_url('admin/logout'); ?>" data-toggle="tooltip" data-placement="top" title="Keluar" href="login.html"><span class="fa fa-sign-out" aria-hidden="true"></span></a>
            </div>
          </div>
        </div>

        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?php echo $messages_new_counter; ?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php foreach($messages_new->result() as $row){ ?>
                      <li>
                        <a>
                          <span>
                            <span><b><?php echo $row->name; ?></b></span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            <?php echo $row->messages_content; ?>
                          </span>
                        </a>
                      </li>
                    <?php } ?>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Lihat Semua Pesan</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

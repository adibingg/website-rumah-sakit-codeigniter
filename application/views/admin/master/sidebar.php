<!DOCTYPE html>
<html lang="en">
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

    <link href="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <style>
      .to_do li a{
        text-transform: uppercase;
      }
      ::-webkit-scrollbar {
        width: 5px;
      }
      ::-webkit-scrollbar-track {
        background: white;
      }
      ::-webkit-scrollbar-thumb {
        background: green;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
      .btn{
        border: 0px;
        border-radius: 0px;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-globe"></i> <span>RSU Kartini</span></a>
            </div>

            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>public/images/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span></span>
                <h2><?php echo $this->session->userdata('admin_name'); ?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li><a href="<?= base_url('admin/statistik'); ?>"><i class="fa fa-bar-chart"></i> Statistik </a></li>
                  <li><a><i class="fa fa-edit"></i> Konten <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/news'); ?>"> Berita</a></li>
                      <li><a href="<?= base_url('admin/galeri'); ?>"> Galeri</a></li>
                      <li><a href="<?= base_url('admin/komentar'); ?>"> Komentar</a></li>
                    </ul>
                  </li>
                  <li><a href="halaman-statis"><i class="fa fa-clone"></i> Navigasi & Halaman </a>
                  <li>
                    <a><i class="fa fa-stethoscope"></i> Kelola <span class="fa fa-plus"></span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/dokter'); ?>">Dokter</a></li>
                      <li><a href="<?= base_url('admin/dokter/jadwal'); ?>">Jadwal Dokter</a></li>
                      <li><a href="<?= base_url('admin/jadwal-poli'); ?>">Jadwal Poli</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-hospital-o"></i> Profil <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/profil'); ?>">Profil</a></li>
                      <li><a href="<?= base_url('admin/fasilitas'); ?>">Fasilitas</a></li>
                      <li><a href="<?= base_url('admin/services'); ?>">Pelayanan</a></li>
                      <li><a href="<?= base_url('admin/visi-misi'); ?>">Visi & Misi</a></li>
                      <li><a href="<?= base_url('admin/sejarah'); ?>">Sejarah</a></li>
                      <li><a href="<?= base_url('admin/struktur-organisasi'); ?>">Struktural</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url('admin/info-karir'); ?>"><i class="fa fa-briefcase"></i> Info Karir</a></li>
                  <li><a><i class="fa fa-refresh"></i> Log <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/login-tracker'); ?>">Tracker Login</a></li>
                      <li><a href="<?= base_url('admin/log'); ?>">Log Aktivitas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gears"></i> Pengaturan <span class="fa fa-plus"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/display'); ?>">Tampilan</a></li>
                      <li><a href="<?= base_url('admin/pengaturan/identitas-website'); ?>">Identitas Website</a></li>
                      <li><a href="<?= base_url('admin/pengaturan'); ?>">Pengaturan</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url('admin/about'); ?>"><i class="fa fa-info-circle"></i> Tentang Website</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings"><span class=" glyphicon-cog" aria-hidden="true"></span></a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen"><span class="glyphicon glyphicon-" aria-hidden="true"></span></a>
              <a data-toggle="tooltip" data-placement="top" title="Lock"><span class="glyphicon glyphicon-eye-" aria-hidden="true"></span></a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html"><span class="glyphicon glyphicon-signout" aria-hidden="true"></span></a>
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
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

<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="<?= base_url('admin/galeri/tambah_album'); ?>" class="btn btn-success"><i class="fa fa-file-image-o"></i> Tambah Menu Navigasi</a>
                    <a href="" class="btn btn-success"><i class="fa fa-camera-retro"></i> Tambah Halaman</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">

                      <p>Klik menu navigasi untuk menampilkan halaman statis</p>

                      <div class="">
                    <ul class="to_do">
                      <li>
                      <a href="#" id="menu">Home</a>
                      </li>
                      <li>
                      <a href="">Profil</a>
                      </li>
                      <li>
                      <a href="">Dokter</a>
                      </li>
                      <li>
                      <a href="">Berita</a>
                      </li>
                      <li>
                      <a href="">Galeri</a>
                      </li>
                      <?php foreach($navigation->result() as $nav){ ?>
                      <li>
                        <a href="#" id="id"><?php echo $nav->title; ?></a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                      
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
<?php $this->load->view('admin/master/footer'); ?>
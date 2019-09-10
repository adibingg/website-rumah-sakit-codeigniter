<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="<?= base_url('admin/tambah-navigasi'); ?>" class="btn btn-primary"> Tambah Menu Navigasi</a>
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
                    <ul class="to_do">
                      <li><a href="#" id="menu">Beranda</a><a class="btn btn-danger btn-xs pull-right">default</a></li>
                      <li><a href="#">Tentang Kami</a><a class="btn btn-danger btn-xs pull-right">default</a></li>
                      <li><a href="#">Dokter</a><a class="btn btn-danger btn-xs pull-right">default</a></li>
                      <li><a href="#">Berita</a> <a class="btn btn-danger btn-xs pull-right">default</a></li>
                      <li><a href="#">Galeri</a> <a class="btn btn-danger btn-xs pull-right">default</a></li>
                      <?php foreach($navigation->result() as $nav){ ?>
                      <li>
                        <a href="#" id="nav-item" type="button" data-toggle="collapse" data="<?php echo $nav->id_navigation; ?>" data-target="#<?php echo $nav->link; ?>" aria-expanded="false"aria-controls="contentId" style="margin-bottom: 9px;"><?php echo $nav->title; ?></a>
                        <a href="<?php echo base_url('admin/halaman/delete_nav/').$nav->id_navigation; ?>" class="btn btn-danger btn-xs pull-right hapus">Hapus</a>
                        <a href="<?php echo base_url('admin/halaman/update_nav/').$nav->id_navigation; ?>" class="btn btn-success btn-xs pull-right">Perbaharui</a>
                        <div class="collaps" id="<?php echo $nav->link; ?>" style="margin-top: 20px">
                          <ul class="list-group">
                            <?php 
                              $navigasi = $nav->id_navigation;
                              $this->db->where('id_navigation', $navigasi);
                              $statis = $this->db->get('static_pages');
                            ?>
                            <?php foreach($statis->result() as $row){ ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              <i class="fa fa-arrow-right"></i> <?php echo $row->title_pages; ?>
                              <a href="<?php echo base_url('admin/halaman/delete_nav').$row->id_navigation; ?>" class="btn btn-danger btn-xs pull-right"><i class="fa fa-trash"></i></a>
                              <a href="" class="btn btn-success btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                            </li>
                            <?php } ?>
                            <a href="<?php echo base_url('admin/halaman/add_pages/').$nav->id_navigation; ?>" class="btn btn-link btn-xs">Tambah Halaman</a>
                          </ul>
                        </div>
                      </li>
                      <?php } ?>
                      

                      <li><a href="">Info Karir</a><a class="btn btn-danger btn-xs pull-right">default</a></li>
                      <li><a href="">Kontak Kami</a><a class="btn btn-danger btn-xs pull-right">default</a></li>
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
<?php $this->load->view('admin/swall'); ?>
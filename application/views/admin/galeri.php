<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="<?= base_url('admin/galeri/tambah_album'); ?>" class="btn btn-success"><i class="fa fa-file-image-o"></i> Tambah Album</a>
                    <a href="<?= base_url('admin/galeri/tambah_foto'); ?>" class="btn btn-success"><i class="fa fa-camera-retro"></i> Tambah Foto</a>
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
                      <div class="col-md-3">
                        <ul class="list-group">
                        <?php foreach($album->result() as $alghazali){ ?>
                          <li class="list-group-item"><a href="<?= base_url('admin/galeri/album/').$alghazali->link; ?>"><?= $alghazali->album_name; ?></a></li>
                        <?php } ?>
                        </ul>
                      </div>

                      <div class="col-md-9">
                      <?php for($i=0; $i<12; $i++){ ?>
                      <div class="col-md-3">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="<?php echo base_url(); ?>assets-admin/images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Snow and Ice Incoming for the South</p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
<?php $this->load->view('admin/master/footer'); ?>
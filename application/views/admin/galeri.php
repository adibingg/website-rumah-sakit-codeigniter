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
                    <a href="<?= base_url('admin/album/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Album</a>
                    <a href="<?= base_url('admin/gallery/add'); ?>" class="btn btn-primary"><i class="fa fa-camera-retro"></i> Tambah Foto</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                    <?php if($this->session->flashdata() == true){ ?>
                      <div class="alert alert-primary bg-primary" role="alert">
                        <b><?php echo $this->session->flashdata('info'); ?></b>
                      </div>
                      <?php }else{ } ?>
                      <div class="col-md-4">
                        <ul class="list-group">
                          <li class="list-group-item"><a href="<?= base_url('admin/galeri'); ?>">Semua Foto</a></li>
                        <?php foreach($album->result() as $alghazali){ ?>
                          <li class="list-group-item"><a href="<?= base_url('admin/galeri/album/').$alghazali->link; ?>"><?= $alghazali->album_name; ?></a> <a href="<?= base_url('admin/album/delete/').$alghazali->album_id; ?>" class="btn btn-default btn-xs pull-right hapus"><i class="fa fa-remove"></i></a><a href="<?= base_url('admin/album/edit/').$alghazali->album_id; ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-pencil"></i></a></li>
                        <?php } ?>
                        </ul>
                      </div>

                      <div class="col-md-8">
                      <?php foreach($galeri->result() as $gr){ ?>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="<?php echo base_url('uploads/').$gr->images; ?>" alt="image" />
                            <div class="mask">
                              <p><?= $gr->album_name; ?></p>
                              <div class="tools tools-bottom">
                                <a class="btn btn-primary btn-xs" href="<?= base_url('admin/gallery/edit/').$gr->gallery_id; ?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger btn-xs hapus" href="<?= base_url('admin/gallery/delete/').$gr->gallery_id; ?>"><i class="fa fa-trash"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><?= $gr->caption; ?></p>
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
<?php $this->load->view('admin/swall'); ?>
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
             <!--Modal Add Pengguna-->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Unggah Foto</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url('admin/gallery/store'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Caption</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="caption" class="form-control" id="inputUserName" placeholder="Caption" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Foto</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="gambar" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Pilih Album</label>
                                    <div class="col-sm-7">
                                    <select name="id_album" class="form-control">
                                <option value="">Pilih Album</option>
                                <?php foreach($album->result() as $alghazali){ ?>
                                <option value="<?php echo $alghazali->album_id; ?>"><?php echo $alghazali->album_name; ?></option>
                                <?php } ?>
                            </select>
                                        </div>
                            
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="<?= base_url('admin/album/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Buat Album</a>
                    <a href="/#" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#myModal"><span class="fa fa-upload"></span> Unggah Foto</a>                    <ul class="nav navbar-right panel_toolbox">
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
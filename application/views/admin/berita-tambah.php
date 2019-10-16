<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<script src="<?php echo base_url().'tinymce/'?>js/tinymce/tinymce.dev.js"></script>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tulis Artikel</h2>
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
                      <?php echo form_open_multipart('admin/berita/save');?>
                        <div class="col-md-9">
                            <div class="form-group">
                              <label for="">Judul Berita</label>
                              <input type="text" name="judul" id="" class="form-control" placeholder="Judul Berita">
                            </div>
                            <div class="form-group">
                                <label for="">Thumbnail</label>
                                <input type="file" name="gambar" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <?php $this->load->view('admin/editor'); ?>
                                <textarea name="isi" id="" cols="30" rows="20" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Kategori Berita</label>
                              <select name="category_id" id="show-category" class="form-control"> 
                               
                              </select>
                            </div>
                              <div class="form-group">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm1">Tambah Kategori</button>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm2"><i class="fa fa-gear"></i></button>

                              </div>
                              <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                      </button>
                                      <h4 class="modal-title" id="myModalLabel2">Tambah Kategori</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <input type="text" name="category_name" id="" class="form-control" placeholder="Nama Kategori">
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-success">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                      </button>
                                      <h4 class="modal-title" id="myModalLabel2">Kategori</h4>
                                    </div>
                                    <div class="modal-body">
                                      
                                      <ul class="list-group" id="show-cat">
                                        <li class="list-group-item">
                                          Item 1
                                          <a href="" class="btn btn-danger btn-xs pull-right"><i class="fa fa-remove"></i></a>
                                          <a href="" class="btn btn-success btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                        </li>
                                        <li class="list-group-item">
                                          <span class="badge">10</span>
                                          Item 2
                                        </li>
                                        <li class="list-group-item">
                                          <span class="badge">15</span>
                                          Item 3
                                        </li>
                                      </ul>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="">Pilih Tag</label><br>
                                <?php foreach($kategori->result() as $kat){ ?>
                                <input type="checkbox" style="margin-top: 2px;" class="flat" name="" id=""> <?php echo $kat->category_name; ?> <hr style="padding:0px; margin:5px;">
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success"><i class="fa fa-arrow-up"></i> Publishkan</button>
                            </div>
                        </div>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



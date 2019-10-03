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
                    <h2> Perbaharui Halaman Statis</h2>
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
                      <?php echo form_open_multipart('admin/halaman/save_pages');?>
                        <div class="col-md-12">
                            <div class="form-group">
                                 <input type="hidden" name="" value="">
                            </div>
                            <div class="form-group">
                              <label for="">Judul Halaman</label>
                              <input type="text" name="judul" id="" class="form-control" placeholder="Judul Berita">
                            </div>
                            <div class="form-group">
                                <label for="">Thumbnail</label>
                                <input type="file" name="gambar" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <?php $this->load->view('admin/editor'); ?>
                                <textarea name="isi" cols="20" rows="20" class="form-control"></textarea>
                            </div>
                      
                       
                           
                            <div class="form-group">
                                <button class="btn btn-success">Simpan Halaman</button>
                                <button class="btn btn-danger">Reset</button>
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



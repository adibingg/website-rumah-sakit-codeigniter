<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Profil Rumah Sakit</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                    <div class="x_content">
                    <?php if($this->session->flashdata() == true){ ?>
                      <div class="alert alert-primary bg-primary" role="alert">
                        <b><?php echo $this->session->flashdata('info'); ?></b>
                      </div>
                      <?php }else{ } ?>
                    <?php foreach($profile->result() as $row){ ?>
                        <?php echo form_open_multipart('admin/profil/update_struktural'); ?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                <input type="file" class="form-control" name="gambar" placeholder="Pilih Gambar">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Perbaharui</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo base_url('/uploads/').$row->struktur; ?>" alt="" class="img-responsive">
                        </div>
                        <?php echo form_close(); ?>
                    <?php } ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



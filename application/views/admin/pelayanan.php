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
                    <h2> <a href="<?= base_url('admin/daftar-pelayanan/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pelayanan</a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                    <div class="x_content">
                    <div class="card-frame" style="padding: 20px;">
                    <?php $card = 4; for($i = 0; $i<$card; $i++){ ?>
                    
                    <div class="card col-md-3" style="">
                      <div class="padding" style="padding: 10px; background-color: #ddd;">
                        <img src="<?php echo base_url('assets-admin/images/media.jpg'); ?>" class="card-img-top img-responsive" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
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
        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



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
                    <h2> <a href="<?= base_url('admin/add-facilities') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Fasilitas</a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                    <div class="x_content">
                    <?php $card = 4; for($i = 0; $i<$card; $i++){ ?>
                    <div class="col-md-3">
                      <div class="card">
                          <img class="img-responsive" src="https://static.republika.co.id/uploads/images/inpicture_slide/siloam-hospitals-group-resmj-membuka-rumah-sakit-ke-32-rs-_180111160724-516.png" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                          <div class="card-footer">
                          <a href="#" class="btn btn-primary btn-sm">Perbaharui</a><a href="#" class="btn btn-danger btn-sm">Hapus</a>
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
        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



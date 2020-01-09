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
          <h2> <a href="<?= base_url('admin/doctor/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Dokter</a></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
       
        <div class="x_content">
        
          <?php if($this->session->flashdata() == true){ 
            echo $this->session->flashdata('info');
          } else{} ?>
         
              



                  <?php foreach($dokter->result() as $row){ ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $row->specialist_name; ?></i></h4>
                            <div class="left col-xs-7">
                              <h2 style="font-size: 10pt;"><?php echo $row->doctor_name; ?></h2>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address: </li>
                                <li><i class="fa fa-phone"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                            <?php if($row->images==''){ ?>
                          <img style="width: 70px; heigth: 70px;" class="img-circle img-responsive" src="<?php echo base_url('public/images/doctor.png'); ?>" alt="">
                        <?php } else { ?> 
                          <img style="width: 70px; heigth: 70px;" class="img-circle img-responsive" src="<?php echo base_url('uploads/').$row->images; ?>" alt="">
                        <?php } ?>
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> View Profile
                              </button>
                            </div>
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
<?php $this->load->view('admin/swall'); ?>
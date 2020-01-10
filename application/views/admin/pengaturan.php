<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><i class="fa fa-gear"></i> Pengaturan</h2>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
         <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center">
                <i class="fa fa-gears text-info" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="<?php echo base_url('admin/banner'); ?>" class="btn btn-default">Banner Halaman Utama</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center">
              <i class="fa fa-gears text-info" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="<?php echo base_url('pengaturan/stati_sidebar'); ?>" class="btn btn-default">Banner Sidebar</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center">
              <i class="fa fa-gears text-info" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="<?php echo base_url('pengaturan/pengguna'); ?>" class="btn btn-default">Pengguna</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center text-info">
              <i class="fa fa-gears" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="<?php echo base_url('pengaturan/more'); ?>" class="btn btn-default">Pengaturan Lain</a>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </div>
</div>
</div>
</div>
<!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



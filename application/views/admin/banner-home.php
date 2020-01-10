<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <a href="<?php echo base_url('admin/banner/create'); ?>" class="btn btn-success btn-sm">Buat Entri Baru</a>

          <div class="clearfix"></div>
        </div>

        <div class="x_content">
        <?php foreach($banner_home->result() as $row){ ?>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
            <div class="card hvr-sweep-to-top">
                <div class="card-body text-center">
                    <i class="fa <?php echo $row->icon; ?> text-info" style="font-size: 30pt; text-align:center;"></i>
                    <p><?php echo $row->title_pages; ?></p>
                    <hr>
                    <a href="<?php echo base_url('admin/banner/edit/').$row->id_static_pages; ?>" class="btn btn-primary btn-sm">Perbaharui</a>
                    <a href="<?php echo base_url('admin/banner/delete/').$row->id_static_pages; ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
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
<?php $this->load->view('admin/swall'); ?>



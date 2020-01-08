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
          <h2> <a href="<?= base_url('admin/facilities/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Fasilitas</a></h2>
          
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
<?php echo $this->session->flashdata('info'); ?>
        <div class="x_content">
          <?php foreach($facilities->result() as $row){ ?>
            <div class="col-md-3">
              <div class="card" style="min-height: 250px; 
              padding: 10px;
              box-shadow: 5px 10px 8px #ddd; border-radius: 10px;">
              <img class="img-responsive" src="<?php echo base_url('uploads/').$row->images; ?>" style="width: 100%;" />
              <div class="card-body bg-info">
                <h5 class="card-title"><?php echo $row->facilities_name; ?></h5>
                <p class="card-text"><?php echo $row->description; ?></p>
              </div>
              <div class="card-footer">
                <a href="<?php echo base_url('admin/facilities/edit/').$row->facilities_id; ?>" class="btn btn-success btn-sm">Perbaharui</a>
                <a href="<?php echo base_url('admin/facilities/delete/').$row->facilities_id; ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
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



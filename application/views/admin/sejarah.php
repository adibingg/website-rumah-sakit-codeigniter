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
          <h2> Visi Misi Rumah Sakit</h2>
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
  <div class="row">
    
    <form action="<?php echo base_url('admin/profil/update_sejarah'); ?>" method="post">
      <?php foreach($profile->result() as $row){ ?>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <input type="hidden" name="id" value="<?php echo $row->id; ?>">
          <div class="form-group">
            <label for="">Sejarah</label>
            <?php $this->load->view('admin/editor'); ?>
            <textarea name="sejarah" id="" cols="30" rows="10" class="form-control"><?php echo $row->sejarah; ?></textarea>
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </div>
    <div class="col-md-2"></div>
<?php } ?>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



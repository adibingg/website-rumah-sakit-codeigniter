<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<script src="<?php echo base_url().'tinymce/'?>js/tinymce/tinymce.dev.js"></script>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
      </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      
  
<div class="x_content">
    <div class="row">
      <?php echo form_open_multipart('admin/sidebar/store');?>
      <div class="col-md-12">
        <div class="form-group">
          <input type="hidden" name="id" value="123">
      </div>
      <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="judul" class="form-control" placeholder="Judul">
      </div>
      
      <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" name="gambar" id="" class="form-control">
    </div>
    <div class="form-group">
        <?php $this->load->view('admin/editor'); ?>
        <textarea name="isi" cols="20" rows="20" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
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


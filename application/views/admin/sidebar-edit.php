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
        <?php foreach($sidebar->result() as $row){ ?>
      <?php echo form_open_multipart('admin/sidebar/update');?>
      <div class="col-md-12">
        <div class="form-group">
            <input type="text" name="id_update" value="<?php echo $row->id_static_pages; ?>">
          <input type="hidden" name="id" value="123">
      </div>
      <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="judul" class="form-control" value="<?php echo $row->title_pages; ?>">
      </div>
      <div class="form-group">
          <label for="">Icon</label>
          <input type="text" name="icon" class="form-control" value="<?php echo $row->icon; ?>">
          <button type="button" class="btn btn-link btn-xs" id="icon-select">Pilih icon</button>
      </div>
      <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" name="gambar" id="" class="form-control">
    </div>
    <div class="form-group">
        <?php $this->load->view('admin/editor'); ?>
        <textarea name="isi" cols="20" rows="20" class="form-control"><?php echo $row->content; ?></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
    </div>
</div>
<?php echo form_close(); ?>
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



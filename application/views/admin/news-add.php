<?php $this->load->view('admin/master/sidebar'); ?>
<script src="<?php echo base_url().'tinymce/'?>js/tinymce/tinymce.dev.js"></script>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
          <div class="row">
            <?php echo form_open_multipart('admin/news/publish');?>
            <div class="card shadow p-3 mb-5 p-3 bg-white rounded col-md-9">
              <div class="form-group">
                <input type="text" name="judul" id="" class="form-control" placeholder="Judul Postingan">
              </div>       
              <div class="form-group">
                <?php $this->load->view('admin/editor'); ?>
                <textarea name="isi" id="" cols="30" rows="20" class="form-control"></textarea>
              </div>
            </div>
            <div class="card col-md-3 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-white rounded" style="padding-left: 10px;">
              <div class="form-group">
                <input type="file" name="gambar" id="source_gambar" class="form-control">
                <img src="<?php echo base_url('public/images/img-preview.png'); ?>" id="tampil-gambar" class="img-responsive" alt="Preview Gambar" />
              </div>
              <div class="form-group">
                <div class='input-group'>
                  <select name="category_id" id="show-category" class="form-control"></select>
                  <span class="input-group-addon"  data-toggle="modal" data-target=".bs-example-modal-sm2">
                    <span class="glyphicon glyphicon-tags"></span>
                 </span>
               </div>
             </div>
             
            <div class="form-group">
              

            </div>
            <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Tambah Kategori</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <input type="text" name="category_name" id="category-name" class="form-control" placeholder="Nama Kategori">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="save-cat" class="btn btn-success">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Kategori</h4>
                  </div>
                  <div class="modal-body">
                    <ul class="list-group" id="show-cat">
                    </ul>
                    <button type="button" class="btn btn-link btn-sm btn-category" data-toggle="modal" data-target=".bs-example-modal-sm1">Tambah Kategori</button>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="form-group">
              <button class="btn btn-success btn-sm">Publishkan</button>
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
<?php $this->load->view('admin/master/footer'); ?>



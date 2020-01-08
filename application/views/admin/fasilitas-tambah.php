<?php $this->load->view('admin/master/sidebar'); ?>
<script src="<?php echo base_url().'tinymce/'?>js/tinymce/tinymce.dev.js"></script>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">                 
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            Tambah Fasilitas
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-md-12">
                <?php echo form_open_multipart('admin/facilities/store'); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Nama Fasilitas</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Nama Fasilitas" required>
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                    <?php $this->load->view('admin/editor'); ?>
                    <textarea name="description" id="" cols="30" class="form-control" rows="5" placeholder="Tambahkan Keterangan"></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Pilih Foto</label>
                    <input type="file" name="gambar" id="source_gambar" class="form-control">
                  </div>
                  <img style="text-align: center;" id="tampil-gambar" class="img-responsive" alt="Silahkan pilih gambar" />
                  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <button class="btn btn-warning">Kembali</button>
                    <button class="btn btn-primary">Simpan</button>
                  </div>  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('admin/master/footer'); ?>
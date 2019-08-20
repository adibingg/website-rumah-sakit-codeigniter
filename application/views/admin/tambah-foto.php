<?php $this->load->view('admin/master/sidebar'); ?>
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
                    Tambah Foto
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                    <div class="col-md-4">
                    <form action="<?php echo base_url('admin/galeri/simpan_album'); ?>" method="post">
                        <div class="form-group">
                            <label for="">Pilih Album</label>
                            <select name="" class="form-control">
                                <option value="">Pilih Album</option>
                                <?php foreach($album->result() as $alghazali){ ?>
                                <option value="<?php echo $alghazali->album_id; ?>"><?php echo $alghazali->album_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Foto</label>
                            <input type="file" name="gambar" id="" class="form-control" placeholder="Nama Album" required>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="" id="" cols="30" class="form-control" rows="10" placeholder="Tambahkan Keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success"><i class="fa fa-save"></i> Unggah Foto</button>
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
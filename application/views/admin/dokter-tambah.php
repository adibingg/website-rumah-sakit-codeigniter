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
                    <h2> Tambah Dokter</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                    <div class="x_content">
                    <?= form_open_multipart('admin/doctor/store'); ?>
                    <div class="form-horizontal form-label-left">
                   
                    <div class='col-sm-4'>
                        Nama Dokter
                        <div class="form-group">
                            <input name="nama" type='text' class="form-control" placeholder="Nama Dokter" />
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        Alamat
                        <div class="form-group">
                            <input name="alamat" type='text' class="form-control" placeholder="Alamat" />
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        Spesialis
                        <div class="form-group">
                        <select name="spesialis_id" class="form-control">
                                <option>Pilih Spesialis</option>
                                <?php foreach($specialist->result() as $row){ ?>
                                <option value="<?= $row->specialist_id; ?>"><?= $row->specialist_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class='col-sm-8'>
                        Biografi Singkat
                        <div class="form-group">
                            <textarea name="bio" class="form-control" rows="9"></textarea>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        Foto
                        <div class="form-group text-center">
                            <input type="file" class="form-control" name="gambar" id="source_gambar" />
                            <img src="<?php echo base_url('public/images/doctor.png'); ?>" id="tampil-gambar" style="width: 150px; height: 150px;"/>
                        </div>
                    </div>
                    <div class='col-sm-12'>
                        <div class="form-group">
                          <button class="btn btn-warning">Kembali</button>
                          <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                     
                      <?= form_close(); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



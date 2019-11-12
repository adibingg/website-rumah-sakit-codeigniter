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
                    <h2> Perbaharui Dokter</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                    <div class="x_content">
                    <?= form_open_multipart('admin/dokter/update'); ?>
                    <?php foreach($doctor_detail->result() as $row){ ?>
                    <div class="form-horizontal form-label-left">
                      <input type="hidden" value="<?php echo $row->doctor_id; ?>" name="id">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Dokter<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->doctor_name; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="alamat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->address; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Spesialis *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="specialist_id" class="form-control">
                                <option value="<?php echo $row->specialist_id; ?>"><?php echo $row->specialist_name; ?></option>
                                <?php foreach($specialist->result() as $sp){ ?>
                                <option value="<?= $sp->specialist_id; ?>"><?= $sp->specialist_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="gambar" class="form-control col-md-7 col-xs-12" type="file">
                          <img class="img-thumbnail img-responsive" style="width: 200px; height: 200px;" src="<?php echo base_url('uploads/').$row->images; ?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      </div>

                      </div>
                    <?php } ?>
                      <?= form_close(); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



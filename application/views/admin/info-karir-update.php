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
                    Tambah Informasi Lowongan Kerja
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                  <ul id="myTab1" class="nav nav-tabs bar_tabs left" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Posisi</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Kualifikasi</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">Persyaratan</a>
                        </li>
                      </ul>
                      <form action="<?php echo base_url('admin/karir/update_karir'); ?>" method="post">
                      <?php foreach($career->result() as $car){ ?>
                      <div id="myTabContent2" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Posisi</label>
                              <input type="hidden" name="id" value="<?= $car->career_id; ?>">
                              <input type="text" name="position" id="" class="form-control" value="<?= $car->position; ?>">
                            </div>
                            <div class="form-group">
                              <label for="">Kategori Karir</label>
                              <select name="career_category" id="" class="form-control" required>
                                <option value="<?php echo $car->career_id; ?>"><?php echo $car->career_category_name; ?></option>
                                <?php foreach($career_category->result() as $row){ ?>
                                <option value="<?php echo $row->id_career_category; ?>"><?php echo $row->career_category_name; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Masa Berlaku</label>
                              <input  type="text" name="valid_until" id="" class="form-control" value="<?= $car->valid_until; ?>">
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Kualifikasi</label>
                              <?php $this->load->view('admin/editor'); ?>
                              <textarea  name="qualification" id="" cols="30" rows="10" class="form-control"><?= $car->qualification; ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Persyaratan</label>
                              <textarea name="requirements" id="" cols="30" rows="10" class="form-control"><?= $car->requirements ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset Form</button>
                          </div>
                        </div>
                      </div>
                                <?php } ?>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



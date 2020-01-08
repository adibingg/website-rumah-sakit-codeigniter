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
                    Tambah Navigasi
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                    <div class="col-md-4">
                    <form action="<?php echo base_url('admin/halaman/saveNav'); ?>" method="post">
                    <?php foreach($navigation->result() as $nav){ ?>
                    <div class="form-group">
                        <label for="">Navigasi</label>
                           <input type="hidden" name="id" value="<?= $nav->id_navigation; ?>">
                           <input type="text" name="navigasi" value="<?= $nav->title; ?>" class="form-control" placeholder="Navigasi" required>
                        </div>
                        <div class="form-group">                        
                        
                        <select name="active" id="" class="form-control">
                           <option selected value="<?= $nav->active; ?>">Aktif</option>
                           <option value="0">Aktif</option>
                           <option value="1">Tidak Aktif</option>
                        </select>

                        </div>  
                        <hr>
                        <div class="form-group">
                            <button class="btn btn-success"><i class="fa fa-save"></i> Simpan Album</button>
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
        </div>
<?php $this->load->view('admin/master/footer'); ?>
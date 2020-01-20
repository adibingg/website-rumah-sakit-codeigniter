<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            <div class="title_left">
                <h3>Tambah Album</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <div class="row">
                    <div class="col-md-12">
                    <form action="<?php echo base_url('admin/album/store'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Album</label>
                            <input type="text" name="album_name" id="" class="form-control" placeholder="Nama Album" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan Album</button>
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
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
                    <h2>Perbaharui Album</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                    <div class="col-md-4">
                    <form action="<?php echo base_url('admin/album/update'); ?>" method="post">
                    <?php foreach($albumfoto->result() as $ai){ ?>
                    <div class="form-group">
                        <label for="">Nama Album</label>
                            <input type="hidden" name="album_id" value="<?= $ai->album_id; ?>">
                            <input type="text" name="album_name" id="" class="form-control" placeholder="Nama Album" required value="<?= $ai->album_name; ?>">
                        </div>
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
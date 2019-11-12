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
                    Perbaharui Kategori Karir
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                    <div class="col-md-4">
                    <form action="<?php echo base_url('admin/karir/update_kategori_karir'); ?>" method="post">
                    <?php foreach($career_category->result() as $row){ ?>
                    <div class="form-group">
                        <label for="">Nama Kategori Karir</label>
                          <input type="hidden" name="id" value="<?php echo $row->id_career_category; ?>">
                          <input type="text" name="nama_kategori_karir" id="" class="form-control" value="<?php echo $row->career_category_name; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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
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
                    <a href="<?= base_url('admin/karir/tambah_kategori_karir'); ?>" class="btn btn-success">Tambah Kategori Karir</a>
                    <a href="<?= base_url('admin/galeri/tambah_informasi_karir'); ?>" class="btn btn-primary">Tambah Informasi Karir</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                    <?php if($this->session->flashdata() == true){ ?>
                      <div class="alert alert-primary bg-primary" role="alert">
                        <b><?php echo $this->session->flashdata('info'); ?></b>
                      </div>
                      <?php }else{ } ?>
                      <div class="col-md-4">
                        <ul class="list-group">
                          <li class="list-group-item"><a href="<?= base_url('admin/galeri'); ?>">Semua Foto</a></li>
                        <?php foreach($career_category->result() as $row){ ?>
                          <li class="list-group-item"><a href="<?php echo base_url(); ?>"><?php echo $row->career_category_name; ?></a></li>
                        <?php } ?>
                        </ul>
                      </div>

                      <div class="col-md-8">
                      <?php foreach($career->result() as $row){ ?>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <div class="mask">
                              <p></p>
                              <div class="tools tools-bottom">
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
<?php $this->load->view('admin/master/footer'); ?>
<?php $this->load->view('admin/swall'); ?>
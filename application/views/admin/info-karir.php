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
            <a href="<?= base_url('admin/career/add'); ?>" class="btn btn-primary">Tambah Informasi Karir</a>
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
              <div class="col-md-3">
                <ul class="list-group">
                  <li class="list-group-item"><a href="<?= base_url('admin/galeri'); ?>">Semua Informasi Karir</a></li>
                  <?php foreach($career_category->result() as $row){ ?>
                    <li class="list-group-item">
                      <a href="<?php echo base_url('admin/update_kategori/'); ?>"><?php echo $row->career_category_name; ?></a>
                      <a href="<?= base_url('admin/karir/hapus_kategori_karir/').$row->id_career_category; ?>" class ="btn btn-default btn-xs pull-right hapus"><i class="fa fa-remove"></i></a>
                      <a href="<?php echo base_url('admin/karir/update_kategori/').$row->id_career_category; ?>" class ="btn btn-default btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                    </li>
                  <?php } ?>
                </ul>
              </div>

              <div class="col-md-9">

                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">No</th>
                      <th class="column-title">Posisi</th>
                      <th class="column-title">Kategori</th>
                      <th class="column-title">Aktif Hingga</th>
                      <th class="column-title no-link last"><span class="nobr"></span>
                      </th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($career->result() as $row){ ?>
                      <tr class="even pointer">
                        <td class=" "><?php echo $no++; ?></td>
                        <td class=" "><?php echo $row->position; ?></td>
                        <td class=" "><?php echo $row->career_category_name; ?></td>
                        <td class=" ">
                          <label for="" class="label label-success"> <?php echo $row->valid_until; ?></td></label>
                          <td class=" last">
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $row->career_id; ?>"><i class="fa fa-eye"></i></button>
                            <a href="<?php echo base_url('admin/karir/hapus_karir/').$row->career_id; ?>" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i></a>
                            <div class="modal fade bs-example-modal-sm<?php echo $row->career_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2"><?php echo $row->position; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4 class="text-center">KUALIFIKASI</h4>
                                    <p><?php echo $row->qualification; ?></p>
                                    <h4 class="text-center">PERSYARATAN</h4>
                                    <p><?php echo $row->requirements; ?></p>
                                    <label class="badge badge-primary text-center">BERLAKU : <?php echo $row->valid_until; ?></label>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    <a class="btn btn-success" href="<?php echo base_url('admin/karir/update_info_karir/').$row->career_id; ?>">Perbaharui</a>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
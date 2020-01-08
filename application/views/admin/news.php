<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
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
                    <a href="<?= base_url('admin/news/create') ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Tulis Baru"></i> Entri Baru</a>
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                  <?php if($this->session->flashdata() == true){ ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong> <i class="fa fa-info"></i> <?php echo $this->session->flashdata('info'); ?></strong>
                      <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php } else{} ?>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" id="myData">
                        <thead>
                          <tr class="headings">
                            <th>#</th>
                            <th class="column-title">Judul </th>
                            <th class="column-title">Tanggal</th>
                            <th class="column-title">Kategori</th>
                            <th class="column-title">Di Tulis</th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                        <?php foreach($berita->result() as $row){ ?>
                          <tr class="even pointer">
                            <td><?= $no++ ?></td>
                            <td class=" "><?= $row->title; ?></td>
                            <td class=" "><?= $row->date_post; ?> </td>
                            <td class=" "><?= $row->category_name; ?> </td>
                            <td class=" "><i class="fa fa-user"></i> <?= $row->admin_name; ?></td>
                            <td class=" ">
                            <?php if($row->status == 'published'){ ?>
                              <label for="" class="label label-success"> <?= $row->status; ?></td></label>
                            <?php } else { ?>
                              <label for="" class="label label-danger"> <?= $row->status; ?></td></label>
                            <?php } ?>
                            
                           
                            <td class="last" width="120">
                                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                <a href="<?= base_url('admin/news/edit/').$row->news_id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('admin/news/delete/').$row->news_id; ?>" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i></a>
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
        <!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>
<?php $this->load->view('admin/swall'); ?>



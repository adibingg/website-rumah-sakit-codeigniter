<?php $this->load->view('admin/master/sidebar'); ?>
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
                      <table class="table table-striped" id="myData">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th class="column-title" width="200">Judul </th>
                            <th class="column-title">Tanggal</th>
                            <th class="column-title">Kategori</th>
                            <th class="column-title">Author</th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr"></span>
                            </th>
                           
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                        <?php foreach($berita->result() as $row){ ?>
                          <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->title; ?></td>
                            <td><?= $row->date_post; ?> </td>
                            <td><?= $row->category_name; ?> </td>
                            <td><i class="fa fa-user"></i> <?= $row->admin_name; ?></td>
                            <td>
                            <?php if($row->status == 'published'){ ?>
                              <label for="" class="label label-success"> <?= $row->status; ?></td></label>
                            <?php } else { ?>
                              <label for="" class="label label-danger"> <?= $row->status; ?></td></label>
                            <?php } ?>
                            <td class="last text-center" width="150">
                                <a href="<?= base_url('baca-berita/').$row->seo; ?>" class="btn btn-link btn-sm"><i class="fa fa-eye"></i> <?php echo $row->view_count; ?></a>
                                <a href="<?= base_url('admin/news/edit/').$row->news_id; ?>" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('admin/news/delete/').$row->news_id; ?>" class="btn btn-link btn-sm hapus"><i class="fa fa-trash"></i></a>
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
<?php $this->load->view('admin/master/footer'); ?>
<?php $this->load->view('admin/swall'); ?>



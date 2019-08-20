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
                    <h2> <a href="<?= base_url('admin/article-create') ?>" class="btn btn-success"><i class="fa fa-pencil-square"></i> Artikel Baru</a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
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
                        <?php foreach($berita->result() as $row){ ?>
                          <tr class="even pointer">
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
                            
                           
                            <td class=" last">
                                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                <a href="<?= base_url('admin/berita/update/').$row->news_id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('admin/berita/delete/').$row->news_id; ?>" id="h.apus_berita" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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



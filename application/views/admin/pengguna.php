<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <a href="<?= base_url('admin/pengguna/tambah_pengguna') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pengguna</a></h2>
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
                            <th>
                            </th>
                            <th class="column-title">Nama</th>
                            <th class="column-title">E-Mail</th>
                            <th class="column-title">Username</th>
                            <th class="column-title">Password</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $no = 1; ?>
                          <?php foreach($pengguna->result() as $row){ ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $row->admin_name; ?></td>
                              <td><?php echo $row->email; ?></td>
                              <td><?php echo $row->username; ?></td>
                              <td>Tidak dapat ditampilkan</td>
                              <td>
                                <a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i></a>
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



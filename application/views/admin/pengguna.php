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
                    <h2> <a href="<?= base_url('admin/users/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Tambah Pengguna</a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div>
                      <table id="myData" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Nama User</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                            <th><span class="nobr">Action</span>
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
                              <td><a class="btn btn-success btn-xs">Aktif</a></td>
                              <td>
                                <a href="<?php echo base_url('admin/users/edit/').$row->id_admin; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"> Perbaharui</i></a>
                                <a href="<?php echo base_url('admin/users/delete/').$row->id_admin; ?>" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"> Hapus</i></a>
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



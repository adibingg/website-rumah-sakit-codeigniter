<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <a href="<?= base_url('admin/polyclinic/schedule/add') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Jadwal Poli</a></h2>
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
                            <th class="column-title">No. </th>
                            <th class="column-title">Nama Poli</th>
                            <th class="column-title">Senin</th>
                            <th class="column-title">Selasa</th>
                            <th class="column-title">Rabu </th>
                            <th class="column-title">Kamis</th>
                            <th class="column-title">Jum'at</th>
                            <th class="column-title">Sabtu</th>
                            <th class="column-title">Minggu </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach($poli_schedule->result() as $row){ ?>
                              <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row->poli_name; ?></td>
                                <td><?php echo $row->senin; ?></td>
                                <td><?php echo $row->selasa; ?></td>
                                <td><?php echo $row->rabu; ?></td>
                                <td><?php echo $row->kamis; ?></td>
                                <td><?php echo $row->jumat; ?></td>
                                <td><?php echo $row->sabtu; ?></td>
                                <td><?php echo $row->minggu; ?></td>
                                <td>
                                  <a href="<?php echo base_url('admin/poli/update/').$row->id_poli_schedule; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                  <a href="<?php echo base_url('admin/poli/delete/').$row->id_poli_schedule; ?>" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i></a>
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



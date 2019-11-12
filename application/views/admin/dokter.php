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
                    <h2> <a href="<?= base_url('admin/dokter/tambah_dokter') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Dokter</a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                  <?php if($this->session->flashdata() == true){ 
                    echo $this->session->flashdata('info');
                  } else{} ?>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                            </th>
                            <th class="column-title">Nama Dokter</th>
                            <th class="column-title">Spesialis</th>
                            <th class="column-title">Alamat</th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php if($dokter->num_rows() < 1){ ?>
                        <?php echo "Belum ada dokter, silahkan tambah data dokter"; ?>
                        <?php }else{ ?>
                        <?php foreach($dokter->result() as $row){ ?>
                          <tr>
                            <td>
                              <?php if($row->images==''){ ?>
                              <img style="width: 70px; heigth: 70px;" class="img-responsive" src="<?php echo base_url('public/images/doctor.png'); ?>" alt="">
                              <?php } else { ?> 
                              <img style="width: 70px; heigth: 70px;" class="img-responsive" src="<?php echo base_url('uploads/').$row->images; ?>" alt="">
                              <?php } ?>
                            </td>
                            <td><?php echo $row->doctor_name; ?></td>
                            <td><span class="badge bg-primary"><?php echo $row->specialist_name; ?></span></td>
                            <td><?php echo $row->address; ?></td>
                            <td>
                              <select name="setstatus" id="" class="form-control" style="text-transform: capitalize;">
                                <option selected value="<?php echo $row->status; ?>"><?php echo $row->status; ?></option>
                                <option value="bertugas">Bertugas</option>
                                <option value="cuti">Cuti</option>
                              </select>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/doctor-update/').$row->doctor_id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('admin/dokter/delete/').$row->doctor_id; ?>" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        <?php } ?>
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



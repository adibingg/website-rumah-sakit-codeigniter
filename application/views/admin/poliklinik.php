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
          <!-- Button trigger modal -->


          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  Tambah Poli
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group" id="poly-name">
                    <label for="" id="nama-poli">Nama Poli</label>
                    <input id="nama_poli" type="text" class="form-control">
                    <input id="poly_id" type="hidden" class="form-control">
                  </div>
                  <div class="form-group">
                    <label id="deskripsi-poli">Deskripsi</label>
                    <textarea row="4" id="deskripsi" type="text" class="form-control"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button id="save-polyclinic" type="button" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Hapus -->
          <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                
                <form class="form-horizontal">
                  <div class="modal-body">

                    <input type="hidden" name="poli_id" id="textkode" value="">
                    <p>Apakah Anda yakin akan menghapus data ini?</p>
                    <h1 id="desc"></h1>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button class="btn_hapus btn btn-danger" id="button_poli_hapus">Hapus</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modelId">
            Tambah Poliklinik
          </button>                    <ul class="nav navbar-right panel_toolbox">
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
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">
                  <th>#</th>
                  <th class="column-title">Nama Poliklinik</th>
                  <th class="column-title">Deskripsi</th>

                  <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                  </th>
                  <th></th>
                </tr>
                <tbody id="show-polyclinic">

                </tbody>
              </thead>

              <tbody>
                <?php $no=1; ?>

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
<?php $this->load->view('admin/ajax/poliklinik'); ?>



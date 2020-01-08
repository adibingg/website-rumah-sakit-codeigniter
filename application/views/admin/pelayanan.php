<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">

    </div>
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            Tambah Pelayanan
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form-service">
                <div class="form-group" id="poly-name">
                  <label for="" >Nama Pelayanan</label>
                  <input type="hidden" id="service_id" name="id">
                  <input name="pelayanan" id="pelayanan" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea row="4" name="deskripsi" id="deskripsi-pelayanan" type="text" class="form-control"></textarea>
                </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            <button id="save-service" type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>  
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modelId">
              Tambah Pelayanan
            </button> </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          
          <div class="x_content">
            <div class="card-frame" style="padding: 20px;">
              <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action" id="myData">
              <thead>
                <tr class="headings">
                  <th>#</th>
                  <th class="column-title">Pelayanan</th>
                  <th class="column-title">Deskripsi</th>

                  <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                  </th>
                  <th></th>
                </tr>
                <tbody id="show-service">

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
</div>
<!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>
<?php $this->load->view('admin/ajax/pelayanan'); ?>


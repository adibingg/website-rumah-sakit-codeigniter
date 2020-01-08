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
            Login History
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td>#</td>
                  <td>Tanggal</td>
                  <td>Username</td>
                  <td>Password</td>
                  <td>Status</td>
                  <td>Address</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach($tracker->result() as $row){ ?>
                <tr>
                  <td><?php echo $row->due_date; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td><?php echo $row->password; ?></td>
                  <td><?php echo $row->status; ?></td>
                  <td><?php echo $row->user_agent; ?></td>
                  <td><?php echo $row->address; ?></td>
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
<?php $this->load->view('admin/master/footer'); ?>
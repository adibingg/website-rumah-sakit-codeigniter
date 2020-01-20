<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                      <a href="" class="btn btn-primary">Semua</a>
                      <a href="" class="btn btn-success">Disetujui</a>
                      <a href="" class="btn btn-danger">Dibuang</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                    <table class="table table-striped projects" id="myData">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Judul Posting</th>
                          <th>Komentar</th>
                          <th style="width: 20%">pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($comments->result() as $row){ ?>
                        <tr>
                          <td></td>
                          <td><?php echo $row->title; ?></td>
                          <td><?php echo $row->comment; ?></td>
                          <td>
                            <a href="/" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Setujui</a>
                            <a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
        </div>
        
<?php $this->load->view('admin/master/footer'); ?>
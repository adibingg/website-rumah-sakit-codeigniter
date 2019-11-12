<?php $this->load->view('admin/master/sidebar'); ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title"></div>
      <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel" style="">
            <div class="x_title">
            <h2>Jadwal Dokter</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            Dokter
            <select class="form-control">
              <option>Pilih Dokter</option>
            </select>
          </div>
          
          <div class='col-sm-3'>
            Senin
            <div class="form-group">
              <div class='input-group date' id='myDatepicker1'>
                <input type='text' class="form-control" placeholder="Jam Mulai" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
              <div class='input-group date' id='myDatepicker2'>
                <input type='text' class="form-control" placeholder="Jam Selesai" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                  </span>
              </div>
            </div>
          </div>
                <div class='col-sm-3'>
                    Selasa
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" placeholder="Jam Mulai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" placeholder="Jam Selesai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-3'>
                    Rabu
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" placeholder="Jam Mulai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" placeholder="Jam Selesai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-3'>
                    Rabu
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" placeholder="Jam Mulai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                               
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" placeholder="Jam Selesai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-3'>
                    Kamis
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" placeholder="Jam Mulai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" placeholder="Jam Selesai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-3'>
                    Jum'at
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" placeholder="Jam Mulai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" placeholder="Jam Selesai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-3'>
                    Minggu
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" placeholder="Jam Mulai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" placeholder="Jam Selesai" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
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



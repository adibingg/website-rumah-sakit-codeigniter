<?php $this->load->view('admin/master/sidebar'); ?>
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">

          <ul class="nav navbar-right panel_toolbox">
            <p>Anda masuk menggunakan : <?php echo $this->session->userdata('admin_name'); ?></p>
          </ul>
          <h2>HALAMAN ADMINISTRATOR</h2>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
         
         
         <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center">
                <i class="fa fa-pencil text-info" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="" class="btn btn-default">Posting Baru</a>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center">
              <i class="fa fa-camera text-info" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="" class="btn btn-default">Unggah Foto</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center">
              <i class="fa fa-briefcase text-info" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="" class="btn btn-default">Info Karir</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 hvr-float" style="padding: 5px;">
          <div class="card hvr-sweep-to-top">
            <div class="card-body text-center text-info">
              <i class="fa fa-user" style="font-size: 30pt; text-align:center;"></i>
              <hr>
             <a href="" class="btn btn-default">Penggunaan</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <h2>POSTING TERBARU</h2>
            <?php $no=0; foreach($latest_news->result() as $row){ ?>
            <div class="alert alert-success" style="margin-bottom: 1px; padding: 5px;">
              <div class="row">
              <div class="col-md-1"><h1><?php echo ++$no; ?></h1></div>
              <div class="col-md-11"> <div class="content">
                <div class="title">
                <p style="font-size: 10pt; font-weight: bold;"><?php echo $row->title; ?></p>
              </div>
                <p><?php 
                  $berita = $row->content; 
                  echo strip_tags(substr($berita,0,70)); 
                  ?></p>
              </div></div>
            </div>
              
             
            </div>
            <?php } ?>
        </div>   
        <div class="col-md-6">
            <h2>KOMENTAR TERBARU</h2>
            <?php $no=0; foreach($latest_news->result() as $row){ ?>
            <div class="alert alert-success" style="margin-bottom: -10px;">
              <div class="row">
              <div class="col-md-1"><h1><?php echo ++$no; ?></h1></div>
              <div class="col-md-11"> <div class="content">
                <div class="title">
                <p style="font-size: 12pt; font-weight: bold;"><?php echo $row->title; ?></p>
              </div>
                <p><?php 
                  $berita = $row->content; 
                  echo strip_tags(substr($berita,0,70)); 
                  ?></p>
              </div></div>
            </div>
              
             
            </div>
            <?php } ?>
        </div>   
      </div>
    </div>

  </div>
</div>
</div>
</div>
<!-- /page content -->
<?php $this->load->view('admin/master/footer'); ?>



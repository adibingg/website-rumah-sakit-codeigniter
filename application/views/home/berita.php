<?php $this->load->view('home/nav'); ?>
<!-- SECTION HEAD -->
<?php $this->load->view('home/bread'); ?>

<!-- SECTION BERITA -->
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-9" style="padding-right: 40px;">
       <div class="row" style="margin-top: -90px;">  
        <?php foreach($news->result() as $blog){ ?>
          <div class="col-md-4 col-sm-6 col-xs-6 hvr-float" style="padding: 7px;">
            <div class="card" style="box-shadow:none; border: none; padding: 10px;">
              <div class="block-20" style="background-image: url('<?= base_url('uploads/').$blog->images; ?>'); height: 200px;">
                <div class="meta-date" style="min-width: 81px;">  
                  <span class="day" style="background-color: #28204f; padding-top: 10px; padding-bottom: 10px; color:white">
                    <?php
                    $date = $blog->date_post;
                    echo strip_tags(substr($date,8,2));
                    ?>
                  </span>

                  <span class="mos" style="background-color: #28204f; padding-top: 10px; padding-bottom: 10px; color:white">
                    <?php 
                    $month = $blog->date_post; 
                    $this_month = strip_tags(substr($month,5,2)); 
                    echo getBulan($this_month); 
                    ?>
                  </span>

                  <span class="yr bg-info" style="padding:10px; color: white;">
                    <?php
                    $year = $blog->date_post;
                    echo strip_tags(substr($year, 0,4));
                    ?>
                  </span>
                </div>
              </div>
              <div class="text bg-white">
                <h3 class="heading" style="font-family: 'Lato', sans-serif; font-size: 12pt; font-weight: bold; color: #28204f;">
                  <a style="font-family: 'Lato', sans-serif; font-size: 12pt; font-weight: bold; color: #28204f;" href="<?php echo base_url('baca-berita/').$blog->seo; ?>">
                    <?php  $berita_title = $blog->title; 
                    echo strip_tags(substr($berita_title,0,60)); 
                    ?>
                  </a>
                </h3>
                <p style="text-align: justify; padding: 0px; margin-top: -12px; margin-bottom: -12px; font-family: 'Lato', sans-serif; font-size: 10pt;"> 
                  <?php 
                  $berita = $blog->content; 
                  echo strip_tags(substr($berita,0,70)); 
                  ?>
                </p>
              </div>
              
            </div>
            <a href="" class="btn btn-info btn-read" style="margin-top: -40px; border-radius: 20px; ">Read More</a>
          </div>

        <?php } ?>
      </div>
      <div class="row no-gutters my-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#"><?php echo $pages; ?></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3" style="margin-top: -90px; padding: 0px;">
      <h5 class="title-sidebar" style="font-family: 'Bitter', serif; font-size: 12pt;">Cari</h5>
      <hr>
      <div class="card" style="box-shadow: none;">
        <form action="<?php echo base_url('post/search'); ?>" method="post">
          <div class="input-group" >
            <input id="email" style="height: 10px;" type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
                        <button type="submit" class="input-group-addon btn btn-info"><i class="fa fa-search"></i></button>

          </div>

        </form>
      </div>
      <h5 class="title-sidebar" style="font-family: 'Bitter', serif; font-size: 12pt;">Kategori</h5>
      <hr>
      <div class="card" style="box-shadow: none;">
      <div class="list-group" style="border: 0px;">
        <?php foreach($category->result() as $ktgr){ ?>
          <a href="#" class="list-group-item list-group-item-action" style="border:0px;"><i class="fa fa-angle-right"></i> <?php echo $ktgr->category_name; ?></a>
        <?php } ?>
      </div>
    </div>
      <div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
        <div class="card-body" style="padding:0px;">
          <img style="width: 100%;" src="https://www.nutriclub.co.id/media/178014/09.-senam-hamil-97-2003_ratio-1_700x278pxl.jpg" alt="">
        </div>
        <div class="card-footer" style="padding: 10px;">
          <h4 style="font-family: 'Bitter', serif; font-size: 12pt;">Senam Ibu Hamil</h4>
        </div>
      </div>
      <div class="card" style="box-shadow: none; padding: 0px; margin-top: 10px;">
        <div class="card-body" style="padding:0px;">
          <img style="width: 100%;" src="https://www.nutriclub.co.id/media/178014/09.-senam-hamil-97-2003_ratio-1_700x278pxl.jpg" alt="">
        </div>
        <div class="card-footer" style="padding: 10px;">
          <h4 style="font-family: 'Bitter', serif; font-size: 12pt;">Senam Ibu Hamil</h4>
        </div>
      </div>
    </div>
  </div>


</section>
<?php $this->load->view('home/footer'); ?>

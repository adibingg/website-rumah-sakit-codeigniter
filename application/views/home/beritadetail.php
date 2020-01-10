<?php $this->load->view('home/nav') ?>
<?php $this->load->view('home/bread'); ?>

<section class="ftco-section" style="margin-top: -100px;">
 <div class="container">
  <div class="row">
    <div class="col-lg-8 ftco-animate">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12 card" style="padding-left: 5%; padding-bottom: 100px; padding-right: 5%; padding-top: 20px; box-shadow:none; border: none;">
            <?php foreach($news_rows->result() as $row){ ?>
              <div class="meta" style="color: #ddd;">
                <a style="color: #000; font-size: 11pt;" href="#"><span class="icon-calendar"></span> <span class="day"><?php $date = $row->date_post; echo strip_tags(substr($date,8,2)); ?></span>
                  <span class="mos"><?php $month = $row->date_post; $this_month = strip_tags(substr($month,6,7)); echo getBulan($this_month); ?></span>
                  <span class="yr"><?php $year = $row->date_post; echo strip_tags(substr($year, 0,4)); ?></span></a>
                  <a style="color: #000; font-size: 11pt;" href="#"><span class="icon-person"></span> Dave Lewis</a>
                  <a style="color: #000; font-size: 11pt;" href="#"><span class="icon-chat"></span> 19</a>
                </div>
                <img class="img-responsive" style="width: 100%;" src="<?= base_url('uploads/').$row->images; ?>" alt="<?= $row->title; ?>">
                <p><i class="fa fa-share"></i>
                  <a href="" class="btn btn-success"><i class="fa fa-whatsapp"></i></a><a href="" class="btn btn-primary"><i class="fa fa-facebook-square"></i></a><a href="" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                </p>
                <p style="text-align:justify;"><?= $row->content; ?></p>
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

          
              <?php
              $where = $row->category_id; 
              $this->db->select('*');
              $this->db->where('category_id', $where);
              $this->db->limit('5');
              $this->db->order_by('date_post', 'asc');
              $news_list = $this->db->get('news')
              ?>
              <?php foreach($news_list->result() as $nl){ ?>
                <div class="card" style="box-shadow:none; padding: 20px;">
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('/uploads/').$nl->images; ?>);"></a>
                  <div class="text">
                    <h3 class="heading"><a style="font-size: 10pt;" href="<?php echo base_url('baca-berita/').$nl->seo; ?>"><?php echo $nl->title; ?></a></h3>
                    <div class="meta">
                   
                    </div>
                  </div>
                </div></div>
              <?php } ?>
            
          <?php } ?>
        </div>
      </div>
    
</section>
<?php $this->load->view('home/footer'); ?>
<?php $this->load->view('home/nav') ?>
<?php $this->load->view('home/bread'); ?>

<section class="ftco-section" style="margin-top: -100px;">
 <div class="container">
  <div class="row">
    <div class="col-lg-8 ftco-animate">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12 card" style="padding-left: 5%; padding-bottom: 100px; padding-right: 5%; padding-top: 20px; box-shadow:none;">
            <?php foreach($news_rows->result() as $row){ ?>
              <h2 class="mb-3" style="font-size: 19pt; font-family: 'Fjalla One', sans-serif; text-transform: capitalize;"><?php echo $row->title; ?></h2>
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

        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box bg-white">
            <form action="#" class="search-form bg-white">
              <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Cari Berita, Artikel dan Tips Sehat">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate" style="margin-top: -60px;">
            <div style="padding: 0px; border: 0px;">
              <div class="list-group" style="border: 0px;">
                <?php foreach($category->result() as $ktgr){ ?>
                  <a href="#" class="list-group-item list-group-item-action" style="border:0px;">Active item</a>
                <?php } ?>
              </div>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <div class="sidebar-title">
              <h3>Informasi Yang Sama</h3>
              <div class="border-small" style="border-bottom : 6px solid #8ac4ff; width: 100px; margin-top: -11px; margin-bottom: 5px;"></div>
            </div>
            <div class="card" style="background-color: #fafafa; box-shadow:none; padding: 20px;">
              <?php
              $where = $row->category_id; 
              $this->db->select('*');
              $this->db->where('category_id', $where);
              $this->db->limit('5');
              $this->db->order_by('date_post', 'asc');
              $news_list = $this->db->get('news')
              ?>
              <?php foreach($news_list->result() as $nl){ ?>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('/uploads/').$nl->images; ?>);"></a>
                  <div class="text">
                    <h3 class="heading"><a style="font-size: 9pt;" href="<?php echo base_url('baca-berita/').$nl->seo; ?>">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><a style="font-size: 9pt;" href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('home/footer'); ?>
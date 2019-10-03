<?php $this->load->view('home/nav') ?>
  		<section class="ftco-section" style="margin-top: -100px;">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <div class="col-md-12">
              <div class="row">
              <div class="col-md-2">
                <a style="font-size: 9pt; width: 100px; text-align: left;" href="" class="btn btn-primary btn-xs no-radius"><i class="fa fa-facebook"></i> Facebook</a>
                <a style="font-size: 9pt; width: 100px; text-align: left;" href="" class="btn btn-info btn-xs no-radius"><i class="fa fa-twitter"></i> Twitter</a>
                <a style="font-size: 9pt; width: 100px; text-align: left;" href="" class="btn btn-success btn-xs no-radius"><i class="fa fa-whatsapp"></i> Whatsapp</a>
              </div>
              <div class="col-md-10">
                <?php foreach($news_rows->result() as $row){ ?>
                <h2 class="mb-3" style="font-size: 19pt; font-family: 'Fjalla One', sans-serif;"><?php echo $row->title; ?></h2>
                <div class="meta" style="color: #ddd;">
                    <a style="color: #000; font-size: 11pt;" href="#"><span class="icon-calendar"></span> <span class="day"><?php $date = $row->date_post; echo strip_tags(substr($date,8,2)); ?></span>
								<span class="mos"><?php $month = $row->date_post; $this_month = strip_tags(substr($month,6,7)); echo bulan($this_month); ?></span>
								<span class="yr"><?php $year = $row->date_post; echo strip_tags(substr($year, 0,4)); ?></span></a>
                    <a style="color: #000; font-size: 11pt;" href="#"><span class="icon-person"></span> Dave Lewis</a>
                    <a style="color: #000; font-size: 11pt;" href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                <img class="img-responsive" width="625" height="340"  src="<?= base_url('uploads/').$row->images; ?>" alt="<?= $row->title; ?>">
                <p style="text-align:justify;"><?= $row->content; ?></p>
                
                <div class="tag-widget post-tag-container mb-5 mt-5">
                  <div class="tagcloud">
                    <a href="#" class="tag-cloud-link">Life</a>
                    <a href="#" class="tag-cloud-link">Sport</a>
                    <a href="#" class="tag-cloud-link">Tech</a>
                    <a href="#" class="tag-cloud-link">Travel</a>
                  </div>
                </div>
            </div>
          </div></div></div>
          
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Cari berita...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate" style="margin-top: -60px;">
              <div class="card" style="background-color: #fafafa; padding: 10px; border: 0px;">
              <ul class="list-group">
              <li class="list-group-item active">Kategori</li>
              <?php foreach($category->result() as $cat){ ?>
                <li class="list-group-item"><a href=""><?php echo $cat->category_name; ?></a></li>
              <?php } ?>
              </ul>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <div class="sidebar-title" style="padding-left: 20px; padding-right: 20px; text-align: center;">
                <h3 style="border-bottom: 2px solid blue;">ARTIKEL YANG SAMA</h3>
              </div>
              <div class="card" style="background-color: #fafafa; border: 0px; padding: 20px;">
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
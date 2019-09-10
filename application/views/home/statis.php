<?php $this->load->view('home/nav'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url(); ?>public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container"><?php foreach($pages_row->result() as $row){ ?>
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="text-transform: uppercase;"><?php echo $row->title; ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#"><?php echo $row->title; ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $row->title_pages; ?> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section" style="margin-top: -100px;">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
          
            <h2 class="mb-3"><?php echo $row->title_pages; ?></h2>
            <p>
              <img src="<?php echo base_url('uploads/').$row->thumbnail; ?>" alt="" class="img-fluid">
            </p>
            <p style="text-align: justify;">Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
          <?php } ?>
          </div>

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Category</h3>
              <ul class="categories">
                <li><a href="#">Neurology <span>(6)</span></a></li>
                <li><a href="#">Cardiology <span>(8)</span></a></li>
                <li><a href="#">Surgery <span>(2)</span></a></li>
                <li><a href="#">Dental <span>(2)</span></a></li>
                <li><a href="#">Ophthalmology <span>(2)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
            	<h3>Archives</h3>
              <ul class="categories">
              	<li><a href="#">December 2018 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
              </ul>
            </div>


           
          </div><!-- END COL -->
        </div>
			</div>
		</section>
<?php $this->load->view('home/footer'); ?>
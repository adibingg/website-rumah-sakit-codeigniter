<?php $this->load->view('home/nav'); ?>
<?php $this->load->view('home/bread'); ?>

<section class="ftco-section" style="margin-top: -100px;">
    <div class="container">
        <div class="row">
           <div class="col-lg-8 ftco-animate">

              <h2 class="mb-3"><?php echo $row->title_pages; ?></h2>
              <p>
                 <img src="<?php echo base_url('uploads/').$row->thumbnail; ?>" alt="" class="img-fluid">
            </p>
            <p style="text-align: justify;"><?php echo $row->content; ?></p>

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
        <h3 style="text-transform: uppercase;"><?php echo $row->title; ?></h3>
        <ul class="categories">
            <?php
            $navigation = $row->id_navigation;  
            $this->db->where('id_navigation', $navigation);
            $statis = $this->db->get('static_pages'); ?>
            <?php foreach($statis->result() as $a){ ?> 
               <li>
                  <img src="" alt="">
                  <a href="#" class=""><?php echo $a->title_pages; ?></a>
             </li>
        <?php } ?>
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


<div class="sidebar-box ftco-animate">
 <div class="sidebar-title" style="padding-left: 20px; padding-right: 20px; text-align: center;">
    <h3 style="border-bottom: 2px solid blue;">ARTIKEL YANG SAMA</h3>
</div>
<div class="card" style="background-color: #fafafa; border: 0px; padding: 20px;">

</div>



</div><!-- END COL -->
</div>
</div>
</section>
<?php $this->load->view('home/footer'); ?>
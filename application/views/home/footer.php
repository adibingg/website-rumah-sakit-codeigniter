		
    <footer class="ftco-footer ftco-bg-blue ftco-section" style="padding: 10px; border-top: 10px solid #3ea0ab;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">RSU KARTINI</span></h2>
            
            </div>
            <div class="ftco-footer-widget mb-5">
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $address; ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+<?php echo $phone; ?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $email; ?></span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Link Terkait</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Profile Video</h2>
              <iframe width="300" height="200" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Pelayanan 24 Jam</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<p>Berlangganan, Dapatkan berita dan info kesehatan dari kami gratis</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Masukan E-Mail">
                  <input type="submit" value="Berlangganan Gratis" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rumah Sakit Umum Kartini Lampung Tengah</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url('public/'); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/popper.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/aos.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/scrollax.min.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/google-map.js"></script>
  <script src="<?php echo base_url('public/'); ?>js/main.js"></script>
  <script>
    $(document).ready(function(){
      $('#send').on('click', function(){
        event.preventDefault();
        var nama = $('#nama').val();
        var kontak = $('#kontak').val();
        var subjek = $('#subjek').val();
        var pesan = $('#pesan').val();
        $.ajax({
          type : 'POST',
          url : '<?php echo base_url(); ?>kontak/send_pesan',
          dataType : 'JSON',
          data : {nama:nama, kontak:kontak, subjek:subjek, pesan:pesan},
          success : function(data){
            console.log(data);
          }
        })
      })
    })
  </script>
  </body>
</html>
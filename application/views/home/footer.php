
    <footer class="ftco-footer ftco-bg-blue ftco-section" style="padding-top: 50px; padding-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2"><i class="fa fa-building"></i> RSU KARTINI</span></h2>
            </div>
            <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>CS : </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMERGENCY : </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMAIL : rumahsakitkartini@gmail.com </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMAIL : rumahsakitkartini@yahoo.com</a></li>
              </ul>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget ml-md-4">
              <h2 class="ftco-heading-2"><i class="fa fa-phone"></i> KONTAK KAMI</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>CS : </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMERGENCY : </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMAIL : rumahsakitkartini@gmail.com </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMAIL : rumahsakitkartini@yahoo.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget" style="float:right;">
              <h2 class="ftco-heading-2"><i class="fa fa-share-alt"></i> FIND AND FOLLOW</h2>
              <div class="ftco-footer-widget text-center">
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-youtube"></span></a></li>
              </ul>
            </div>
            </div>
          </div>
         <div class="col-md">
            <div class="ftco-footer-widget" style="float:right;">
              <h2 class="ftco-heading-2"><i class="fa fa-link"></i> LINK TERKAIT</h2>
              <div class="ftco-footer-widget">
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>KARS : </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>SIRS Online : </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMAIL : rumahsakitkartini@gmail.com </a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>EMAIL : rumahsakitkartini@yahoo.com</a></li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <div class="col-md-12 text-center text-white bg-info" style="margin-bottom: 0px; padding: 15px;">RSU Kartini <?php echo date('Y'); ?></div>

    
  

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
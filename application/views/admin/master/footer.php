        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Rumah Sakit Umum Kartini <a href="https://colorlib.com">Kalirejo Lampung Tengah</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets-admin/js/jquery-3.3.1.min.js"></script>

    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/nprogress/nprogress.js"></script>
    
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets-admin/js/custom.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?php echo base_url(); ?>assets-admin/sweetalert/sweetalert2.min.js"></script>
    <script>
      $(document).ready(function(){
            $('#nav-item').on('click',function(){
                var nav = $(this).attr('data');
                console.log(nav);
                return true;
            });
      });
    </script>
  </body>
  
</html>
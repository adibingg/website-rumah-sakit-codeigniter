        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets-admin/js/custom.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?php echo base_url(); ?>assets-admin/sweetalert/sweetalert2.min.js"></script>
    <script>
      $(document).ready(function(){
        //navigasi
        $('#menu').on('click', function(){
          alert("ma'af menu ini di atur secara default tidak dapat di perbaharui atau di hapus");
        });

        //berita
        $('#hapus_berita').on('click', function(){
          Swal.fire({
          title: 'Yakin ingin menghapus?',
          text: "Anda akan menghapus berita",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus'
            }).then((result) => {
              if (result.value) {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })
            return false;
        });
      });
      
    </script>
  </body>
</html>
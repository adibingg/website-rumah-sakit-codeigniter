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

            $('#save-cat'.).on('click', function(){
              var nama_kategori = $('#nama-kategori').val();

              $.ajax({
                url : '<?php echo base_url('admin/berita/save_category'); ?>',
                type : 'POST',
                dataType : 'json',
                data : {nama_kategori:nama_kategori},
                success:function(data){
                  console.log('success saving data to database');
                }
              });
            });

            load_category();

            load_modal_category();

            function load_category(){
              $.ajax({
                url: '<?php echo base_url('admin/berita/show_category'); ?>',
                type : 'GET',
                dataType: 'JSON',
                success:function(data){
                  var html = '';
                  var i;
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].category_id+'">' + data[i].category_name + '</option>'
                  }
                  $('#show-category').html(html);
                },
                error:function(data){
                  console.log('error showing data');
                }
              });
            }

            function load_modal_category(){
              $.ajax({
                url: '<?php echo base_url('admin/berita/show_category'); ?>',
                type : 'GET',
                dataType: 'JSON',
                success:function(data){
                  var html = '';
                  var i;
                  for(i=0; i<data.length; i++){
                    html += '<li class="list-group-item">' +data[i].category_name+
                                '<a href="<?php echo base_url('admin/berita/category_delete/')?>'+data[i].category_id+'" class="btn btn-danger btn-xs pull-right">'+'<i class="fa fa-remove">'+'</i></a>' +
                                '<a href="<?php echo base_url('admin/berita/category_delete/')?>'+data[i].category_id+'" class="btn btn-success btn-xs pull-right">'+'<i class="fa fa-pencil">'+'</i></a>' +
                            '</li>' 
                  }
                  $('#show-cat').html(html);
                },
                error:function(data){
                  console.log('error showing data');
                }
              });
            }
      });
    </script>
  </body>
  
</html>
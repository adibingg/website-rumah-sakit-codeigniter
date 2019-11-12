        <footer>
          <div class="pull-right">
            Rumah Sakit Umum Kartini <a href="#">Kalirejo Lampung Tengah</a>
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>

    <script src="<?php echo base_url(); ?>assets-admin/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/sweetalert/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets-admin/css/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script>
      $(document).ready(function(){
            function bacaGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#tampil-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
              }
            }
            
            $("#source_gambar").change(function(){
              bacaGambar(this);
            });
            
            $('#nav-item').on('click',function(){
                var nav = $(this).attr('data');
                console.log(nav);
                return true;
            });

            //Category
            $('#save-cat').on('click', function(){
              var nama_kategori = $('#category-name').val();
              $.ajax({
                url : '<?php echo base_url('admin/news/save_category'); ?>',
                type : 'POST',
                dataType : 'json',
                data : {nama_kategori:nama_kategori},
                success:function(data){
                  $('.bs-example-modal-sm1').modal('hide');
                  load_category();
                  load_modal_category();
                }
              });
            });

            load_category();

            load_modal_category();

            function load_category(){
              $.ajax({
                url: '<?php echo base_url('admin/news/show_category'); ?>',
                type : 'GET',
                dataType: 'JSON',
                success:function(data){
                  var html = '';
                  var i;
                  for(i=0; i<data.length; i++){
                    html += '<option style="padding: 7px;" value="'+data[i].category_id+'">' + data[i].category_name + '</option>'
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
                url: '<?php echo base_url('admin/news/show_category'); ?>',
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

            //Tags
            $('#save-tag').on('click', function(){
              var tag = $('#tag').val();
              $.ajax({
                url: '<?php echo base_url('admin/news/create_tags'); ?>',
                type:'POST',
                dataType: 'JSON',
                data:{tag:tag},
                success:function(data){
                  console.log('success', 200);
                }
              });
            });

            $('#myDatepicker1').datetimepicker({
                format: 'HH:mm A'
            });
            $('#myDatepicker2').datetimepicker({
                format: 'HH:mm A'
            });
          });
    </script>
  </body>
  
</html>
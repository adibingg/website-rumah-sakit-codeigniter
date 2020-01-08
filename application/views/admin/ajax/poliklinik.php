<script type="text/javascript">
	

	
	$(document).ready(function(){
		$('#save-polyclinic').on('click', function(){
			var polyname = $('#nama_poli').val();
			var description = $('#deskripsi').val();
			var id = $('#poly_id').val();
			if(id==''){
				$.ajax({
					url : '<?php echo base_url('admin/poliklinik/store'); ?>',
					type : 'POST',
					dataType : 'JSON',
					data : {poly:polyname, description:description},
					success:function(data){
						if(data==null){
							$('#nama_poli').val('');
							$('#deskripsi').val('');
							load_polyclinic();
							$('#modelId').modal('hide');
							Swal.fire(
								'Sukses!',
								'Berhasil menambahkan data poliklinik ' + polyname,
								'success'
								);
						}else{
							if($('#nama_poli').val()==''){
								$('#nama-poli').text(data.polyclinic_name);
							}else if($('#deskripsi').val()==''){
								$('#deskripsi-poli').text(data.description);
							}
						}
					}
				});
			}else{
				$.ajax({
					url : '<?php echo base_url('admin/poliklinik/update'); ?>',
					type : 'POST',
					dataType : 'JSON',
					data : {id:id, poly:polyname, description:description},
					success:function(data){
						if(data==null){
							$('#nama_poli').val('');
							$('#deskripsi').val('');
							$('#poly_id').val('');
							load_polyclinic();
							$('#modelId').modal('hide');
							Swal.fire(
								'Sukses!',
								'Berhasil memperbaharui data poliklinik ' + polyname,
								'success'
								);
						}else{
							if($('#nama_poli').val()==''){
								$('#nama-poli').text(data.polyclinic_name);
							}else if($('#deskripsi').val()==''){
								$('#deskripsi-poli').text(data.description);
							}
						}
					}
				});
			}
		});

		load_polyclinic();
		function load_polyclinic(){
			$.ajax({
				url: '<?php echo base_url('admin/poliklinik/show'); ?>',
				type : 'GET',
				dataType : 'JSON',
				success:function(data){
					var html='';
					var i;
					var no = 0;
					for(i=0; i<data.length; i++){
						html += '<tr>'+
						'<td>'+ ++no +'</td>'+
						'<td>'+ data[i].polyclinic_name +'</td>'+
						'<td>'+ data[i].description +'</td>'+
						'<td style="width: 200px;">' + 
						'<a href="javascript:;" data="'+data[i].polyclinic_id+'" class="btn btn-success btn-xs poli-edit">'+ '<i class="fa fa-edit">' + '</i>' + ' Perbaharui' +'</a>' +
						'<a href="javascript:;" description="'+data[i].polyclinic_name+'" data="'+data[i].polyclinic_id+'" class="btn btn-danger btn-xs poli_hapus">'+ '<i class="fa fa-trash">' + '</i>' + ' Hapus' +'</a>' +
						'</td>' +
						'</tr>';
					}
					$('#show-polyclinic').html(html);
				}
			});
		}

          //GET HAPUS
          $('#show-polyclinic').on('click','.poli_hapus',function(){
          	var id=$(this).attr('data');
          	var desc = $(this).attr('description');
          	$('#ModalHapus').modal('show');
          	$('[name="poli_id"]').val(id);
          	$('#desc').text(desc);
          });

          $('#button_poli_hapus').on('click',function(){
          	var kode=$('#textkode').val();
          	$.ajax({
          		type : "POST",
          		url  : "<?php echo base_url('admin/poliklinik/destroy')?>",
          		data : {id:kode},
          		dataType : "JSON",
          		success: function(data){
          			$('#ModalHapus').modal('hide');
          			load_polyclinic();
          		}
          	});
          	return false;
          });

          $('#show-polyclinic').on('click','.poli-edit',function(){
          	var id = $(this).attr('data');
          	$.ajax({
          		url : '<?php echo base_url('admin/poliklinik/show_by_id/'); ?>' + id,
          		type : 'GET',
          		dataType: 'JSON',
          		success:function(data){
          			for(var i=0; i<data.length; i++){
          				$('#poly_id').val(data[i].polyclinic_id);
          				$('#nama_poli').val(data[i].polyclinic_name);
          				$('#deskripsi').val(data[i].description);
          			}
          			$('#modelId').modal('show'); 
          		}
          	});
          });
      });
  </script>
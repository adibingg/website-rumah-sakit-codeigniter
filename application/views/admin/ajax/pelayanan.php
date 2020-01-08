<script type="text/javascript">
	$(document).ready(function(){
		load_pelayanan();

		function load_pelayanan(){
			$.ajax({
				url : '<?php echo base_url('admin/services/show'); ?>',
				type : 'GET',
				dataType : 'JSON',
				success:function(data){
					var html='';
					var i;
					var no = 0;
					for(i=0; i<data.length; i++){
						html += '<tr>'+
						'<td>'+ ++no +'</td>'+
						'<td>'+ data[i].service_name +'</td>'+
						'<td>'+ data[i].service_description +'</td>'+
						'<td style="width: 200px;">' + 
						'<a href="javascript:;" data="'+data[i].service_id+'" class="btn btn-success btn-xs data-edit">'+ '<i class="fa fa-edit">' + '</i>' + ' Perbaharui' +'</a>' +
						'<a href="javascript:;" description="'+data[i].service_name+'" data="'+data[i].service_id+'" class="btn btn-danger btn-xs data-hapus">'+ '<i class="fa fa-trash">' + '</i>' + ' Hapus' +'</a>' +
						'</td>' +
						'</tr>';
					}
					$('#show-service').html(html);
				},
				error:function(data){
					console.log(data);
				}
			});
		}

		$('#save-service').on('click', function(){
			var form = $('#form-service');
			var id = $('#service_id').val();
			
			if(id==''){
				$.ajax({
					url : '<?php echo base_url('admin/pelayanan/store'); ?>',
					type :'POST',
					data : form.serialize(),
					dataType: 'JSON',
					success:function(data){
						$('#id').val('');
						$('#pelayanan').val('');
						$('#deskripsi-pelayanan').val('');
						load_pelayanan();
						$('#modelId').modal('hide');
						load_pelayanan();
						$('#modelId').modal('hide');
						console.log("record added");
					},
					error:function(data){
						console.log("failed");
						console.log(data);
					}
				});
			}else{
				
				$.ajax({
					url : '<?php echo base_url('admin/pelayanan/update'); ?>',
					type :'POST',
					data : form.serialize(),
					dataType: 'JSON',
					success:function(data){
						$('#id').val('');
						$('#pelayanan').val('');
						$('#deskripsi-pelayanan').val('');
						load_pelayanan();
						$('#modelId').modal('hide');
						console.log("record updated");
					},
					error:function(data){
						console.log("failed");
						console.log(data);
					}
				});
			}

			
		});

		$('#show-service').on('click','.data-hapus',function(){
			var id = $(this).attr('data');
			$.ajax({
				url: '<?php echo base_url('admin/service/delete/'); ?>' + id,
				type : 'GET',
				dataType : 'JSON',
				success:function(data){
					console.log('record deleted' + data);
					load_pelayanan();
				},
				error:function(data){
					console.log(data);
				}
			});
		});

		$('#show-service').on('click','.data-edit',function(){
			var id = $(this).attr('data');
			$.ajax({
				url: '<?php echo base_url('admin/service/edit/'); ?>' + id,
				type : 'GET',
				dataType : 'JSON',
				success:function(data){
					
					for(var i = 0; i<data.length; i++){
						$('#service_id').val(data[i].service_id);
						$('#pelayanan').val(data[i].service_name);
						$('#deskripsi-pelayanan').val(data[i].service_description);
					}
					$('#modelId').modal('show');
				},
				error:function(data){
					console.log(data);
				}
			});
		});
	});
</script>}
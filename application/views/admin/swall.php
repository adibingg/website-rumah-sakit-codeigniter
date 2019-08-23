<script>
$(document).ready(function(){
  function load_category(){

  }

  function load_tag(){

  }

    $('.hapus').on('click', function(){
        var getlink = $(this).attr('href');
        Swal.fire({
          title: 'Yakin ingin menghapus?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Batalkan',
          confirmButtonText: 'Ya, Hapus'
            }).then((result) => {
              if (result.value) {
                document.location.href = getlink;
              }
            })
            return false;
    });

});
</script>
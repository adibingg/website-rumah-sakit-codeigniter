<script type="text/javascript">

$(document).ready(function(){
    $('#single-inbox').on('click', function(){
        var id = $(this).attr('data')

        $.ajax({
            url : '<?php echo base_url(); ?>',
            type : 'GET',
            dataType : 'JSON',
            success:function(){

            },
            error:function(){
                console.log("Something Wrong...")
            }
        })
    })
})

</script>
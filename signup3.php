<?php session_start() ?>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		$('#signup-frm button[type="submit"]').attr('disabled',true).html('Saving...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');
				}
			}
		})
	})
</script>
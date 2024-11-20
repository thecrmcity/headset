$(document).ready(function(){
	$('#userlog').on('click',function(e){
		e.preventDefault();

		var usernam = $('#usernam').val();
		var userpass = $('#userpass').val();

		$.ajax({
			url: basepath +"applications/core/general.php?case=userlogin",
			type: 'post',
			data: {username:usernam,userpast:userpass},
			success: function(data)
			{
				window.location.href= basepath +"dashboard.php";
			}
		});

	});
});
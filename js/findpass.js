$(function(){
	$(":button").button();
	$("#findpass_form").validate({
		rules:{
			username:{
				required:true,
			},
			safe:{
				required:true,
			}
		},
		messages:{
			username:{
				required:'账号不得为空!',
			},
			safe:{
				required:'安全码不得为空!',
			}
		},
		errorLabelContainer:'ol.error',
		wrapper:'li',
		submitHandler:function(){
			$("#findpass_form").ajaxSubmit({
				url:'findpass_control.php',
				type:'post',
				success:function(response){
					if(response!=1){
						$(".findpass_error").html('账号或安全码不正确!');
					}else{
						$.cookie('username',$("input[name='username']").val());
						location.href='changepass.php';
					}
				},
			});
		}
	});
});













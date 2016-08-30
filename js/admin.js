$(function(){
	$("#adlogin button").button();
	$("#adlogin").validate({
		rules:{
			adminname:{
					required:true,
			},
			adminpass:{
					required:true,
			}
		},
		messages:{
			adminname:{
					required:'账号不得为空',
			},
			adminpass:{
					required:'密码不得为空',
			}
		},
		submitHandler:function(){
			$('#adlogin').ajaxSubmit({
				url:'admin_control.php',
				type:'post',
				success:function(response){
                   //alert(response);
                   if(response==8){
      
						$.cookie('user',$('.adminname').val());
                       //alert($.cookie('user'));
						location.href="admin_c.php";
					}else if(response==9){
						alert('用户不存在或密码不正确！');
					}else if(response <= 5){
						alert('密码输入错误'+response+'次!');
					}else{
						alert("密码输入错误次数超限，无法登陆!!!");
					}
				}
			});
		}
	});
});
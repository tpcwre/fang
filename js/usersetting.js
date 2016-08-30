$(function(){
	$(".delid").click(function(){
		$.cookie('delid',$(this).attr('delid'));
		location.href='usersetting.php';
	});
	if(!$.cookie('user')){
		location.href='index.php';
	}
								//检测是否有cookie并按其显示或隐藏
	if(!$.cookie('ufval')){
		$(".ups").css('display','none');
		$(".user_result_info").css('display','block');
	}else{
		//alert($.cookie('ufval'));
		$(".ups").css('display','none');
		$('.'+$.cookie('ufval')).css('display','block');
	}
									//获取修改密码及密保项的值并保存cookie
									
	var bi=$.cookie('bottomind');
	$(".u_f").eq(bi).css('border-bottom','0px');
	$('.u_f').click(function(){
		$(".u_f").css('border-bottom','1px');
		var ufval=$(this).attr('ufval');
		$.cookie('ufval',ufval);
		$.cookie('bottomind',$(this).index());		//获取点击时的元素下标
		location.href='usersetting.php';
		
	});
	
	
	
	
	
	
	
	
									//信息，密码，密保悬停样式
	$(".u_f").hover(function(){
		$(this).css({
			'background':'#eef',
			"cursor":"pointer",
		});
	},function(){
		$(this).css('background','#fff');
	});
	
	$(".u_r_i").hover(function(){
		$(this).css('background','#eef');
	},function(){
		$(this).css('background','#fff');
	});
	
	
	
													//修改密码，验证规则及异步提交
	$("#modifypass_form").validate({
		rules:{
			ypass:{
				required:true,
			},
			newpass:{
				required:true,
				minlength:6,
			},
			newpass2:{
				equalTo:'#newpass',
			},
		},
		messages:{
			ypass:{
				required:'原密码不得为空',
			},
			newpass:{
				required:'新密码不得为空',
				minlength:'新密码不得少于6位',
			},
			newpass2:{
				equalTo:'两次密码输入不一致',
			},
		},
		errorClass:'error_red',
		submitHandler:function(){
			$("#modifypass_form").ajaxSubmit({
				url:'usersetting_modifypass.php',
				type:'post',
				beforeSubmit:function(){
					//alert('正在提交中...');
				},
				success:function(response){
					if(response==1){
						$(".error_red").html('');
						$(".error_red").html("密码修改成功！");
						$("#modifypass_form").resetForm();
					}else if(response==0){
						$(".error_red").html('原密码不正确');
					}else if(response==2){
						$(".error_red").html('新密码不能与原密码相同！！！');
					}
				}
			});
			
		},
	});
	
	
	
	
												//密保验证规则及异步提交
	$("#safe_form").validate({
		rules:{
			safe:{
				required:true,
				rangelength:[5,15],
			}
		},
		messages:{
			safe:{
				required:'安全码不得为空',
				rangelength:'安全码长度介于5到15位',
			}
		},
		submitHandler:function(){
			$("#safe_form").ajaxSubmit({
				url:'usersetting_safe.php',
				type:'post',
				success:function(response){
					if(response==0){
						$(".error_safe").html('该账号已经设置了安全码!!!');
					}
					if(response==1){
						$(".error_safe").html('安全码设置成功!!!');
					}
				}
			});
		},
	});

	
	
});
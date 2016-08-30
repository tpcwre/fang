$(function(){
	if($.cookie('user')){							//=====判断用户是否以登陆
		$('#login_a, #reg_a').css('display','none');
		$("#user_a, #exit_a").css('display','inline');
		$("#user_a").html($.cookie('user')+'用户设置');
	}else{
		$('#login_a, #reg_a').css('display','inline');
		$("#user_a, #exit_a").css('display','none');
	}

	
	
	$("#exit_a").click(function(){						//=====用户退出 
		$.removeCookie('user');
		location.href='';
	});


	$("#login_a").click(function(){							//=====点击登陆
		$("#login").dialog('open');
	});
	
	
	$("#reg_a").click(function(){							//=====点击注册
		$("#reg").dialog('open');
	});

															//===loading 对话框
	$('.login_loading').dialog({
		autoOpen:false,
		width:420,
		height:80,
		draggable:false,
		resizable:false,
		closeOnEscape:false,
		modal:true,
	});
	$('.login_loading').dialog('widget').find('.ui-widget-header').css('display','none');			
	$('#ui-id-1').css({
		'color':'red',
		'fontSize':'30px',
		'textAlign':'center',
	});

	
	
	
	
	
	
	
															//===登陆对话框 
	$("#login").dialog({
	//	position:'right,top',
		autoOpen:false,
		title:'用户登陆',
		resizable:false,
		draggable:false,
		modal:true,
		buttons:{
			'登陆':function(){
				$("#login").submit();
			}
		},
	}).validate({											//=====登陆验证规则
		rules:{
			user:{
				required:true,
			},
			pass:{
				required:true,
			},
			code:{
				required:true,
				remote:'page_codeyz.php',
			}
		},
		messages:{
			user:{
				required:'用户名不得为空',
			},
			pass:{
				required:'密码不得为空',
			},
			code:{
				required:'验证码不得为空',
				remote:'验证码错误',
			}
		},
		errorClass:'error_red',
		
		submitHandler:function(){
			$("#login").ajaxSubmit({							//=====登陆ajax表单提交
				url:'page_reg_login_control.php',
				type:'post',

				success:function(response){
					if(response==1){
						$.cookie('user',$(".login_user").val());
						$("#login").dialog('close');
						$(".login_loading").dialog('open').html('登陆成功！');
						$("#reg_a, #login_a").css('display','none');
						$("#user_a, #exit_a").css('display','inline');						
						$("#user_a").html($.cookie('user')+'用户设置');
					}else{
						$('.login_loading').dialog('open').html('用户名或密码不正确！');
						$("#login").resetForm();
					}
					
					setTimeout(function(){
						$(".login_loading").dialog('close').html('数据正在提交中......');
					},1000);
				}
			});
		},
	});
	
	
	
	
	
	
	
	
	
	
																//=====注册对话框 
	$("#reg").dialog({
		//position:'right,top',
		autoOpen:false,
		title:'用户注册',
		width:320,
		draggable:false,
		resizable:false,
		modal:true,
		buttons:{
			'注册':function(){
				$("#reg").submit();
			}
		}
	}).validate({												//=====注册验证规则
		rules:{
			ruser:{
				required:true,
                minlength:3,
				remote:'page_reg_remote.php',
			},
			rpass:{
				required:true,
                minlength:5,
			},
			rpass2:{
				required:true,
				equalTo:'#page_login_rpass',
			},
			rcode:{
				required:true,
				remote:'page_codeyz.php',
			}
		},
		messages:{
			ruser:{
				required:'用户名不得为空',
                minlength:'用户名不得小于3位',
				remote:'用户名已被占用',
			},
			rpass:{
				required:'密码不得为空',
                minlength:'密码不得少于5位',
			},
			rpass2:{
				required:'密码不得为空',
				equalTo:'密码不一致',
			},
			rcode:{
				required:'验证码不得为空',
				remote:'验证码错误',
			}
		},
		errorClass:'error_red',
		submitHandler:function(){
			$("#reg").ajaxSubmit({
				url:'page_reg_login_control.php',
				type:'post',
				beforeSubmit:function(){
					$(".login_loading").dialog('open');
				},
				success:function(response){
					//alert(response);
					if(response!=0){
						$.cookie('user',response);
						$("#reg").dialog('close');
						$(".login_loading").dialog('open').html('用户注册成功');
						$("#reg_a, #login_a").css('display','none');
						$("#user_a, #exit_a").css('display','inline');
						$("#user_a").html($.cookie('user')+'用户设置');
					}else{
						$("#reg").resetForm();
						$(".login_loading").dialog('open').html('用户注册失败');
					}
					
					setTimeout(function(){
						$(".login_loading").dialog('close').html('数据正在提交中......');
					},1000);
				}
			});
		}
	});
	
	
	
});








